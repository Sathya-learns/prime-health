<?php
include 'header.php';
include 'sidebar.php';
include 'z_db.php';

// INSERT OPERATION
if (isset($_POST['submit'])) {
    $doctor_name = mysqli_real_escape_string($con, $_POST['doctor_name']);
    $profession = mysqli_real_escape_string($con, $_POST['profession']);
    $specialties = mysqli_real_escape_string($con, $_POST['specialties']);

    $image = "";
    if (!empty($_FILES['image']['name'])) {
        $dir = "uploads/";
        if (!is_dir($dir)) mkdir($dir, 0777, true);
        $filename = time() . "_" . basename($_FILES['image']['name']);
        $image = $dir . $filename;
        move_uploaded_file($_FILES['image']['tmp_name'], $image);
    }

    mysqli_query($con, "INSERT INTO service_doctors (doctor_name, profession, specialties, image) 
                        VALUES ('$doctor_name', '$profession', '$specialties', '$image')");
    echo "<script>alert('Doctor Added Successfully!'); window.location='service_doctors.php';</script>";
}

// UPDATE OPERATION
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $doctor_name = mysqli_real_escape_string($con, $_POST['doctor_name']);
    $profession = mysqli_real_escape_string($con, $_POST['profession']);
    $specialties = mysqli_real_escape_string($con, $_POST['specialties']);

    if (!empty($_FILES['image']['name'])) {
        $dir = "uploads/";
        $filename = time() . "_" . basename($_FILES['image']['name']);
        $image = $dir . $filename;
        move_uploaded_file($_FILES['image']['tmp_name'], $image);
        $img_q = ", image='$image'";
    } else {
        $img_q = "";
    }

    mysqli_query($con, "UPDATE service_doctors SET doctor_name='$doctor_name', profession='$profession', specialties='$specialties' $img_q WHERE id='$id'");
    echo "<script>alert('Doctor Updated Successfully!'); window.location='service_doctors.php';</script>";
}

// EDIT LOAD
$editData = null;
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $editData = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM service_doctors WHERE id='$id'"));
}

// DELETE
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($con, "DELETE FROM service_doctors WHERE id='$id'");
    echo "<script>alert('Doctor Deleted Successfully!'); window.location='service_doctors.php';</script>";
}
?>

<div class="d-flex">
  <div id="main-content" class="flex-grow-1 p-4" style="margin-left:220px; color:#000;">

    <div class="card shadow border-0 mb-4">
      <div class="card-body">
        <h4 class="mb-4"><?= $editData ? "Update Doctor" : "Add Doctor" ?></h4>

        <form method="POST" enctype="multipart/form-data">

          <div class="mb-3">
            <label class="form-label fw-bold">Doctor Name</label>
            <input type="text" name="doctor_name" class="form-control"
              value="<?= $editData['doctor_name'] ?? '' ?>" required>
          </div>

          <div class="mb-3">
            <label class="form-label fw-bold">Profession</label>
            <input type="text" name="profession" class="form-control"
              value="<?= $editData['profession'] ?? '' ?>" required>
          </div>

          <div class="mb-3">
            <label class="form-label fw-bold">Specialities</label>
            <textarea name="specialties" class="form-control" rows="3" required><?= $editData['specialties'] ?? '' ?></textarea>
          </div>

          <div class="mb-3">
            <label class="form-label fw-bold">Image (Optional)</label>
            <input type="file" name="image" class="form-control">
            <?php if($editData && $editData['image']){ ?>
              <img src="<?= $editData['image'] ?>" width="80" class="img-thumbnail mt-2">
            <?php } ?>
          </div>

          <?php if($editData){ ?>
            <input type="hidden" name="id" value="<?= $editData['id'] ?>">
            <button type="submit" name="update" class="btn btn-success">Update</button>
            <a href="service_doctors.php" class="btn btn-secondary">Cancel</a>
          <?php } else { ?>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
          <?php } ?>

        </form>
      </div>
    </div>

    <!-- VIEW TABLE -->
    <style>
      .table .btn-sm {
          width: 70px;
          display: inline-block;
          text-align: center;
          padding: 4px 0;
          margin-right: 4px;
          font-size: 0.8rem;
      }
      .table td img {
          max-width: 70px;
          height: auto;
      }
    </style>

    <div class="card shadow border-0">
      <div class="card-body">
        <h4 class="mb-4">Existing Doctors</h4>

        <table class="table table-bordered table-striped align-middle">
          <thead class="table-light">
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Profession</th>
              <th>Specialities</th>
              <th>Image</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          <?php
            $result = mysqli_query($con, "SELECT * FROM service_doctors ORDER BY id DESC");
            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                echo "
                <tr>
                  <td>{$row['id']}</td>
                  <td>{$row['doctor_name']}</td>
                  <td>{$row['profession']}</td>
                  <td>{$row['specialties']}</td>
                  <td><img src='{$row['image']}'></td>
                  <td>
                    <a href='service_doctors.php?edit={$row['id']}' class='btn btn-warning btn-sm'>Edit</a>
                    <a href='service_doctors.php?delete={$row['id']}' class='btn btn-danger btn-sm'
                    onclick=\"return confirm('Delete this doctor?');\">Delete</a>
                  </td>
                </tr>";
              }
            } else {
              echo "<tr><td colspan='6' class='text-center'>No Records Found</td></tr>";
            }
          ?>
          </tbody>
        </table>

      </div>
    </div>

  </div>
</div>

<?php include 'footer.php'; ?>
