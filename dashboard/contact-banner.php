<?php
ob_start();
include "header.php";
include "sidebar.php";
include "z_db.php";
?>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Update Banner</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Banner</a></li>
                                <li class="breadcrumb-item active">Add</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['media'])) {
                $uploadDir = 'uploads/about/';
                $fileName = basename($_FILES['media']['name']);
                $uploadFile = $uploadDir . $fileName;
                $heading = trim($_POST['heading']);
                $mediaType = $_FILES['media']['type'];

                // Create upload directory if not exists
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }

                // Determine if file is an image or video
                if (strpos($mediaType, 'image') !== false) {
                    $type = 'image';
                } elseif (strpos($mediaType, 'video') !== false) {
                    $type = 'video';
                } else {
                    echo "<div class='alert alert-danger'>Invalid file type! Only images and videos allowed.</div>";
                    exit;
                }

                // Upload file and insert into database
                if (!empty($heading) && move_uploaded_file($_FILES['media']['tmp_name'], $uploadFile)) {
                    $stmt = $con->prepare("INSERT INTO contactbanner (media_url, media_type, heading) VALUES (?, ?, ?)");
                    if ($stmt) {
                        $stmt->bind_param("sss", $uploadFile, $type, $heading);
                        if ($stmt->execute()) {
                            echo "<div class='alert alert-success'>Banner uploaded successfully!</div>";
                            header("Location: " . $_SERVER['PHP_SELF']);
                            exit;
                        } else {
                            echo "<div class='alert alert-danger'>Database error: " . $stmt->error . "</div>";
                        }
                        $stmt->close();
                    }
                } else {
                    echo "<div class='alert alert-danger'>Upload failed!</div>";
                }
            }

            if (isset($_GET['delete'])) {
                $id = (int)$_GET['delete'];
                $stmt = $con->prepare("SELECT media_url FROM contactbanner WHERE id = ?");
                if ($stmt) {
                    $stmt->bind_param("i", $id);
                    $stmt->execute();
                    $stmt->bind_result($media_url);
                    $stmt->fetch();
                    $stmt->close();

                    if ($media_url && file_exists($media_url)) {
                        unlink($media_url);
                    }

                    $stmt_delete = $con->prepare("DELETE FROM contactbanner WHERE id = ?");
                    if ($stmt_delete) {
                        $stmt_delete->bind_param("i", $id);
                        if ($stmt_delete->execute()) {
                            echo "<div class='alert alert-success'>Deleted successfully!</div>";
                        } else {
                            echo "<div class='alert alert-danger'>Deletion failed!</div>";
                        }
                        $stmt_delete->close();
                    }
                }
            }

            // Check if any banner exists
            $result = $con->query("SELECT COUNT(*) AS count FROM contactbanner");
            $row = $result->fetch_assoc();
            $uploadsExist = $row['count'] > 0;
            ?>

            <div class="card">
                <div class="card-header">Upload Image or Video</div>
                <div class="card-body">
                    <?php if (!$uploadsExist): ?>
                    <form method="POST" enctype="multipart/form-data">
                        <label for="media">Select Image or Video:</label>
                        <input type="file" name="media" id="media" class="form-control" accept="image/*,video/*" required>

                        <label for="heading" class="mt-3">Heading:</label>
                        <input type="text" name="heading" id="heading" class="form-control" required>

                        <button type="submit" class="btn btn-primary mt-3">Upload</button>
                    </form>
                    <?php endif; ?>
                </div>
            </div>

            <div class="uploaded-media">
                <?php
                $sql = "SELECT id, media_url, media_type, heading FROM contactbanner";
                $result = $con->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='media-card'>";
                        if ($row['media_type'] === 'image') {
                            echo "<img src='" . htmlspecialchars($row['media_url']) . "' alt='Banner Image'>";
                        } elseif ($row['media_type'] === 'video') {
                            echo "<video controls><source src='" . htmlspecialchars($row['media_url']) . "' type='video/mp4'></video>";
                        }
                        echo "<h5>" . htmlspecialchars($row['heading']) . "</h5>";
                        echo "<a href='?delete=" . $row['id'] . "' class='btn btn-danger'>Delete</a>";
                        echo "</div>";
                    }
                } else {
                    echo "<div class='alert alert-warning'>No banners found.</div>";
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>
<?php ob_end_flush(); ?>

<style>
    .media-card img, .media-card video { width: 100%; max-height: 300px; object-fit: cover; }
</style>
