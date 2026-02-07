<?php
// Enable all errors at the VERY TOP
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

include 'header.php';
include 'sidebar.php';
include 'z_db.php';

// Check database connection
if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
}

/* ===========================
   CREATE TABLE IF NOT EXISTS - PROJECT DETAILS
=========================== */
$createTable = "CREATE TABLE IF NOT EXISTS project_details (
    id INT AUTO_INCREMENT PRIMARY KEY,
    project_name VARCHAR(255) NOT NULL,
    slug VARCHAR(255) UNIQUE NOT NULL,
    treatment_type VARCHAR(255),
    banner_image VARCHAR(500),
    banner_heading VARCHAR(255),
    treatment_name_1 VARCHAR(255),
    treatment_image_1 VARCHAR(500),
    treatment_description_1 TEXT,
    treatment_details_1 TEXT,
    treatment_name_2 VARCHAR(255),
    treatment_image_2 VARCHAR(500),
    treatment_description_2 TEXT,
    treatment_details_2 TEXT,
    status TINYINT DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (!mysqli_query($con, $createTable)) {
    die("Table creation failed: " . mysqli_error($con));
}

/* ===========================
   PROJECTS LIST (STATIC - 3 Projects)
=========================== */
$projects = [
    "Surgical Heart Bypass",
    "Cardiopulmonary Resuscitation", 
    "Spinal Cord Decompression Theory"
];

/* ===========================
   SELECTED PROJECT
=========================== */
$selectedProject = $_GET['project'] ?? "";

/* ===========================
   FETCH DETAILS IF EXISTS
=========================== */
$editData = null;

