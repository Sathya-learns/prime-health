<?php
include 'header.php';
include 'sidebar.php';
include 'z_db.php';

/* =========================
   UPDATE MAIN HEADER
========================= */
if (isset($_POST['update_header'])) {
    $heading = mysqli_real_escape_string($con, $_POST['heading']);
    $paragraph = mysqli_real_escape_string($con, $_POST['paragraph']);

    mysqli_query($con, "UPDATE home_experts_main 
                        SET heading='$heading', paragraph='$paragraph' 
                        WHERE id=1");

    echo "<script>alert('Experts Header Updated'); window.location='home_experts.php';</script>";
}

/* =========================
   ADD DOCTOR
========================= */
if (isset($_POST['add_doctor'])) {
    $doctor_name = mysqli_real_escape_string($con, $_POST['doctor_name']);
    $profession = mysqli_real_escape_string($con, $_POST['profession']);
    $specialties = mysqli_real_escape_string($con, $_POST['specialties']);

    $image = "";
    if (!empty($_FILES['image']['name'])) {
        $image = time() . "_" . $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], "uploads/$image");
    }

    mysqli_query($con, "INSERT INTO home_experts_doctors 
        (doctor_name, profession, specialties, image)
        VALUES ('$doctor_name', '$profession', '$specialties', '$image')");

    echo "<script>alert('Doctor Added Successfully'); window.location='home_experts.php';</script>";
}

/* =========================
   DELETE DOCTOR
========================= */
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    mysqli_query($con, "DELETE FROM home_experts_doctors WHERE id=$id");
    echo "<script>alert('Doctor Deleted'); window.location='home_experts.php';</script>";
}

/* =========================
   UPDATE DOCTOR (MODAL)
========================= */
if (isset($_POST['update_doctor'])) {
    $id = intval($_POST['id']);
    $doctor_name = mysqli_real_escape_string($con, $_POST['doctor_name']);
    $profession = mysqli_real_escape_string($con, $_POST['profession']);
    $specialties = mysqli_real_escape_string($con, $_POST['specialties']);

    $set = "doctor_name='$doctor_name', profession='$profession', specialties='$specialties'";

    if (!empty($_FILES['image']['name'])) {
        $image = time() . "_" . $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], "uploads/$image");
        $set .= ", image='$image'";
    }

    mysqli_query($con, "UPDATE home_experts_doctors SET $set WHERE id=$id");

    echo "<script>alert('Doctor Updated'); window.location='home_experts.php';</script>";
}

/* FETCH HEADER */
$header = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM home_experts_main WHERE id=1"));
?>

<div class="d-flex">
<div id="main-content" class="flex-grow-1 p-4" style="margin-left:220px;">

<!-- ================= HEADER FORM ================= -->
<div class="card shadow border-0 mb-4">
  <div class="card-body">
    <h4 class="mb-4">Experts Section Heading</h4>
    <form method="POST">
      <div class="mb-3">
        <label class="fw-bold">Main Heading</label>
        <input type="text" name="heading" class="form-control" value="<?= $header['heading']; ?>" required>
      </div>

      <div class="mb-3">
        <label class="fw-bold">Paragraph</label>
        <textarea name="paragraph" class="form-control" rows="3" required><?= $header['paragraph']; ?></textarea>
      </div>

      <button type="submit" name="update_header" class="btn btn-primary">Update</button>
    </form>
  </div>
</div>


<!-- ================= ADD DOCTOR FORM ================= -->
<div class="card shadow border-0 mb-4">
  <div class="card-body">
    <h4 class="mb-4">Add Doctor</h4>
    <form method="POST" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-4 mb-3">
          <label class="fw-bold">Doctor Name</label>
          <input type="text" name="doctor_name" class="form-control" required>
        </div>

        <div class="col-md-4 mb-3">
          <label class="fw-bold">Profession</label>
          <input type="text" name="profession" class="form-control" required>
        </div>

        <div class="col-md-4 mb-3">
          <label class="fw-bold">Specialties</label>
          <input type="text" name="specialties" class="form-control" required>
        </div>
      </div>

      <div class="mb-3">
        <label class="fw-bold">Doctor Image</label>
        <input type="file" name="image" class="form-control" required>
      </div>

      <button type="submit" name="add_doctor" class="btn btn-success">Add Doctor</button>
    </form>
  </div>
</div>


<!-- ================= EXISTING DOCTORS ================= -->
<div class="card shadow border-0">
  <div class="card-body">
    <h4 class="mb-4">Existing Doctors</h4>

    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Profession</th>
          <th>Specialties</th>
          <th>Image</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>

<?php
$doctors = mysqli_query($con, "SELECT * FROM home_experts_doctors ORDER BY id DESC");
while ($d = mysqli_fetch_assoc($doctors)) {
?>
<tr>
  <td><?= $d['id']; ?></td>
  <td><?= $d['doctor_name']; ?></td>
  <td><?= $d['profession']; ?></td>
  <td><?= $d['specialties']; ?></td>
  <td><img src="uploads/<?= $d['image']; ?>" width="60"></td>
  <td>
    <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal<?= $d['id']; ?>">Edit</button>
    <a href="home_experts.php?delete=<?= $d['id']; ?>" onclick="return confirm('Delete?');" class="btn btn-danger btn-sm">Delete</a>
  </td>
</tr>

<!-- EDIT MODAL -->
<div class="modal fade" id="editModal<?= $d['id']; ?>" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $d['id']; ?>">

        <div class="modal-header">
          <h5 class="modal-title">Edit Doctor</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">

          <div class="mb-3">
            <label class="fw-bold">Name</label>
            <input type="text" name="doctor_name" value="<?= $d['doctor_name']; ?>" class="form-control">
          </div>

          <div class="mb-3">
            <label class="fw-bold">Profession</label>
            <input type="text" name="profession" value="<?= $d['profession']; ?>" class="form-control">
          </div>

          <div class="mb-3">
            <label class="fw-bold">Specialties</label>
            <input type="text" name="specialties" value="<?= $d['specialties']; ?>" class="form-control">
          </div>

          <div class="mb-3">
            <label class="fw-bold">Image (Optional)</label>
            <input type="file" name="image" class="form-control">
          </div>

        </div>

        <div class="modal-footer">
          <button type="submit" name="update_doctor" class="btn btn-primary">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php } ?>

      </tbody>
    </table>
  </div>
</div>

</div>
</div>

<?php include 'footer.php'; ?>
