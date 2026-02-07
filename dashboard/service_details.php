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
   CREATE TABLE IF NOT EXISTS
=========================== */
$createTable = "CREATE TABLE IF NOT EXISTS service_details (
    id INT AUTO_INCREMENT PRIMARY KEY,
    service_name VARCHAR(255) NOT NULL,
    slug VARCHAR(255) UNIQUE NOT NULL,
    banner_heading VARCHAR(255),
    banner_image VARCHAR(500),
    main_heading VARCHAR(255),
    intro_text TEXT,
    left_image VARCHAR(500),
    doctor_name VARCHAR(255),
    doctor_info TEXT,
    success_text TEXT,
    prevention_heading VARCHAR(255),
    prevention_cards TEXT,
    about_title VARCHAR(255),
    about_desc TEXT,
    stats TEXT,
    status TINYINT DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if (!mysqli_query($con, $createTable)) {
    die("Table creation failed: " . mysqli_error($con));
}

/* ===========================
   SERVICES LIST (STATIC)
=========================== */
$services = [
    "Cardiology Care",
    "Pediatric Services",
    "Gynecology Care",
    "Emergency Checkups",
    "Neurology Treatment",
    "General Consultation"
];

/* ===========================
   SELECTED SERVICE
=========================== */
$selectedService = $_GET['service'] ?? "";

/* ===========================
   FETCH DETAILS IF EXISTS
=========================== */
$editData = null;

if (isset($_GET['service'])) {
    $service_name = mysqli_real_escape_string($con, $_GET['service']);
    $slug = strtolower(str_replace(" ", "-", $service_name));

    $res = mysqli_query($con, "SELECT * FROM service_details WHERE slug='$slug'");
    if ($res && mysqli_num_rows($res) > 0) {
        $editData = mysqli_fetch_assoc($res);
    }
}

