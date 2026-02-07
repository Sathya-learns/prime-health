<?php
include 'header.php';
include 'sidebar.php';
include 'z_db.php';

/* =========================
   UPDATE MAIN HEADING
========================= */
if (isset($_POST['update_heading'])) {
    $main_heading = mysqli_real_escape_string($con, $_POST['main_heading']);

    mysqli_query($con, "UPDATE values_section 
                        SET main_heading='$main_heading'
                        WHERE id=1");

    echo "<script>alert('Main Heading Updated'); window.location='about_values.php';</script>";
}


/* =========================
   ADD VALUE
========================= */
if (isset($_POST['add_value'])) {
    $value_heading = mysqli_real_escape_string($con, $_POST['value_heading']);
    $value_paragraph = mysqli_real_escape_string($con, $_POST['value_paragraph']);

    mysqli_query($con, "INSERT INTO values_list (value_heading, value_paragraph)
                        VALUES ('$value_heading', '$value_paragraph')");

    echo "<script>alert('Value Added'); window.location='about_values.php';</script>";
}


/* =========================
   DELETE VALUE
========================= */
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    mysqli_query($con, "DELETE FROM values_list WHERE id=$id");
    echo "<script>alert('Deleted'); window.location='about_values.php';</script>";
}


/* =========================
   UPDATE VALUE MODAL
========================= */
if (isset($_POST['update_value'])) {
    $id = intval($_POST['id']);
    $value_heading = mysqli_real_escape_string($con, $_POST['value_heading']);
    $value_paragraph = mysqli_real_escape_string($con, $_POST['value_paragraph']);

    mysqli_query($con, "UPDATE values_list 
                        SET value_heading='$value_heading',
                            value_paragraph='$value_paragraph'
                        WHERE id=$id");

    echo "<script>alert('Value Updated'); window.location='about_values.php';</script>";
}


/* FETCH MAIN HEADING */
$heading_data = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM values_section WHERE id=1"));
?>

<div class="d-flex">
<div id="main-content" class="flex-grow-1 p-4" style="margin-left:220px;">

<!-- ================= MAIN HEADING FORM ================= -->
<div class="card shadow border-0 mb-4">
  <div class="card-body">
    <h4 class="mb-4">Values Section Main Heading</h4>
    <form method="POST">
      <div class="mb-3">
        <label class="fw-bold">Main Heading</label>
        <input type="text" name="main_heading" class="form-control" value="<?= $heading_data['main_heading']; ?>" required>
      </div>

      <button type="submit" name="update_heading" class="btn btn-primary">Update</button>
    </form>
  </div>
</div>

<!-- ================= ADD VALUE FORM ================= -->
<div class="card shadow border-0 mb-4">
  <div class="card-body">
    <h4 class="mb-4">Add Value</h4>
    <form method="POST">
      <div class="row">
        <div class="col-md-4 mb-3">
          <label class="fw-bold">Value Heading</label>
          <input type="text" name="value_heading" class="form-control" required>
        </div>
      </div>

      <div class="mb-3">
        <label class="fw-bold">Value Paragraph</label>
        <textarea name="value_paragraph" class="form-control" rows="3" required></textarea>
      </div>

      <button type="submit" name="add_value" class="btn btn-success">Add Value</button>
    </form>
  </div>
</div>

<!-- ================= EXISTING VALUES ================= -->

<style>
.table .btn-sm {
    width: 70px;
    text-align: center;
    padding: 4px 0;
    font-size: 0.8rem;
    margin-right: 4px;
}
</style>
<div class="card shadow border-0">
  <div class="card-body">
    <h4 class="mb-4">Existing Values</h4>
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Heading</th>
          <th>Paragraph</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>

<?php
$values = mysqli_query($con, "SELECT * FROM values_list ORDER BY id DESC");
while ($v = mysqli_fetch_assoc($values)) {
?>
<tr>
  <td><?= $v['id']; ?></td>
  <td><?= $v['value_heading']; ?></td>
  <td><?= $v['value_paragraph']; ?></td>
  <td>
    <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal<?= $v['id']; ?>">Edit</button>
    <a href="about_values.php?delete=<?= $v['id']; ?>" onclick="return confirm('Delete?');" class="btn btn-danger btn-sm">Delete</a>
  </td>
</tr>

<!-- EDIT MODAL -->
<div class="modal fade" id="editModal<?= $v['id']; ?>" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="POST">
        <input type="hidden" name="id" value="<?= $v['id']; ?>">
        <div class="modal-header">
          <h5 class="modal-title">Edit Value</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">
          <div class="mb-3">
            <label class="fw-bold">Value Heading</label>
            <input type="text" name="value_heading" value="<?= $v['value_heading']; ?>" class="form-control">
          </div>

          <div class="mb-3">
            <label class="fw-bold">Value Paragraph</label>
            <textarea name="value_paragraph" class="form-control" rows="3"><?= $v['value_paragraph']; ?></textarea>
          </div>
        </div>

        <div class="modal-footer">
          <button type="submit" name="update_value" class="btn btn-primary">Update</button>
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
