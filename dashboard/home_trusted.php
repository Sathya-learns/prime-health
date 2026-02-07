<?php
include 'header.php';
include 'sidebar.php';
include 'z_db.php';

/* =========================
   EDIT STAT FETCH
========================= */
$edit_mode = false;
$edit_stat = [];

if (isset($_GET['edit'])) {
    $edit_id = intval($_GET['edit']);
    $res = mysqli_query($con, "SELECT * FROM home_trusted_stats WHERE id=$edit_id");
    if (mysqli_num_rows($res) == 1) {
        $edit_stat = mysqli_fetch_assoc($res);
        $edit_mode = true;
    }
}

/* =========================
   UPDATE HEADER
========================= */
if (isset($_POST['update_header'])) {
    $heading = mysqli_real_escape_string($con, $_POST['heading']);
    $sub_paragraph = mysqli_real_escape_string($con, $_POST['sub_paragraph']);

    mysqli_query($con, "UPDATE home_trusted_header 
                        SET heading='$heading', sub_paragraph='$sub_paragraph' 
                        WHERE id=1");

    echo "<script>alert('Trusted section updated'); window.location='home_trusted.php';</script>";
}

/* =========================
   INSERT / UPDATE STAT
========================= */
if (isset($_POST['save_stat'])) {

    $stat_value  = intval($_POST['stat_value']);
    $stat_suffix = mysqli_real_escape_string($con, $_POST['stat_suffix']);
    $stat_text   = mysqli_real_escape_string($con, $_POST['stat_text']);

    if (!empty($_POST['id'])) {
        // UPDATE
        $id = intval($_POST['id']);
        mysqli_query($con, "UPDATE home_trusted_stats SET
            stat_value=$stat_value,
            stat_suffix='$stat_suffix',
            stat_text='$stat_text'
            WHERE id=$id");
        $msg = "Stat updated successfully";
    } else {
        // INSERT
        mysqli_query($con, "INSERT INTO home_trusted_stats 
            (stat_value, stat_suffix, stat_text)
            VALUES ($stat_value, '$stat_suffix', '$stat_text')");
        $msg = "Stat added successfully";
    }

    echo "<script>alert('$msg'); window.location='home_trusted.php';</script>";
}

/* =========================
   DELETE STAT
========================= */
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    mysqli_query($con, "DELETE FROM home_trusted_stats WHERE id=$id");
    echo "<script>alert('Deleted successfully'); window.location='home_trusted.php';</script>";
}

$header = mysqli_fetch_assoc(
    mysqli_query($con, "SELECT * FROM home_trusted_header WHERE id=1")
);
?>

<div class="d-flex">
<div id="main-content" class="flex-grow-1 p-4" style="margin-left:220px;">

<!-- ================= HEADER FORM ================= -->
<div class="card shadow border-0 mb-4">
  <div class="card-body">
    <h4 class="mb-4">Trusted Section Heading</h4>

    <form method="POST">
      <div class="mb-3">
        <label class="fw-bold">Main Heading</label>
        <input type="text" name="heading" class="form-control"
               value="<?= $header['heading']; ?>" required>
      </div>

      <div class="mb-3">
        <label class="fw-bold">Sub Paragraph</label>
        <textarea name="sub_paragraph" class="form-control" rows="3" required><?= $header['sub_paragraph']; ?></textarea>
      </div>

      <button type="submit" name="update_header" class="btn btn-primary">
        Update
      </button>
    </form>
  </div>
</div>

<!-- ================= ADD / EDIT STAT ================= -->
<div class="card shadow border-0 mb-4">
  <div class="card-body">
    <h4 class="mb-4"><?= $edit_mode ? 'Edit Trusted Stat' : 'Add Trusted Stat'; ?></h4>

    <form method="POST">
      <input type="hidden" name="id" value="<?= $edit_stat['id'] ?? '' ?>">

      <div class="row">
        <div class="col-md-3 mb-3">
          <label class="fw-bold">Value</label>
          <input type="number" name="stat_value" class="form-control"
                 value="<?= $edit_stat['stat_value'] ?? '' ?>" required>
        </div>

        <div class="col-md-3 mb-3">
          <label class="fw-bold">Suffix</label>
          <input type="text" name="stat_suffix" class="form-control"
                 value="<?= $edit_stat['stat_suffix'] ?? '' ?>"
                 placeholder="K+ or %">
        </div>

        <div class="col-md-6 mb-3">
          <label class="fw-bold">Description</label>
          <input type="text" name="stat_text" class="form-control"
                 value="<?= $edit_stat['stat_text'] ?? '' ?>" required>
        </div>
      </div>

      <button type="submit" name="save_stat"
              class="btn <?= $edit_mode ? 'btn-primary' : 'btn-success'; ?>">
        <?= $edit_mode ? 'Update Stat' : 'Add Stat'; ?>
      </button>
    </form>
  </div>
</div>

<!-- ================= EXISTING STATS ================= -->
<div class="card shadow border-0">
  <div class="card-body">
    <h4 class="mb-4">Existing Stats</h4>

    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Value</th>
          <th>Suffix</th>
          <th>Description</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $stats = mysqli_query($con, "SELECT * FROM home_trusted_stats ORDER BY id DESC");
        while ($row = mysqli_fetch_assoc($stats)) {
          echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['stat_value']}</td>
            <td>{$row['stat_suffix']}</td>
            <td>{$row['stat_text']}</td>
            <td>
              <a href='home_trusted.php?edit={$row['id']}'
                 class='btn btn-warning btn-sm'>Edit</a>

              <a href='home_trusted.php?delete={$row['id']}'
                 class='btn btn-danger btn-sm'
                 onclick=\"return confirm('Delete this stat?');\">Delete</a>
            </td>
          </tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
</div>

</div>
</div>

<?php include 'footer.php'; ?>
