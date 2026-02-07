<?php
include 'header.php';
include 'sidebar.php';
include 'z_db.php';

/* ========================
   INSERT OPERATION
======================== */
if (isset($_POST['submit'])) {
    $heading = mysqli_real_escape_string($con, $_POST['heading']);
    $description = mysqli_real_escape_string($con, $_POST['description']);

    $image = "";
    if (!empty($_FILES['image']['name'])) {
        $dir = "uploads/";
        if (!is_dir($dir)) mkdir($dir, 0777, true);
        $filename = time() . "_" . basename($_FILES['image']['name']);
        $image = $dir . $filename;
        move_uploaded_file($_FILES['image']['tmp_name'], $image);
    }

    mysqli_query($con, "INSERT INTO home_blog (image, heading, description) 
                        VALUES ('$image', '$heading', '$description')");
    echo "<script>alert('Added Successfully!'); window.location='home_blog.php';</script>";
}

/* ========================
   UPDATE OPERATION
======================== */
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $heading = mysqli_real_escape_string($con, $_POST['heading']);
    $description = mysqli_real_escape_string($con, $_POST['description']);

    if (!empty($_FILES['image']['name'])) {
        $dir = "uploads/";
        $filename = time() . "_" . basename($_FILES['image']['name']);
        $image = $dir . $filename;
        move_uploaded_file($_FILES['image']['tmp_name'], $image);
        $img_q = ", image='$image'";
    } else {
        $img_q = "";
    }

    mysqli_query($con, "UPDATE home_blog SET heading='$heading', description='$description' $img_q WHERE id='$id'");
    echo "<script>alert('Updated Successfully!'); window.location='home_blog.php';</script>";
}

/* ========================
   EDIT LOAD
======================== */
$editData = null;
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $editData = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM home_blog WHERE id='$id'"));
}

/* ========================
   DELETE OPERATION
======================== */
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($con, "DELETE FROM home_blog WHERE id='$id'");
    echo "<script>alert('Deleted Successfully!'); window.location='home_blog.php';</script>";
}
?>

<div class="d-flex">
  <div id="main-content" class="flex-grow-1 p-4" style="margin-left:220px; color:#000;">

    <div class="card shadow border-0 mb-4">
      <div class="card-body">
        <h4 class="mb-4"><?= $editData ? "Update Wellness Card" : "Add Wellness Card" ?></h4>

        <form method="POST" enctype="multipart/form-data">

          <div class="mb-3">
            <label class="form-label fw-bold">Heading</label>
            <input type="text" name="heading" class="form-control"
              value="<?= $editData['heading'] ?? '' ?>" required>
          </div>

          <div class="mb-3">
            <label class="form-label fw-bold">Description</label>
            <textarea name="description" class="form-control" rows="3" required><?= $editData['description'] ?? '' ?></textarea>
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
            <a href="home_blog.php" class="btn btn-secondary">Cancel</a>
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
          max-width: 80px;
          height: auto;
      }
    </style>

    <div class="card shadow border-0">
      <div class="card-body">
        <h4 class="mb-4">Existing Wellness Cards</h4>

        <table class="table table-bordered table-striped align-middle">
          <thead class="table-light">
            <tr>
              <th>ID</th>
              <th>Heading</th>
              <th>Description</th>
              <th>Image</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          <?php
            $result = mysqli_query($con, "SELECT * FROM home_blog ORDER BY id DESC");
            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                echo "
                <tr>
                  <td>{$row['id']}</td>
                  <td>{$row['heading']}</td>
                  <td>{$row['description']}</td>
                  <td><img src='{$row['image']}'></td>
                  <td>
                    <a href='home_blog.php?edit={$row['id']}' class='btn btn-warning btn-sm'>Edit</a>
                    <a href='home_blog.php?delete={$row['id']}' class='btn btn-danger btn-sm'
                    onclick=\"return confirm('Delete this?');\">Delete</a>
                  </td>
                </tr>";
              }
            } else {
              echo "<tr><td colspan='5' class='text-center'>No Records Found</td></tr>";
            }
          ?>
          </tbody>
        </table>
      </div>
    </div>

  </div>
</div>

<?php include 'footer.php'; ?>
