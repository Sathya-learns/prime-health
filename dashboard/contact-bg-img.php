<?php 
ob_start(); // Start output buffering
include "header.php"; 
include "sidebar.php"; 
include "z_db.php"; // Include the database connection
?>

<style>
.uploaded-services .service-card {
    width: 300px; 
    margin: 10px;
    padding: 10px;
    border-radius: 10px;
    text-align: center;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}
.uploaded-services img {
    width: 300px; 
    height: auto;
    object-fit: cover;
}
.uploaded-services {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
    margin: auto;
    justify-content: center;
}
</style>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <?php
                // Delete image handling
                if (isset($_GET['delete_service'])) {
                    $stmt = $con->prepare("SELECT image_url FROM contactdetailimg LIMIT 1");
                    $stmt->execute();
                    $stmt->store_result();
                    $stmt->bind_result($image_url);
                    $stmt->fetch();

                    if ($image_url) {
                        $stmt_delete = $con->prepare("DELETE FROM contactdetailimg");
                        if ($stmt_delete->execute() && file_exists($image_url)) {
                            unlink($image_url);
                        }
                        $stmt_delete->close();
                    }
                    $stmt->close();
                    header("Location: " . $_SERVER['PHP_SELF']);
                    exit;
                }

                // File upload handling
                $result = $con->query("SELECT id FROM contactdetailimg LIMIT 1");
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image']) && $result->num_rows === 0) {
                    $uploadDir = 'uploads/contact/'; 
                    $fileName = basename($_FILES['image']['name']);
                    $uploadFile = $uploadDir . $fileName;

                    if (!is_dir($uploadDir)) {
                        mkdir($uploadDir, 0777, true);
                    }

                    if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
                        $stmt = $con->prepare("INSERT INTO contactdetailimg (image_url) VALUES (?)");
                        if ($stmt) {
                            $stmt->bind_param("s", $uploadFile);
                            $stmt->execute();
                            $stmt->close();
                            header("Location: " . $_SERVER['PHP_SELF']);
                            exit;
                        }
                    }
                }
                ?>

                <!-- File Upload Form -->
                <form method="POST" enctype="multipart/form-data" class="form-inline">
                    <label for="image" class="form-label">Upload Image</label>
                    <input type="file" name="image" id="image" class="form-control" required <?php if ($result->num_rows > 0) echo 'disabled'; ?>>
                    <button type="submit" class="btn btn-primary mt-3" <?php if ($result->num_rows > 0) echo 'disabled'; ?>>Upload</button>
                </form>

                <!-- Display Uploaded Image -->
                <div style="margin-top:80px;">
                    <h4>Uploaded Image:</h4>
                    <div class="uploaded-services">
                        <?php
                        $sql = "SELECT id, image_url FROM contactdetailimg LIMIT 1";
                        $result = $con->query($sql);

                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            echo "<div class='service-card'>";
                            echo "<img src='" . htmlspecialchars($row['image_url']) . "' alt='Image'>";
                            echo "<br><a href='?delete_service=" . $row['id'] . "' class='btn btn-danger mt-2'>Delete</a>";
                            echo "</div>";
                        } else {
                            echo "<div class='alert alert-warning'>No Image found.</div>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>
<?php ob_end_flush(); ?>
