<?php
include 'header.php';
include 'sidebar.php';
include 'z_db.php';

// INSERT OPERATION
if (isset($_POST['submit'])) {
    $main_title = mysqli_real_escape_string($con, $_POST['main_title']);
    $main_paragraph = mysqli_real_escape_string($con, $_POST['main_paragraph']);
    $sub_title = mysqli_real_escape_string($con, $_POST['sub_title']);
    $sub_content = mysqli_real_escape_string($con, $_POST['sub_content']);
    $link = mysqli_real_escape_string($con, $_POST['link']);

    $image = "";
    if (!empty($_FILES['image']['name'])) {
        $dir = "uploads/";
        if (!is_dir($dir)) mkdir($dir, 0777, true);
        $filename = time() . "_" . basename($_FILES['image']['name']);
        $image = $dir . $filename;
        move_uploaded_file($_FILES['image']['tmp_name'], $image);
    }

    mysqli_query($con, "INSERT INTO home_services (image, main_title, main_paragraph, sub_title, sub_content, link) 
                        VALUES ('$image', '$main_title', '$main_paragraph', '$sub_title', '$sub_content', '$link')");
    echo "<script>alert('Added Successfully!'); window.location='home_services.php';</script>";
}

// UPDATE OPERATION
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $main_title = mysqli_real_escape_string($con, $_POST['main_title']);
    $main_paragraph = mysqli_real_escape_string($con, $_POST['main_paragraph']);
    $sub_title = mysqli_real_escape_string($con, $_POST['sub_title']);
    $sub_content = mysqli_real_escape_string($con, $_POST['sub_content']);
    $link = mysqli_real_escape_string($con, $_POST['link']);

    if (!empty($_FILES['image']['name'])) {
        $dir = "uploads/";
        $filename = time() . "_" . basename($_FILES['image']['name']);
        $image = $dir . $filename;
        move_uploaded_file($_FILES['image']['tmp_name'], $image);
        $img_q = ", image='$image'";
    } else {
        $img_q = "";
    }

    mysqli_query($con, "UPDATE home_services 
                        SET main_title='$main_title', main_paragraph='$main_paragraph', sub_title='$sub_title', sub_content='$sub_content', link='$link' $img_q 
                        WHERE id='$id'");
    echo "<script>alert('Updated Successfully!'); window.location='home_services.php';</script>";
}

// EDIT LOAD
$editData = null;
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $editData = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM home_services WHERE id='$id'"));
}

// DELETE
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($con, "DELETE FROM home_services WHERE id='$id'");
    echo "<script>alert('Deleted Successfully!'); window.location='home_services.php';</script>";
}
?>

<div class="d-flex">
  <div id="main-content" class="flex-grow-1 p-4" style="margin-left:220px; color:#000;">

    <div class="card shadow border-0 mb-4">
      <div class="card-body">
        <h4 class="mb-4"><?= $editData ? "Update Home Service" : "Add Home Service" ?></h4>

        <form method="POST" enctype="multipart/form-data">

          <div class="mb-3">
            <label class="form-label fw-bold">Main Title (Top Section, Optional)</label>
            <input type="text" name="main_title" class="form-control"
              value="<?= $editData['main_title'] ?? '' ?>">
          </div>

          <div class="mb-3">
            <label class="form-label fw-bold">Main Paragraph (Top Section, Optional)</label>
            <textarea name="main_paragraph" class="form-control" rows="3"><?= $editData['main_paragraph'] ?? '' ?></textarea>
          </div>

          <div class="mb-3">
            <label class="form-label fw-bold">Sub Title (Feature)</label>
            <input type="text" name="sub_title" class="form-control"
              value="<?= $editData['sub_title'] ?? '' ?>" required>
          </div>

          <div class="mb-3">
            <label class="form-label fw-bold">Sub Content (Feature)</label>
            <textarea name="sub_content" class="form-control" rows="3" required><?= $editData['sub_content'] ?? '' ?></textarea>
          </div>

          <div class="mb-3">
            <label class="form-label fw-bold">Link (Optional)</label>
            <input type="text" name="link" class="form-control"
              value="<?= $editData['link'] ?? '' ?>">
          </div>

          <div class="mb-3">
            <label class="form-label fw-bold">Image (Top Section Only, Optional)</label>
            <input type="file" name="image" class="form-control">
            <?php if($editData && $editData['image']){ ?>
              <img src="<?= $editData['image'] ?>" width="80" class="img-thumbnail mt-2">
            <?php } ?>
          </div>

          <?php if($editData){ ?>
            <input type="hidden" name="id" value="<?= $editData['id'] ?>">
            <button type="submit" name="update" class="btn btn-success">Update</button>
            <a href="home_services.php" class="btn btn-secondary">Cancel</a>
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
        <h4 class="mb-4">Existing Features</h4>

        <table class="table table-bordered table-striped align-middle">
          <thead class="table-light">
            <tr>
              <th>ID</th>
              <th>Sub Title</th>
              <th>Sub Content</th>
              <th>Link</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          <?php
            $result = mysqli_query($con, "SELECT * FROM home_services ORDER BY id DESC");
            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                echo "
                <tr>
                  <td>{$row['id']}</td>
                  <td>{$row['sub_title']}</td>
                  <td>{$row['sub_content']}</td>
                  <td>{$row['link']}</td>
                  <td>
                    <a href='home_services.php?edit={$row['id']}' class='btn btn-warning btn-sm'>Edit</a>
                    <a href='home_services.php?delete={$row['id']}' class='btn btn-danger btn-sm'
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

        <?php
        // FETCH TOP ROW (Row 1)
        $row1_res = mysqli_query($con, "SELECT * FROM home_services ORDER BY id ASC LIMIT 1");
        $row1 = mysqli_fetch_assoc($row1_res);
        ?>

        <?php if(!empty($row1)): ?>
          <div style="margin-top:40px;text-align:center;">

              <?php if(!empty($row1['image'])): ?>
                  <img src="<?= $row1['image']; ?>" 
                       style="width:220px;height:auto;margin-bottom:20px;">
              <?php endif; ?>

              <?php if(!empty($row1['main_title'])): ?>
                  <h3 style="margin-bottom:15px;"><?= $row1['main_title']; ?></h3>
              <?php endif; ?>

              <?php if(!empty($row1['main_paragraph'])): ?>
                  <p style="margin-bottom:15px;"><?= $row1['main_paragraph']; ?></p>
              <?php endif; ?>

              <a href="home_services.php?delete=<?= $row1['id']; ?>"
                 onclick="return confirm('Delete this item?');"
                 class="btn btn-danger btn-sm" 
                 style="margin-top:10px;">
                  Delete
              </a>

          </div>
        <?php endif; ?>

      </div>
    </div>

  </div>
</div>

<?php include 'footer.php'; ?>
