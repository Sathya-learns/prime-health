<?php
include 'header.php';
include 'sidebar.php';
include 'z_db.php';

// INSERT
if (isset($_POST['submit'])) {
    $project_name = mysqli_real_escape_string($con, $_POST['project_name']);

    $project_image = "";
    if (!empty($_FILES['project_image']['name'])) {
        $dir = "uploads/";
        if (!is_dir($dir)) mkdir($dir, 0777, true);
        $filename = time() . "_" . basename($_FILES['project_image']['name']);
        $project_image = $dir . $filename;
        move_uploaded_file($_FILES['project_image']['tmp_name'], $project_image);
    }

    mysqli_query($con, "INSERT INTO treatment_projects (project_name, project_image) 
                        VALUES ('$project_name', '$project_image')");

    echo "<script>alert('Added Successfully!'); window.location='treatment_projects.php';</script>";
}

// UPDATE
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $project_name = mysqli_real_escape_string($con, $_POST['project_name']);

    if (!empty($_FILES['project_image']['name'])) {
        $dir = "uploads/";
        $filename = time() . "_" . basename($_FILES['project_image']['name']);
        $project_image = $dir . $filename;
        move_uploaded_file($_FILES['project_image']['tmp_name'], $project_image);
        $img_q = ", project_image='$project_image'";
    } else {
        $img_q = "";
    }

    mysqli_query($con, "UPDATE treatment_projects SET project_name='$project_name' $img_q WHERE id='$id'");
    echo "<script>alert('Updated Successfully!'); window.location='treatment_projects.php';</script>";
}

// EDIT LOAD
$editData = null;
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $editData = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM treatment_projects WHERE id='$id'"));
}

// DELETE
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($con, "DELETE FROM treatment_projects WHERE id='$id'");
    echo "<script>alert('Deleted Successfully!'); window.location='treatment_projects.php';</script>";
}
?>

<div class="d-flex">
  <div id="main-content" class="flex-grow-1 p-4" style="margin-left:220px; color:#000;">

    <div class="card shadow border-0 mb-4">
      <div class="card-body">
        <h4 class="mb-4"><?= $editData ? "Update Treatment Project" : "Add Treatment Project" ?></h4>

        <form method="POST" enctype="multipart/form-data">

          <div class="mb-3">
            <label class="form-label fw-bold">Project Name</label>
            <input type="text" name="project_name" class="form-control"
              value="<?= $editData['project_name'] ?? '' ?>" required>
          </div>

          <div class="mb-3">
            <label class="form-label fw-bold">Project Image</label>
            <input type="file" name="project_image" class="form-control">
            <?php if($editData && $editData['project_image']){ ?>
              <img src="<?= $editData['project_image'] ?>" width="80" class="img-thumbnail mt-2">
            <?php } ?>
          </div>

          <?php if($editData){ ?>
            <input type="hidden" name="id" value="<?= $editData['id'] ?>">
            <button type="submit" name="update" class="btn btn-success">Update</button>
            <a href="treatment_projects.php" class="btn btn-secondary">Cancel</a>
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
          text-align: center;
          padding: 4px 0;
          margin-right: 4px;
          font-size: 0.8rem;
      }
      .table td img {
          max-width: 100px;
          height: auto;
      }
    </style>

    <div class="card shadow border-0">
      <div class="card-body">
        <h4 class="mb-4">Existing Treatment Projects</h4>

        <table class="table table-bordered table-striped align-middle">
          <thead class="table-light">
            <tr>
              <th>ID</th>
              <th>Project Name</th>
              <th>Image</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          <?php
            $result = mysqli_query($con, "SELECT * FROM treatment_projects ORDER BY id DESC");
            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                echo "
                <tr>
                  <td>{$row['id']}</td>
                  <td>{$row['project_name']}</td>
                  <td><img src='{$row['project_image']}'></td>
                  <td>
                    <a href='treatment_projects.php?edit={$row['id']}' class='btn btn-warning btn-sm'>Edit</a>
                    <a href='treatment_projects.php?delete={$row['id']}' class='btn btn-danger btn-sm'
                       onclick=\"return confirm('Delete this?');\">Delete</a>
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
