<?php
include 'header.php';
include 'sidebar.php';
include 'z_db.php';

/* =========================
   INSERT OPERATION
========================= */
if (isset($_POST['submit'])) {
    $main_title = mysqli_real_escape_string($con, $_POST['main_title']);
    $item_title = mysqli_real_escape_string($con, $_POST['item_title']);
    $item_content = mysqli_real_escape_string($con, $_POST['item_content']);

    $section_image = "";
    if (!empty($_FILES['section_image']['name'])) {
        $dir = "uploads/";
        if (!is_dir($dir)) mkdir($dir, 0777, true);
        $filename = time() . "_" . basename($_FILES['section_image']['name']);
        $section_image = $dir . $filename;
        move_uploaded_file($_FILES['section_image']['tmp_name'], $section_image);
    }

    mysqli_query($con,
        "INSERT INTO services_items (main_title, section_image, item_title, item_content)
         VALUES ('$main_title', '$section_image', '$item_title', '$item_content')"
    );

    echo "<script>alert('Added Successfully!'); window.location='services_items.php';</script>";
}

/* =========================
   UPDATE OPERATION
========================= */
if (isset($_POST['update'])) {
    $id = $_POST['id'];

    $main_title = mysqli_real_escape_string($con, $_POST['main_title']);
    $item_title = mysqli_real_escape_string($con, $_POST['item_title']);
    $item_content = mysqli_real_escape_string($con, $_POST['item_content']);

    if (!empty($_FILES['section_image']['name'])) {
        $dir = "uploads/";
        $filename = time() . "_" . basename($_FILES['section_image']['name']);
        $section_image = $dir . $filename;
        move_uploaded_file($_FILES['section_image']['tmp_name'], $section_image);
        $img_q = ", section_image='$section_image'";
    } else {
        $img_q = "";
    }

    mysqli_query($con,
        "UPDATE services_items 
         SET main_title='$main_title', item_title='$item_title', item_content='$item_content' $img_q 
         WHERE id='$id'"
    );

    echo "<script>alert('Updated Successfully!'); window.location='services_items.php';</script>";
}

/* =========================
   EDIT LOAD
========================= */
$editData = null;
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $editData = mysqli_fetch_assoc(
        mysqli_query($con, "SELECT * FROM services_items WHERE id='$id'")
    );
}

/* =========================
   DELETE
========================= */
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($con, "DELETE FROM services_items WHERE id='$id'");
    echo "<script>alert('Deleted Successfully!'); window.location='services_items.php';</script>";
}
?>

<div class="d-flex">
  <div id="main-content" class="flex-grow-1 p-4" style="margin-left:220px; color:#000;">

    <!-- FORM -->
    <div class="card shadow border-0 mb-4">
      <div class="card-body">
        <h4 class="mb-4"><?= $editData ? "Update Service Item" : "Add Service Item" ?></h4>

        <form method="POST" enctype="multipart/form-data">

          <div class="mb-3">
            <label class="form-label fw-bold">Main Title</label>
            <input type="text" name="main_title" class="form-control"
              value="<?= $editData['main_title'] ?? '' ?>">
          </div>

          <div class="mb-3">
            <label class="form-label fw-bold">Item Title</label>
            <input type="text" name="item_title" class="form-control"
              value="<?= $editData['item_title'] ?? '' ?>">
          </div>

          <div class="mb-3">
            <label class="form-label fw-bold">Item Content</label>
            <textarea name="item_content" class="form-control" rows="3"><?= $editData['item_content'] ?? '' ?></textarea>
          </div>

          <div class="mb-3">
            <label class="form-label fw-bold">Section Image</label>
            <input type="file" name="section_image" class="form-control">
            <?php if ($editData && $editData['section_image']) { ?>
              <img src="<?= $editData['section_image'] ?>" width="80" class="img-thumbnail mt-2">
            <?php } ?>
          </div>

          <?php if ($editData) { ?>
            <input type="hidden" name="id" value="<?= $editData['id'] ?>">
            <button type="submit" name="update" class="btn btn-success">Update</button>
            <a href="services_items.php" class="btn btn-secondary">Cancel</a>
          <?php } else { ?>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
          <?php } ?>

        </form>
      </div>
    </div>

    <!-- TABLE -->
    <style>
      .table .btn-sm {
        width: 70px;
        text-align: center;
        padding: 4px 0;
        font-size: 0.8rem;
      }
    </style>

    <div class="card shadow border-0">
      <div class="card-body">
        <h4 class="mb-4">Existing Service Items</h4>

        <table class="table table-bordered table-striped align-middle">
          <thead class="table-light">
            <tr>
              <th>ID</th>
              <th>Item Title</th>
              <th>Item Content</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $result = mysqli_query($con, "SELECT * FROM services_items ORDER BY id ASC");
            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                echo "
                <tr>
                  <td>{$row['id']}</td>
                  <td>{$row['item_title']}</td>
                  <td>{$row['item_content']}</td>
                  <td>
                    <a href='services_items.php?edit={$row['id']}' class='btn btn-warning btn-sm'>Edit</a>
                    <a href='services_items.php?delete={$row['id']}' class='btn btn-danger btn-sm'
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
