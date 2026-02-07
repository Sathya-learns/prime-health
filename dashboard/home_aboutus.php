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
    $edit_q = mysqli_query($con, "SELECT * FROM home_aboutus WHERE id=$edit_id");
    if (mysqli_num_rows($edit_q) == 1) {
        $edit_data = mysqli_fetch_assoc($edit_q);
        $edit_mode = true;
    }
}

/* =========================
   INSERT / UPDATE
========================= */
if (isset($_POST['submit'])) {

    $section_title = mysqli_real_escape_string($con, $_POST['section_title']);
    $main_heading  = mysqli_real_escape_string($con, $_POST['main_heading']);
    $sub_heading   = mysqli_real_escape_string($con, $_POST['sub_heading']);
    $point1 = mysqli_real_escape_string($con, $_POST['point1']);
    $point2 = mysqli_real_escape_string($con, $_POST['point2']);
    $point3 = mysqli_real_escape_string($con, $_POST['point3']);
    $image_overlay = isset($_POST['image_overlay']) ? 1 : 0;

    $image = $_POST['old_image'];

    if (!empty($_FILES['image']['name'])) {
        $target_dir = "uploads/";
        if (!is_dir($target_dir)) mkdir($target_dir, 0777, true);
        $image = $target_dir . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $image);
    }

    if (!empty($_POST['id'])) {
        $id = intval($_POST['id']);
        $sql = "UPDATE home_aboutus SET
                section_title='$section_title',
                main_heading='$main_heading',
                sub_heading='$sub_heading',
                image='$image',
                image_overlay=$image_overlay,
                point1='$point1',
                point2='$point2',
                point3='$point3'
                WHERE id=$id";
    } else {
        $sql = "INSERT INTO home_aboutus
        (section_title, main_heading, sub_heading, image, image_overlay, point1, point2, point3)
        VALUES
        ('$section_title','$main_heading','$sub_heading','$image',$image_overlay,'$point1','$point2','$point3')";
    }

    mysqli_query($con, $sql);
    echo "<script>alert('Saved Successfully'); window.location='home_aboutus.php';</script>";
}

/* =========================
   DELETE
========================= */
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    mysqli_query($con, "DELETE FROM home_aboutus WHERE id=$id");
    echo "<script>alert('Record Deleted Successfully!'); window.location='home_aboutus.php';</script>";
}
?>

<div class="d-flex">

  <div id="sidebar" class="bg-dark text-white" style="width:220px; min-height:100vh; position:fixed;"></div>

  <div id="main-content" class="flex-grow-1 p-4" style="margin-left:220px; color:#000;">

    <!-- FORM -->
    <div class="card shadow border-0 mb-4">
      <div class="card-body">
        <h4 class="mb-4"><?= $edit_mode ? 'Edit About Section' : 'Add About Section' ?></h4>

        <form method="POST" enctype="multipart/form-data">

          <input type="hidden" name="id" value="<?= $edit_data['id'] ?? '' ?>">
          <input type="hidden" name="old_image" value="<?= $edit_data['image'] ?? '' ?>">

          <div class="mb-3">
            <label class="form-label fw-bold">Section Title</label>
            <input type="text" name="section_title" class="form-control"
                   value="<?= $edit_data['section_title'] ?? '' ?>" required>
          </div>

          <div class="mb-3">
            <label class="form-label fw-bold">Main Heading</label>
            <input type="text" name="main_heading" class="form-control"
                   value="<?= $edit_data['main_heading'] ?? '' ?>" required>
          </div>

          <div class="mb-3">
            <label class="form-label fw-bold">Sub Heading</label>
            <input type="text" name="sub_heading" class="form-control"
                   value="<?= $edit_data['sub_heading'] ?? '' ?>">
          </div>

          <div class="mb-3">
            <label class="form-label fw-bold">Upload Image</label>
            <input type="file" name="image" class="form-control">
          </div>

          <div class="form-check mb-3">
            <input type="checkbox" class="form-check-input" name="image_overlay"
              <?= (!empty($edit_data) && $edit_data['image_overlay']) ? 'checked' : '' ?>>
            <label class="form-check-label">Apply Overlay on Image</label>
          </div>

          <div class="mb-3">
            <label class="form-label fw-bold">Point 1</label>
            <textarea name="point1" class="form-control" rows="2" required><?= $edit_data['point1'] ?? '' ?></textarea>
          </div>

          <div class="mb-3">
            <label class="form-label fw-bold">Point 2</label>
            <textarea name="point2" class="form-control" rows="2" required><?= $edit_data['point2'] ?? '' ?></textarea>
          </div>

          <div class="mb-3">
            <label class="form-label fw-bold">Point 3</label>
            <textarea name="point3" class="form-control" rows="2"><?= $edit_data['point3'] ?? '' ?></textarea>
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
        <h4 class="mb-4">Existing About Sections</h4>

        <div class="table-responsive">
          <table class="table table-bordered table-striped align-middle">
            <thead class="table-light">
              <tr>
                <th>ID</th>
                <th>Section Title</th>
                <th>Main Heading</th>
                <th>Sub Heading</th>
                <th>Image</th>
                <th>Overlay</th>
                <th>Point 1</th>
                <th>Point 2</th>
                <th>Point 3</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody>
            <?php
            $result = mysqli_query($con, "SELECT * FROM home_aboutus ORDER BY id DESC");
            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                  <td>{$row['id']}</td>
                  <td>{$row['section_title']}</td>
                  <td>{$row['main_heading']}</td>
                  <td>{$row['sub_heading']}</td>
                  <td><img src='{$row['image']}' width='80'></td>
                  <td>".($row['image_overlay'] ? 'Yes' : 'No')."</td>
                  <td>{$row['point1']}</td>
                  <td>{$row['point2']}</td>
                  <td>{$row['point3']}</td>
                  <td>
                    <a href='home_aboutus.php?edit={$row['id']}'
                       class='btn btn-warning btn-sm action-btn'>Edit</a>

                    <a href='home_aboutus.php?delete={$row['id']}'
                       class='btn btn-danger btn-sm action-btn'
                       onclick=\"return confirm('Are you sure?');\">Delete</a>
                  </td>
                </tr>";
              }
            } else {
              echo "<tr><td colspan='10' class='text-center'>No Records Found</td></tr>";
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