if (isset($_GET['project'])) {
    $project_name = mysqli_real_escape_string($con, $_GET['project']);
    $slug = strtolower(str_replace(" ", "-", $project_name));

    // Check if project exists in database
    $res = mysqli_query($con, "SELECT * FROM project_details WHERE slug='$slug'");
    
    if ($res && mysqli_num_rows($res) > 0) {
        $editData = mysqli_fetch_assoc($res);
    } else {
        // AUTO-CREATE ENTRY IF NOT EXISTS - IMPORTANT PART
        $insertNew = mysqli_query($con, "INSERT INTO project_details (project_name, slug, status) 
                                        VALUES ('$project_name', '$slug', 1)");
        if ($insertNew) {
            // Fetch the newly created entry
            $res = mysqli_query($con, "SELECT * FROM project_details WHERE slug='$slug'");
            if ($res && mysqli_num_rows($res) > 0) {
                $editData = mysqli_fetch_assoc($res);
            }
        }
    }
}

/* ===========================
   INSERT / UPDATE
=========================== */
if (isset($_POST['submit']) || isset($_POST['update'])) {

    $project_name = mysqli_real_escape_string($con, $_POST['project_name']);
    $slug = strtolower(str_replace(" ", "-", $project_name));
    
    $treatment_type = mysqli_real_escape_string($con, $_POST['treatment_type']);
    $banner_heading = mysqli_real_escape_string($con, $_POST['banner_heading']);
    $treatment_name_1 = mysqli_real_escape_string($con, $_POST['treatment_name_1']);
    $treatment_description_1 = mysqli_real_escape_string($con, $_POST['treatment_description_1']);
    $treatment_details_1 = mysqli_real_escape_string($con, $_POST['treatment_details_1']);
    $treatment_name_2 = mysqli_real_escape_string($con, $_POST['treatment_name_2']);
    $treatment_description_2 = mysqli_real_escape_string($con, $_POST['treatment_description_2']);
    $treatment_details_2 = mysqli_real_escape_string($con, $_POST['treatment_details_2']);
    
    $status = 1;

    /* Banner Image */
    if (!empty($_FILES['banner_image']['name'])) {
        $dir = "uploads/projects/";
        if (!is_dir($dir)) mkdir($dir, 0777, true);
        $banner_image = $dir.time()."_".$_FILES['banner_image']['name'];
        move_uploaded_file($_FILES['banner_image']['tmp_name'], $banner_image);
    } else {
        $banner_image = $editData['banner_image'] ?? '';
    }

    /* Treatment 1 Image */
    if (!empty($_FILES['treatment_image_1']['name'])) {
        $dir = "uploads/projects/treatments/";
        if (!is_dir($dir)) mkdir($dir, 0777, true);
        $treatment_image_1 = $dir.time()."_".$_FILES['treatment_image_1']['name'];
        move_uploaded_file($_FILES['treatment_image_1']['tmp_name'], $treatment_image_1);
    } else {
        $treatment_image_1 = $editData['treatment_image_1'] ?? '';
    }

    /* Treatment 2 Image */
    if (!empty($_FILES['treatment_image_2']['name'])) {
        $dir = "uploads/projects/treatments/";
        if (!is_dir($dir)) mkdir($dir, 0777, true);
        $treatment_image_2 = $dir.time()."_".$_FILES['treatment_image_2']['name'];
        move_uploaded_file($_FILES['treatment_image_2']['tmp_name'], $treatment_image_2);
    } else {
        $treatment_image_2 = $editData['treatment_image_2'] ?? '';
    }

    // Always UPDATE since entry already exists (created when dropdown selected)
    $q = mysqli_query($con, "UPDATE project_details SET
    treatment_type='$treatment_type',
    banner_heading='$banner_heading',
    banner_image='$banner_image',
    treatment_name_1='$treatment_name_1',
    treatment_image_1='$treatment_image_1',
    treatment_description_1='$treatment_description_1',
    treatment_details_1='$treatment_details_1',
    treatment_name_2='$treatment_name_2',
    treatment_image_2='$treatment_image_2',
    treatment_description_2='$treatment_description_2',
    treatment_details_2='$treatment_details_2'
    WHERE slug='$slug'");

    if (!$q) {
        die("Update failed: " . mysqli_error($con));
    }

    echo "<script>alert('Project Saved Successfully!');</script>";
    
    // Refresh the editData after update
    $res = mysqli_query($con, "SELECT * FROM project_details WHERE slug='$slug'");
    if ($res && mysqli_num_rows($res) > 0) {
        $editData = mysqli_fetch_assoc($res);
    }
}

/* ===========================
   DELETE PROJECT
=========================== */
if (isset($_GET['delete'])) {
    $slug = mysqli_real_escape_string($con, $_GET['delete']);
    mysqli_query($con, "DELETE FROM project_details WHERE slug='$slug'");
    echo "<script>alert('Deleted Successfully!'); window.location='project_details.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Details</title>
    <style>
        /* VIEW DETAILS CARD */
        .view-details {
            background: #f9fbff;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
        }

        /* TITLE */
        .view-details h4 {
            font-size: 26px;
            font-weight: 700;
            color: #0B2C59;
            margin-bottom: 25px;
            border-bottom: 2px solid #e6edff;
            padding-bottom: 10px;
        }

        /* LABEL + VALUE */
        .view-details p {
            font-size: 15px;
            color: #333;
            margin-bottom: 10px;
            line-height: 1.6;
        }

        .view-details p b {
            color: #0B2C59;
            min-width: 180px;
            display: inline-block;
        }

        /* SECTION HEADINGS */
        .view-details h5 {
            margin-top: 30px;
            font-size: 20px;
            font-weight: 700;
            color: #0B2C59;
            border-left: 4px solid #0B2C59;
            padding-left: 10px;
        }

        /* IMAGES */
        .view-details .view-img {
            width: 180px;
            height: auto;
            border-radius: 12px;
            margin-top: 10px;
            box-shadow: 0 6px 15px rgba(0,0,0,0.15);
        }
    </style>
</head>
<body>

<div class="d-flex">
<div id="main-content" class="flex-grow-1 p-4" style="margin-left:220px; color:#000;">

<!-- SELECT PROJECT -->
<div class="card shadow border-0 mb-4">
<div class="card-body">
<h4 class="mb-3">Select Project</h4>

<form method="GET">
<select name="project" onchange="this.form.submit()" class="form-select" required>
<option value="">-- Select Project --</option>
<?php foreach($projects as $p){ ?>
<option value="<?= htmlspecialchars($p) ?>" <?= ($selectedProject==$p?'selected':'') ?>>
    <?= htmlspecialchars($p) ?>
</option>
<?php } ?>
</select>
</form>

<?php if($editData){ ?>
<hr>

<div class="card shadow border-0 mt-4 view-details">
<div class="card-body">

<h4 class="mb-3">View Project Details</h4>

<p><b>Project Name:</b> <?= htmlspecialchars($editData['project_name']); ?></p>
<p><b>Treatment Type:</b> <?= htmlspecialchars($editData['treatment_type']); ?></p>
<p><b>Banner Heading:</b> <?= htmlspecialchars($editData['banner_heading']); ?></p>

<?php if($editData['banner_image']){ ?>
<p><b>Banner Image:</b><br>
<img src="<?= htmlspecialchars($editData['banner_image']); ?>" class="view-img">
</p>
<?php } ?>

<h5>Treatment 1 Section</h5>
<p><b>Treatment Name:</b> <?= htmlspecialchars($editData['treatment_name_1']); ?></p>
<p><b>Description:</b> <?= htmlspecialchars($editData['treatment_description_1']); ?></p>
<p><b>Details:</b> <?= htmlspecialchars($editData['treatment_details_1']); ?></p>
<?php if($editData['treatment_image_1']){ ?>
<p><b>Treatment Image:</b><br>
<img src="<?= htmlspecialchars($editData['treatment_image_1']); ?>" class="view-img">
</p>
<?php } ?>

<h5>Treatment 2 Section</h5>
<p><b>Treatment Name:</b> <?= htmlspecialchars($editData['treatment_name_2']); ?></p>
<p><b>Description:</b> <?= htmlspecialchars($editData['treatment_description_2']); ?></p>
<p><b>Details:</b> <?= htmlspecialchars($editData['treatment_details_2']); ?></p>
<?php if($editData['treatment_image_2']){ ?>
<p><b>Treatment Image:</b><br>
<img src="<?= htmlspecialchars($editData['treatment_image_2']); ?>" class="view-img">
</p>
<?php } ?>

</div>
</div>
<?php } ?>

</div>
</div>

<?php if($selectedProject != ""){ ?>
<div class="card shadow border-0 mb-4">
<div class="card-body">

<h4 class="mb-4">Edit <?= htmlspecialchars($selectedProject) ?> Details</h4>

<form method="POST" enctype="multipart/form-data">
<input type="hidden" name="project_name" value="<?= htmlspecialchars($selectedProject) ?>">

<!-- Treatment Type Dropdown -->
<div class="mb-3">
<label class="form-label fw-bold">Treatment Type</label>
<select name="treatment_type" class="form-select">
    <option value="">-- Select Treatment Type --</option>
    <option value="Minimal Invasive" <?= ($editData && $editData['treatment_type']=='Minimal Invasive')?'selected':'' ?>>Minimal Invasive</option>
    <option value="Robotic Surgery" <?= ($editData && $editData['treatment_type']=='Robotic Surgery')?'selected':'' ?>>Robotic Surgery</option>
    <option value="Traditional" <?= ($editData && $editData['treatment_type']=='Traditional')?'selected':'' ?>>Traditional</option>
</select>
</div>

<!-- Banner Section -->
<h5 class="mt-4">Banner Section</h5>

<div class="mb-3">
<label class="form-label fw-bold">Banner Heading</label>
<input type="text" name="banner_heading" class="form-control" value="<?= htmlspecialchars($editData['banner_heading'] ?? '') ?>">
</div>

<div class="mb-3">
<label class="form-label fw-bold">Banner Image</label>
<input type="file" name="banner_image" class="form-control">
<?php if($editData && $editData['banner_image']){ ?>
<img src="<?= htmlspecialchars($editData['banner_image']) ?>" width="150" class="img-thumbnail mt-2">
<?php } ?>
</div>

<!-- Treatment 1 Section -->
<h5 class="mt-4">Treatment 1 Section</h5>

<div class="mb-3">
<label class="form-label fw-bold">Treatment Name</label>
<input type="text" name="treatment_name_1" class="form-control" value="<?= htmlspecialchars($editData['treatment_name_1'] ?? '') ?>">
</div>

<div class="mb-3">
<label class="form-label fw-bold">Treatment Image</label>
<input type="file" name="treatment_image_1" class="form-control">
<?php if($editData && $editData['treatment_image_1']){ ?>
<img src="<?= htmlspecialchars($editData['treatment_image_1']) ?>" width="150" class="img-thumbnail mt-2">
<?php } ?>
</div>

<div class="mb-3">
<label class="form-label fw-bold">Treatment Description</label>
<textarea name="treatment_description_1" rows="3" class="form-control"><?= htmlspecialchars($editData['treatment_description_1'] ?? '') ?></textarea>
</div>

<div class="mb-3">
<label class="form-label fw-bold">Treatment Details</label>
<textarea name="treatment_details_1" rows="4" class="form-control"><?= htmlspecialchars($editData['treatment_details_1'] ?? '') ?></textarea>
</div>

<!-- Treatment 2 Section -->
<h5 class="mt-4">Treatment 2 Section</h5>

<div class="mb-3">
<label class="form-label fw-bold">Treatment Name</label>
<input type="text" name="treatment_name_2" class="form-control" value="<?= htmlspecialchars($editData['treatment_name_2'] ?? '') ?>">
</div>

<div class="mb-3">
<label class="form-label fw-bold">Treatment Image</label>
<input type="file" name="treatment_image_2" class="form-control">
<?php if($editData && $editData['treatment_image_2']){ ?>
<img src="<?= htmlspecialchars($editData['treatment_image_2']) ?>" width="150" class="img-thumbnail mt-2">
<?php } ?>
</div>

<div class="mb-3">
<label class="form-label fw-bold">Treatment Description</label>
<textarea name="treatment_description_2" rows="3" class="form-control"><?= htmlspecialchars($editData['treatment_description_2'] ?? '') ?></textarea>
</div>

<div class="mb-3">
<label class="form-label fw-bold">Treatment Details</label>
<textarea name="treatment_details_2" rows="4" class="form-control"><?= htmlspecialchars($editData['treatment_details_2'] ?? '') ?></textarea>
</div>

<!-- Submit Buttons -->
<div class="mt-4">
<button type="submit" name="update" class="btn btn-success">Save</button>
<a href="project_details.php?delete=<?= htmlspecialchars($editData['slug']) ?>" class="btn btn-danger"
 onclick="return confirm('Are you sure you want to delete this project?');">Delete</a>
<a href="project_details.php" class="btn btn-secondary">Cancel</a>
</div>

</form>
</div>
</div>
<?php } ?>

</div>
</div>

<?php include 'footer.php'; ?>
</body>
</html>