<?php
include 'header.php';
include 'sidebar.php';
include 'z_db.php';

// Handle Form Submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $heading = $_POST['heading'];
    $para = $_POST['para'];
    $upload_dir = "uploads/";

    if (!file_exists($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    $file_name = $_FILES['media']['name'];
    $file_tmp = $_FILES['media']['tmp_name'];
    $file_type = $_FILES['media']['type'];
    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

    // Allowed file types
    $allowed_image_types = ['jpg', 'jpeg', 'png', 'gif'];
    $allowed_video_types = ['mp4', 'mov', 'avi', 'webm'];

    if (in_array($file_ext, $allowed_image_types) || in_array($file_ext, $allowed_video_types)) {
        $file_path = $upload_dir . basename($file_name);
        
        if (move_uploaded_file($file_tmp, $file_path)) {
            $media_type = in_array($file_ext, $allowed_image_types) ? 'image' : 'video';
            $sql = "INSERT INTO home_banner (media_path, heading,para, media_type) VALUES ('$file_path', '$heading','$para', '$media_type')";
            
            if ($con->query($sql) === TRUE) {
                echo "<script>alert('Banner Added Successfully!');</script>";
            } else {
                echo "<script>alert('Error: " . $con->error . "');</script>";
            }
        }
    } else {
        echo "<script>alert('Invalid file type! Please upload an image or video.');</script>";
    }
}

// Handle Delete Request
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM home_banner WHERE id = $id";
    if ($con->query($sql) === TRUE) {
        echo "<script>alert('Banner Deleted Successfully!'); window.location='home.php';</script>";
    }
}

// Fetch Banners
$result = $con->query("SELECT * FROM home_banner");
?>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Home Banner</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Banner</a></li>
                                <li class="breadcrumb-item active">Add</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#bannerDetails" role="tab">
                                <i class="fas fa-image"></i> Home Banner
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">

                    <!-- Upload Form -->
                    <form method="post" enctype="multipart/form-data" class="p-4 border rounded shadow-sm bg-light">
                        <div class="mb-3">
                            <label class="form-label">Upload Image or Video:</label>
                            <input type="file" name="media" class="form-control" accept="image/*, video/*" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Heading:</label>
                            <input type="text" name="heading" class="form-control" placeholder="Enter heading" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Para:</label>
                            <textarea name="para" class="form-control" placeholder="Enter para" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Upload Banner</button>
                    </form>

                    <hr>

                    <!-- Display Uploaded Banners -->
                    <h4 class="mt-4 text-center">Uploaded Details</h4>
                    <div class="uploaded-services">
                        <?php while ($row = $result->fetch_assoc()): ?>
                            <div class="service-card">
                                <div class="service-media">
                                    <?php if ($row['media_type'] == 'image'): ?>
                                        <img src="<?= $row['media_path'] ?>" width="280" height="120">
                                    <?php elseif ($row['media_type'] == 'video'): ?>
                                        <video width="280" height="120" controls>
                                            <source src="<?= $row['media_path'] ?>" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    <?php endif; ?>
                                </div>
                                <div class="service-text">
                                    <h5><?= htmlspecialchars($row['heading']) ?></h5>
                                    <p><?= htmlspecialchars($row['para']) ?></p>
                                </div>
                                <div class="service-actions">
                                    <a href="home.php?delete=<?= $row['id'] ?>" onclick="return confirm('Are you sure?');" class="btn btn-danger">Delete</a>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .uploaded-services {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .service-card {
        display: flex;
        flex-direction: row;
        align-items: center;
        border: 1px solid #ddd;
        padding: 15px;
        margin: 10px;
        width: 100%;
        max-width: 700px;
        border-radius: 8px;
    }

    .service-media img, .service-media video {
        width: 280px;
        height: 120px;
        object-fit: cover;
        border-radius: 8px;
        margin-right: 15px;
    }

    .service-text {
        flex: 1;
    }

    @media (max-width: 768px) {
        .service-card {
            flex-direction: column;
            text-align: center;
        }

        .service-media img, .service-media video {
            margin-bottom: 10px;
        }
    }
</style>

<?php include 'footer.php'; ?>