/* ===========================
   INSERT / UPDATE
=========================== */
if (isset($_POST['submit']) || isset($_POST['update'])) {

    $service_name = mysqli_real_escape_string($con, $_POST['service_name']);
    $slug = strtolower(str_replace(" ", "-", $service_name));

    $banner_heading = mysqli_real_escape_string($con, $_POST['banner_heading']);
    $main_heading = mysqli_real_escape_string($con, $_POST['main_heading']);
    $intro_text = mysqli_real_escape_string($con, $_POST['intro_text']);
    $doctor_name = mysqli_real_escape_string($con, $_POST['doctor_name']);
    $doctor_info = mysqli_real_escape_string($con, $_POST['doctor_info']);
    $success_text = mysqli_real_escape_string($con, $_POST['success_text']);
    $prevention_heading = mysqli_real_escape_string($con, $_POST['prevention_heading']);
    $prevention_cards = mysqli_real_escape_string($con, $_POST['prevention_cards']);
    $about_title = mysqli_real_escape_string($con, $_POST['about_title']);
    $about_desc = mysqli_real_escape_string($con, $_POST['about_desc']);
    $stats = mysqli_real_escape_string($con, $_POST['stats']);
    $status = 1;

    /* Banner Image */
    if (!empty($_FILES['banner_image']['name'])) {
        $dir = "uploads/";
        if (!is_dir($dir)) mkdir($dir, 0777, true);
        $banner_image = $dir.time()."_".$_FILES['banner_image']['name'];
        move_uploaded_file($_FILES['banner_image']['tmp_name'], $banner_image);
    } else {
        $banner_image = $editData['banner_image'] ?? '';
    }

    /* Left Image */
    if (!empty($_FILES['left_image']['name'])) {
        $dir = "uploads/";
        if (!is_dir($dir)) mkdir($dir, 0777, true);
        $left_image = $dir.time()."_".$_FILES['left_image']['name'];
        move_uploaded_file($_FILES['left_image']['tmp_name'], $left_image);
    } else {
        $left_image = $editData['left_image'] ?? '';
    }

    if ($editData == null) {
        // INSERT
        $q = mysqli_query($con, "INSERT INTO service_details
        (service_name, slug, banner_heading, banner_image, main_heading, intro_text, left_image,
        doctor_name, doctor_info, success_text, prevention_heading, prevention_cards,
        about_title, about_desc, stats, status)
        VALUES
        ('$service_name','$slug','$banner_heading','$banner_image','$main_heading','$intro_text','$left_image',
        '$doctor_name','$doctor_info','$success_text','$prevention_heading','$prevention_cards',
        '$about_title','$about_desc','$stats','$status')");

        if (!$q) {
            die("Insert failed: " . mysqli_error($con));
        }

       echo "<script>alert('Service Added');location.href='service_details.php?service=$service_name';</script>";

    } else {
        // UPDATE
        $q = mysqli_query($con, "UPDATE service_details SET
        banner_heading='$banner_heading',
        banner_image='$banner_image',
        main_heading='$main_heading',
        intro_text='$intro_text',
        left_image='$left_image',
        doctor_name='$doctor_name',
        doctor_info='$doctor_info',
        success_text='$success_text',
        prevention_heading='$prevention_heading',
        prevention_cards='$prevention_cards',
        about_title='$about_title',
        about_desc='$about_desc',
        stats='$stats'
        WHERE slug='$slug'");

        if (!$q) {
            die("Update failed: " . mysqli_error($con));
        }

        echo "<script>alert('Service Updated');</script>";
    }
}

/* ===========================
   DELETE SERVICE
=========================== */
if (isset($_GET['delete'])) {
    $slug = mysqli_real_escape_string($con, $_GET['delete']);
    mysqli_query($con, "DELETE FROM service_details WHERE slug='$slug'");
    echo "<script>alert('Deleted Successfully!'); window.location='service_details.php';</script>";
}

?>

<div class="d-flex">
<div id="main-content" class="flex-grow-1 p-4" style="margin-left:220px; color:#000;">

<!-- SELECT SERVICE -->
<div class="card shadow border-0 mb-4">
<div class="card-body">
<h4 class="mb-3">Select Service</h4>

<form method="GET">
<select name="service" onchange="this.form.submit()" class="form-select" required>
<option value="">-- Select Service --</option>
<?php foreach($services as $s){ ?>
<option value="<?= htmlspecialchars($s) ?>" <?= ($selectedService==$s?'selected':'') ?>><?= htmlspecialchars($s) ?></option>
<?php } ?>
</select>
</form>

<?php if($editData){ ?>
<hr>

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
    min-width: 170px;
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

/* FORM CARD SAME STYLE */
.card form {
    background: #ffffff;
    border-radius: 15px;
}

/* BUTTONS */
.view-details .btn,
.card form .btn {
    padding: 8px 22px;
    border-radius: 30px;
    font-size: 14px;
    transition: 0.3s ease;
}

.view-details .btn:hover,
.card form .btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 15px rgba(0,0,0,0.2);
}
</style>

<div class="card shadow border-0 mt-4 view-details">
<div class="card-body">

<h4 class="mb-3">View Details</h4>

<p><b>Service Name:</b> <?= htmlspecialchars($editData['service_name']); ?></p>
<p><b>Banner Heading:</b> <?= htmlspecialchars($editData['banner_heading']); ?></p>
<p><b>Main Heading:</b> <?= htmlspecialchars($editData['main_heading']); ?></p>
<p><b>Intro Text:</b> <?= htmlspecialchars($editData['intro_text']); ?></p>

<?php if($editData['banner_image']){ ?>
<p><b>Banner Image:</b><br>
<img src="<?= htmlspecialchars($editData['banner_image']); ?>" width="150">
</p>
<?php } ?>

<p><b>Doctor Name:</b> <?= htmlspecialchars($editData['doctor_name']); ?></p>
<p><b>Doctor Info:</b> <?= htmlspecialchars($editData['doctor_info']); ?></p>
<p><b>Success Text:</b> <?= htmlspecialchars($editData['success_text']); ?></p>

<p><b>Prevention Heading:</b> <?= htmlspecialchars($editData['prevention_heading']); ?></p>
<p><b>Prevention Cards:</b> <?= htmlspecialchars($editData['prevention_cards']); ?></p>

<p><b>About Title:</b> <?= htmlspecialchars($editData['about_title']); ?></p>
<p><b>About Description:</b> <?= htmlspecialchars($editData['about_desc']); ?></p>
<p><b>Stats:</b> <?= htmlspecialchars($editData['stats']); ?></p>

<?php if($editData['left_image']){ ?>
<p><b>Left Image:</b><br>
<img src="<?= htmlspecialchars($editData['left_image']); ?>" width="150">
</p>
<?php } ?>

</div>
</div>
<?php } ?>

</div>
</div>

<?php if($selectedService != ""){ ?>
<div class="card shadow border-0 mb-4">
<div class="card-body">

<h4 class="mb-4"><?= $editData?'Update':'Add' ?> <?= htmlspecialchars($selectedService) ?> Details</h4>

<form method="POST" enctype="multipart/form-data">
<input type="hidden" name="service_name" value="<?= htmlspecialchars($selectedService) ?>">

<div class="mb-3">
<label class="form-label fw-bold">Banner Heading</label>
<input type="text" name="banner_heading" class="form-control" value="<?= htmlspecialchars($editData['banner_heading'] ?? '') ?>">
</div>

<div class="mb-3">
<label class="form-label fw-bold">Banner Image</label>
<input type="file" name="banner_image" class="form-control">
<?php if($editData && $editData['banner_image']){ ?>
<img src="<?= htmlspecialchars($editData['banner_image']) ?>" width="100" class="img-thumbnail mt-2">
<?php } ?>
</div>

<div class="mb-3">
<label class="form-label fw-bold">Main Heading</label>
<input type="text" name="main_heading" class="form-control" value="<?= htmlspecialchars($editData['main_heading'] ?? '') ?>">
</div>

<div class="mb-3">
<label class="form-label fw-bold">Intro Text</label>
<textarea name="intro_text" rows="3" class="form-control"><?= htmlspecialchars($editData['intro_text'] ?? '') ?></textarea>
</div>

<div class="mb-3">
<label class="form-label fw-bold">Left Image</label>
<input type="file" name="left_image" class="form-control">
<?php if($editData && $editData['left_image']){ ?>
<img src="<?= htmlspecialchars($editData['left_image']) ?>" width="100" class="img-thumbnail mt-2">
<?php } ?>
</div>

<h5 class="mt-4">Doctor Section</h5>

<div class="mb-3">
<label class="form-label fw-bold">Doctor Name</label>
<input type="text" name="doctor_name" class="form-control" value="<?= htmlspecialchars($editData['doctor_name'] ?? '') ?>">
</div>

<div class="mb-3">
<label class="form-label fw-bold">Doctor Info</label>
<textarea name="doctor_info" rows="3" class="form-control"><?= htmlspecialchars($editData['doctor_info'] ?? '') ?></textarea>
</div>

<div class="mb-3">
<label class="form-label fw-bold">Success Text</label>
<textarea name="success_text" rows="3" class="form-control"><?= htmlspecialchars($editData['success_text'] ?? '') ?></textarea>
</div>

<h5 class="mt-4">Prevention Section</h5>

<div class="mb-3">
<label class="form-label fw-bold">Prevention Heading</label>
<input type="text" name="prevention_heading" class="form-control" value="<?= htmlspecialchars($editData['prevention_heading'] ?? '') ?>">
</div>

<div class="mb-3">
<label class="form-label fw-bold">Prevention Cards (comma)</label>
<textarea name="prevention_cards" rows="2" class="form-control"><?= htmlspecialchars($editData['prevention_cards'] ?? '') ?></textarea>
</div>

<h5 class="mt-4">Statistics Section</h5>

<div class="mb-3">
<label class="form-label fw-bold"> Title</label>
<input type="text" name="about_title" class="form-control" value="<?= htmlspecialchars($editData['about_title'] ?? '') ?>">
</div>

<div class="mb-3">
<label class="form-label fw-bold"> Description</label>
<textarea name="about_desc" rows="3" class="form-control"><?= htmlspecialchars($editData['about_desc'] ?? '') ?></textarea>
</div>

<div class="mb-3">
<label class="form-label fw-bold">Stats (key:value comma)</label>
<input type="text" name="stats" class="form-control" placeholder="Cardiology:80, Pediatrics:50" value="<?= htmlspecialchars($editData['stats'] ?? '') ?>">
</div>

<?php if($editData){ ?>
<button type="submit" name="update" class="btn btn-success">Update</button>
<a href="service_details.php?delete=<?= htmlspecialchars($editData['slug']) ?>" class="btn btn-danger"
 onclick="return confirm('Delete?');">Delete</a>
<a href="service_details.php" class="btn btn-secondary">Cancel</a>
<?php } else { ?>
<button type="submit" name="submit" class="btn btn-primary">Submit</button>
<?php } ?>

</form>
</div>
</div>
<?php } ?>

</div>
</div>

<?php include 'footer.php'; ?>