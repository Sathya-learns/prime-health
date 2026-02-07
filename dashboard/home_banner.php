<?php
include 'header.php';
include 'sidebar.php';
include 'z_db.php';

/* ========================
   INSERT
======================== */
if (isset($_POST['submit'])) {

    $image = "";
    if (!empty($_FILES['banner_image']['name'])) {
        $dir = "uploads/";
        if (!is_dir($dir)) mkdir($dir, 0777, true);
        $filename = time() . "_" . basename($_FILES['banner_image']['name']);
        $image = $dir . $filename;
        move_uploaded_file($_FILES['banner_image']['tmp_name'], $image);
    }

    mysqli_query($con, "INSERT INTO home_banner (banner_image) VALUES ('$image')");
    echo "<script>alert('Banner Added Successfully'); window.location='home_banner.php';</script>";
}

/* ========================
   UPDATE
======================== */
if (isset($_POST['update'])) {
    $id = $_POST['id'];

    if (!empty($_FILES['banner_image']['name'])) {
        $dir = "uploads/";
        $filename = time() . "_" . basename($_FILES['banner_image']['name']);
        $image = $dir . $filename;
        move_uploaded_file($_FILES['banner_image']['tmp_name'], $image);

        mysqli_query($con, "UPDATE home_banner SET banner_image='$image' WHERE id='$id'");
    }

    echo "<script>alert('Banner Updated Successfully'); window.location='home_banner.php';</script>";
}

/* ========================
   EDIT LOAD
======================== */
$editData = null;
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $editData = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM home_banner WHERE id='$id'"));
}

/* ========================
   DELETE
======================== */
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($con, "DELETE FROM home_banner WHERE id='$id'");
    echo "<script>alert('Banner Deleted'); window.location='home_banner.php';</script>";
}
?>

<div class="d-flex">
<div id="main-content" class="flex-grow-1 p-4" style="margin-left:220px; color:#000;">

<!-- FORM -->
<div class="card shadow border-0 mb-4">
<div class="card-body">
<h4 class="mb-4"><?= $editData ? "Update Banner Image" : "Add Banner Image" ?></h4>

<form method="POST" enctype="multipart/form-data">

<div class="mb-3">
<label class="form-label fw-bold">Banner Image</label>
<input type="file" name="banner_image" class="form-control" required>
<?php if($editData){ ?>
  <img src="<?= $editData['banner_image'] ?>" width="120" class="img-thumbnail mt-2">
<?php } ?>
</div>

<?php if($editData){ ?>
<input type="hidden" name="id" value="<?= $editData['id'] ?>">
<button type="submit" name="update" class="btn btn-success">Update</button>
<a href="home_banner.php" class="btn btn-secondary">Cancel</a>
<?php } else { ?>
<button type="submit" name="submit" class="btn btn-primary">Submit</button>
<?php } ?>

</form>
</div>
</div>

<!-- TABLE -->
<style>
.table .btn-sm{
  width:70px;
  font-size:0.8rem;
}
.table td img{
  max-width:120px;
}
</style>

<div class="card shadow border-0">
<div class="card-body">
<h4 class="mb-4">Existing Carousel Banners</h4>

<table class="table table-bordered table-striped align-middle">
<thead class="table-light">
<tr>
<th>ID</th>
<th>Banner Image</th>
<th>Action</th>
</tr>
</thead>
<tbody>

<?php
$res = mysqli_query($con, "SELECT * FROM home_banner ORDER BY id DESC");
if(mysqli_num_rows($res)>0){
while($row = mysqli_fetch_assoc($res)){
echo "
<tr>
<td>{$row['id']}</td>
<td><img src='{$row['banner_image']}'></td>
<td>
<a href='home_banner.php?edit={$row['id']}' class='btn btn-warning btn-sm'>Edit</a>
<a href='home_banner.php?delete={$row['id']}' 
   class='btn btn-danger btn-sm'
   onclick=\"return confirm('Delete this banner?');\">Delete</a>
</td>
</tr>";
}
}else{
echo "<tr><td colspan='3' class='text-center'>No Banners Found</td></tr>";
}
?>

</tbody>
</table>
</div>
</div>

</div>
</div>

<?php include 'footer.php'; ?>
