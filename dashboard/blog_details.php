<?php
include 'header.php';
include 'sidebar.php';
include 'z_db.php';

/* =========================
   BLOG INSERT
========================= */
if (isset($_POST['submit_blog'])) {

    $main_heading = mysqli_real_escape_string($con, $_POST['main_heading']);

    $image = "";
    if (!empty($_FILES['main_image']['name'])) {
        $dir = "uploads/blogs/";
        if (!is_dir($dir)) mkdir($dir, 0777, true);

        $filename = time() . "_" . basename($_FILES['main_image']['name']);
        $image = $dir . $filename;
        move_uploaded_file($_FILES['main_image']['tmp_name'], $image);
    }

    mysqli_query($con, "INSERT INTO blogs (main_heading, main_image)
                        VALUES ('$main_heading', '$image')");

    echo "<script>alert('Blog Added Successfully');window.location='blog_details.php';</script>";
}

/* =========================
   BLOG UPDATE
========================= */
if (isset($_POST['update_blog'])) {

    $id = $_POST['id'];
    $main_heading = mysqli_real_escape_string($con, $_POST['main_heading']);

    if (!empty($_FILES['main_image']['name'])) {
        $dir = "uploads/blogs/";
        $filename = time() . "_" . basename($_FILES['main_image']['name']);
        $image = $dir . $filename;
        move_uploaded_file($_FILES['main_image']['tmp_name'], $image);
        $img_q = ", main_image='$image'";
    } else {
        $img_q = "";
    }

    mysqli_query($con, "UPDATE blogs SET main_heading='$main_heading' $img_q WHERE id='$id'");
    echo "<script>alert('Blog Updated');window.location='blog_details.php';</script>";
}

/* =========================
   BLOG DELETE
========================= */
if (isset($_GET['delete_blog'])) {
    $id = $_GET['delete_blog'];
    mysqli_query($con, "DELETE FROM blogs WHERE id='$id'");
    echo "<script>alert('Blog Deleted');window.location='blog_details.php';</script>";
}

/* =========================
   BLOG EDIT LOAD
========================= */
$editBlog = null;
if (isset($_GET['edit_blog'])) {
    $id = $_GET['edit_blog'];
    $editBlog = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM blogs WHERE id='$id'"));
}

/* =========================
   QUESTION INSERT
========================= */
if (isset($_POST['submit_question'])) {

    $blog_id = $_POST['blog_id'];
    $question_heading = mysqli_real_escape_string($con, $_POST['question_heading']);
    $answer = mysqli_real_escape_string($con, $_POST['answer']);

    mysqli_query($con, "INSERT INTO blog_questions (blog_id, question_heading, answer)
                        VALUES ('$blog_id', '$question_heading', '$answer')");

    echo "<script>alert('Question Added');window.location='blog_details.php';</script>";
}

/* =========================
   QUESTION DELETE
========================= */
if (isset($_GET['delete_q'])) {
    $id = $_GET['delete_q'];
    mysqli_query($con, "DELETE FROM blog_questions WHERE id='$id'");
    echo "<script>alert('Question Deleted');window.location='blog_details.php';</script>";
}


/* =========================
   QUESTION EDIT LOAD
========================= */
$editQ = null;
if (isset($_GET['edit_q'])) {
    $id = $_GET['edit_q'];
    $editQ = mysqli_fetch_assoc(
        mysqli_query($con, "SELECT * FROM blog_questions WHERE id='$id'")
    );
}

/* =========================
   QUESTION UPDATE
========================= */
if (isset($_POST['update_question'])) {

    $id = $_POST['id'];
    $blog_id = $_POST['blog_id'];
    $question_heading = mysqli_real_escape_string($con, $_POST['question_heading']);
    $answer = mysqli_real_escape_string($con, $_POST['answer']);

    mysqli_query($con, "
        UPDATE blog_questions 
        SET blog_id='$blog_id',
            question_heading='$question_heading',
            answer='$answer'
        WHERE id='$id'
    ");

    echo "<script>alert('Question Updated');window.location='blog_details.php';</script>";
}

?>
<div class="d-flex">
<div id="main-content" class="flex-grow-1 p-4" style="margin-left:220px;color:#000;">

<!-- ================= BLOG FORM ================= -->
<div class="card shadow border-0 mb-4">
<div class="card-body">
<h4 class="mb-4">
<?= $editQ ? "Update Question & Answer" : "Add Question & Answer" ?>
</h4>

<form method="POST">







</form>

</div>
</div>

<!-- ================= QUESTION FORM ================= -->
<div class="card shadow border-0 mb-4">
<div class="card-body">
<h4 class="mb-4">Add Question & Answer</h4>

<form method="POST">



<div class="mb-3">
<label class="form-label fw-bold">Question Heading</label>
<input type="text" name="question_heading" class="form-control" required>
</div>

<div class="mb-3">
<label class="form-label fw-bold">Answer</label>
<textarea name="answer" class="form-control" rows="4" required></textarea>
</div>

<button type="submit" name="submit_question" class="btn btn-primary">Add Question</button>

</form>
</div>
</div>

<!-- ================= QUESTION LIST ================= -->
<div class="card shadow border-0">
<div class="card-body">
<h4 class="mb-4">Existing Questions</h4>

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
$q = mysqli_query($con, "
    SELECT * FROM blog_questions 
    ORDER BY id DESC
");

if (mysqli_num_rows($q) > 0) {
    while ($row = mysqli_fetch_assoc($q)) {

        echo "
        <tr>
          <td>{$row['id']}</td>

          <td>{$row['question_heading']}</td>

          <td>{$row['answer']}</td>

          <td>
            <a href='blog_details.php?edit_q=".$row['id']."' 
               class='btn btn-warning btn-sm'>Edit</a>

            <a href='blog_details.php?delete_q=".$row['id']."' 
               class='btn btn-danger btn-sm'
               onclick=\"return confirm('Delete this question?');\">
               Delete
            </a>
          </td>
        </tr>
        ";
    }
} else {
    echo "<tr>
            <td colspan='4' class='text-center'>No Records Found</td>
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
