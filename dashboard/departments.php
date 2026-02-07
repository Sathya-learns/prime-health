<?php
include 'header.php';
include 'sidebar.php';
include 'z_db.php';

/* =====================
   INSERT
===================== */
if (isset($_POST['submit'])) {

    $main_title = mysqli_real_escape_string($con, $_POST['main_title']);
    $dept_title = mysqli_real_escape_string($con, $_POST['dept_title']);

    $dept_image = "";
    if (!empty($_FILES['dept_image']['name'])) {
        $dir = "uploads/";
        if (!is_dir($dir)) mkdir($dir, 0777, true);
        $filename = time() . "_" . basename($_FILES['dept_image']['name']);
        $dept_image = $dir . $filename;
        move_uploaded_file($_FILES['dept_image']['tmp_name'], $dept_image);
    }

    mysqli_query($con, 
        "INSERT INTO departments (main_title, dept_title, dept_image)
         VALUES ('$main_title', '$dept_title', '$dept_image')"
    );

    echo "<script>alert('Added Successfully!'); window.location='departments.php';</script>";
}


/* =====================
   UPDATE
===================== */
if (isset($_POST['update'])) {
    $id = $_POST['id'];

    $main_title = mysqli_real_escape_string($con, $_POST['main_title']);
    $dept_title = mysqli_real_escape_string($con, $_POST['dept_title']);

    if (!empty($_FILES['dept_image']['name'])) {
        $dir = "uploads/";
        $filename = time() . "_" . basename($_FILES['dept_image']['name']);
        $dept_image = $dir . $filename;
        move_uploaded_file($_FILES['dept_image']['tmp_name'], $dept_image);
        $img_q = ", dept_image='$dept_image'";
    } else {
        $img_q = "";
    }

    mysqli_query($con,
       "UPDATE departments SET main_title='$main_title', dept_title='$dept_title' $img_q WHERE id='$id'"
    );

    echo "<script>alert('Updated Successfully!'); window.location='departments.php';</script>";
}


/* =====================
   EDIT LOAD
===================== */
$editData = null;
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $editData = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM departments WHERE id='$id'"));
}


/* =====================
   DELETE
===================== */
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($con, "DELETE FROM departments WHERE id='$id'");
    echo "<script>alert('Deleted Successfully!'); window.location='departments.php';</script>";
}
?>


<div class="d-flex">
  <div id="main-content" class="flex-grow-1 p-4" style="margin-left:220px;color:#000;">

    <div class="card shadow border-0 mb-4">
      <div class="card-body">
        <h4 class="mb-4"><?= $editData ? "Update Department" : "Add Department" ?></h4>

        <form method="POST" enctype="multipart/form-data">

          <div class="mb-3">
            <label class="form-label fw-bold">Main Heading</label>
            <input type="text" name="main_title" class="form-control"
            value="<?= $editData['main_title'] ?? '' ?>">
          </div>

          <div class="mb-3">
            <label class="form-label fw-bold">Department Name</label>
            <input type="text" name="dept_title" class="form-control"
            value="<?= $editData['dept_title'] ?? '' ?>" required>
          </div>

          <div class="mb-3">
            <label class="form-label fw-bold">Department Image</label>
            <input type="file" name="dept_image" class="form-control">
            <?php if($editData && $editData['dept_image']){ ?>
              <img src="<?= $editData['dept_image'] ?>" width="80" class="img-thumbnail mt-2">
            <?php } ?>
          </div>

          <?php if($editData){ ?>
            <input type="hidden" name="id" value="<?= $editData['id'] ?>">
            <button type="submit" name="update" class="btn btn-success">Update</button>
            <a href="departments.php" class="btn btn-secondary">Cancel</a>
          <?php } else { ?>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
          <?php } ?>
        </form>
      </div>
    </div>


    <!-- VIEW TABLE -->
    <div class="card shadow border-0">
      <div class="card-body">
        <h4 class="mb-3">Existing Departments</h4>

        <table class="table table-bordered table-striped align-middle">
          <thead class="table-light">
            <tr>
              <th>ID</th>
              <th>Dept Name</th>
              <th>Dept Image</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          <?php
            $result = mysqli_query($con, "SELECT * FROM departments ORDER BY id ASC");
            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                echo "
                <tr>
                  <td>{$row['id']}</td>
                  <td>{$row['dept_title']}</td>
                  <td><img src='{$row['dept_image']}' width='70'></td>
                  <td>
                    <a href='departments.php?edit={$row['id']}' class='btn btn-warning btn-sm'>Edit</a>
                    <a href='departments.php?delete={$row['id']}' class='btn btn-danger btn-sm'
                       onclick=\"return confirm('Delete this department?');\">Delete</a>
                  </td>
                </tr>";
              }
            } else {
              echo "<tr><td colspan='4' class='text-center'>No Records Found</td></tr>";
            }
          ?>
          </tbody>
        </table>

      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
