<?php
include 'header.php';
include 'sidebar.php';
include 'z_db.php';

/* =========================
   EDIT FETCH
========================= */
$edit_mode = false;
$edit_data = [];

if (isset($_GET['edit'])) {
    $edit_id = intval($_GET['edit']);
    $edit_q = mysqli_query($con, "SELECT * FROM home_ads WHERE id=$edit_id");
    if (mysqli_num_rows($edit_q) == 1) {
        $edit_data = mysqli_fetch_assoc($edit_q);
        $edit_mode = true;
    }
}

/* =========================
   INSERT / UPDATE
========================= */
if (isset($_POST['submit'])) {

    $heading   = mysqli_real_escape_string($con, $_POST['heading']);
    $paragraph = mysqli_real_escape_string($con, $_POST['paragraph']);

    $image = $_POST['old_image'] ?? '';

    if (!empty($_FILES['image']['name'])) {
        $target_dir = "uploads/";
        if (!is_dir($target_dir)) mkdir($target_dir, 0777, true);
        $image = $target_dir . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $image);
    }

    if (!empty($_POST['id'])) {
        // UPDATE
        $id = intval($_POST['id']);
        $sql = "UPDATE home_ads SET
                heading='$heading',
                paragraph='$paragraph',
                image='$image'
                WHERE id=$id";
    } else {
        // INSERT
        $sql = "INSERT INTO home_ads (heading, paragraph, image)
                VALUES ('$heading','$paragraph','$image')";
    }

    mysqli_query($con, $sql);
    echo "<script>alert('Saved Successfully'); window.location='home_ads.php';</script>";
}

/* =========================
   DELETE
========================= */
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    mysqli_query($con, "DELETE FROM home_ads WHERE id=$id");
    echo "<script>alert('Record Deleted Successfully!'); window.location='home_ads.php';</script>";
}
?>

<div class="d-flex">

  <div id="sidebar" class="bg-dark text-white" style="width:220px; min-height:100vh; position:fixed;"></div>

  <div id="main-content" class="flex-grow-1 p-4" style="margin-left:220px; color:#000;">

    <!-- FORM -->
    <div class="card shadow border-0 mb-4">
      <div class="card-body">
        <h4 class="mb-4"><?= $edit_mode ? 'Edit Hero Section' : 'Add Hero Section' ?></h4>

        <form method="POST" enctype="multipart/form-data">

          <input type="hidden" name="id" value="<?= $edit_data['id'] ?? '' ?>">
          <input type="hidden" name="old_image" value="<?= $edit_data['image'] ?? '' ?>">

          <div class="mb-3">
            <label class="form-label fw-bold">Heading</label>
            <input type="text" name="heading" class="form-control"
                   value="<?= $edit_data['heading'] ?? '' ?>" required>
          </div>

          <div class="mb-3">
            <label class="form-label fw-bold">Paragraph</label>
            <textarea name="paragraph" class="form-control" rows="4" required><?= $edit_data['paragraph'] ?? '' ?></textarea>
          </div>

          <div class="mb-3">
            <label class="form-label fw-bold">Upload Image</label>
            <input type="file" name="image" class="form-control">
          </div>

          <button type="submit" name="submit" class="btn btn-primary">
            <?= $edit_mode ? 'Update' : 'Submit' ?>
          </button>

        </form>
      </div>
    </div>

    <!-- TABLE -->
    <div class="card shadow border-0">
      <div class="card-body">
        <h4 class="mb-4">Existing Hero Sections</h4>

        <div class="table-responsive">
          <table class="table table-bordered table-striped align-middle">
            <thead class="table-light">
              <tr>
                <th>ID</th>
                <th>Heading</th>
                <th>Paragraph</th>
                <th>Image</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody>
            <?php
            $result = mysqli_query($con, "SELECT * FROM home_ads ORDER BY id DESC");
            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                  <td>{$row['id']}</td>
                  <td>{$row['heading']}</td>
                  <td>{$row['paragraph']}</td>
                  <td><img src='{$row['image']}' width='80' class='img-thumbnail'></td>
                  <td>
                    <a href='home_ads.php?edit={$row['id']}'
                       class='btn btn-warning btn-sm action-btn'>Edit</a>

                    <a href='home_ads.php?delete={$row['id']}'
                       class='btn btn-danger btn-sm action-btn'
                       onclick=\"return confirm('Are you sure?');\">Delete</a>
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
</div>

<!-- SAME SIZE BUTTON CSS -->
<style>
  .action-btn{
    width:70px;
    text-align:center;
    padding:4px 0;
  }
</style>

<?php include 'footer.php'; ?>
