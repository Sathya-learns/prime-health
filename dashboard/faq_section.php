<?php
include 'header.php';
include 'sidebar.php';
include 'z_db.php';

/* ====================
   INSERT OPERATION
==================== */
if (isset($_POST['submit'])) {
    $question = mysqli_real_escape_string($con, $_POST['question']);
    $answer = mysqli_real_escape_string($con, $_POST['answer']);

    mysqli_query($con, "INSERT INTO faq_section (question, answer) VALUES ('$question', '$answer')");
    echo "<script>alert('FAQ Added Successfully!'); window.location='faq_section.php';</script>";
}

/* ====================
   UPDATE OPERATION
==================== */
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $question = mysqli_real_escape_string($con, $_POST['question']);
    $answer = mysqli_real_escape_string($con, $_POST['answer']);

    mysqli_query($con, "UPDATE faq_section SET question='$question', answer='$answer' WHERE id='$id'");
    echo "<script>alert('FAQ Updated Successfully!'); window.location='faq_section.php';</script>";
}

/* ====================
   EDIT LOAD
==================== */
$editData = null;
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $editData = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM faq_section WHERE id='$id'"));
}

/* ====================
   DELETE OPERATION
==================== */
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($con, "DELETE FROM faq_section WHERE id='$id'");
    echo "<script>alert('FAQ Deleted Successfully!'); window.location='faq_section.php';</script>";
}
?>

<div class="d-flex">
  <div id="main-content" class="flex-grow-1 p-4" style="margin-left:220px; color:#000;">

    <div class="card shadow border-0 mb-4">
      <div class="card-body">
        <h4 class="mb-4"><?= $editData ? "Update FAQ" : "Add FAQ" ?></h4>

        <form method="POST">

          <div class="mb-3">
            <label class="form-label fw-bold">Question</label>
            <input type="text" name="question" class="form-control"
              value="<?= $editData['question'] ?? '' ?>" required>
          </div>

          <div class="mb-3">
            <label class="form-label fw-bold">Answer</label>
            <textarea name="answer" class="form-control" rows="4" required><?= $editData['answer'] ?? '' ?></textarea>
          </div>

          <?php if($editData){ ?>
            <input type="hidden" name="id" value="<?= $editData['id'] ?>">
            <button type="submit" name="update" class="btn btn-success">Update</button>
            <a href="faq_section.php" class="btn btn-secondary">Cancel</a>
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
    </style>

    <div class="card shadow border-0">
      <div class="card-body">
        <h4 class="mb-4">Existing FAQs</h4>

        <table class="table table-bordered table-striped align-middle">
          <thead class="table-light">
            <tr>
              <th>ID</th>
              <th>Question</th>
              <th>Answer</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          <?php
            $result = mysqli_query($con, "SELECT * FROM faq_section ORDER BY id DESC");
            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                echo "
                <tr>
                  <td>{$row['id']}</td>
                  <td>{$row['question']}</td>
                  <td>{$row['answer']}</td>
                  <td>
                    <a href='faq_section.php?edit={$row['id']}' class='btn btn-warning btn-sm'>Edit</a>
                    <a href='faq_section.php?delete={$row['id']}' class='btn btn-danger btn-sm'
                    onclick=\"return confirm('Delete this FAQ?');\">Delete</a>
                  </td>
                </tr>";
              }
            } else {
              echo "<tr><td colspan='4' class='text-center'>No FAQs Found</td></tr>";
            }
          ?>
          </tbody>
        </table>

      </div>
    </div>

  </div>
</div>

<?php include 'footer.php'; ?>
