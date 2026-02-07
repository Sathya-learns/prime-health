<?php
include "header.php";
include "sidebar.php";
include "z_db.php"; // Ensure database connection

$msg = "";
$edit_id = "";
$phone1 = "";
$phone2 = "";
$email = "";
$address = "";

// Handle Edit Request
if (isset($_GET['edit_id'])) {
    $edit_id = intval($_GET['edit_id']);
    $query = "SELECT * FROM sitecontact WHERE id = $edit_id LIMIT 1";
    $result = mysqli_query($con, $query);
    if ($row = mysqli_fetch_assoc($result)) {
        $phone1 = $row['phone1'];
        $phone2 = $row['phone2'];
        $email = $row['email'];
        $address = $row['address'];
    }
}

// Handle Save/Update
if (isset($_POST['save'])) {
    $phone1 = mysqli_real_escape_string($con, trim($_POST['phone1']));
    $phone2 = mysqli_real_escape_string($con, trim($_POST['phone2']));
    $email = mysqli_real_escape_string($con, trim($_POST['email']));
    $address = mysqli_real_escape_string($con, trim($_POST['address']));
    
    if ($edit_id) {
        // Update existing record
        $query = "UPDATE sitecontact SET phone1='$phone1', phone2='$phone2', email='$email', address='$address' WHERE id=$edit_id";
    } else {
        // Insert new record
        $query = "INSERT INTO sitecontact (phone1, phone2, email, address) VALUES ('$phone1', '$phone2', '$email', '$address')";
    }
    
    $result = mysqli_query($con, $query);
    if ($result) {
        echo "<script>alert('Saved Successfully!'); window.location.href='contact-detail.php';</script>";
    } else {
        $msg = "<script>alert('Error occurred!');</script>";
    }
}

// Handle Delete Request
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $delete_query = "DELETE FROM sitecontact WHERE id=$id";
    $delete_result = mysqli_query($con, $delete_query);
    if ($delete_result) {
        echo "<script>alert('Deleted Successfully!'); window.location.href='contact-detail.php';</script>";
    } else {
        echo "<script>alert('Error deleting record!');</script>";
    }
}
?>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Contact Details</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xxl-9">
                    <div class="card mt-xxl-n5">
                        <div class="card-header">
                            <h5 class="card-title">Manage Contact Details</h5>
                        </div>
                        <div class="card-body p-4">
                            <?php echo $msg; ?>
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Primary Phone</label>
                                            <input type="text" class="form-control" name="phone1" value="<?php echo $phone1; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Alternative Phone</label>
                                            <input type="text" class="form-control" name="phone2" value="<?php echo $phone2; ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control" name="email" value="<?php echo $email; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Address</label>
                                            <textarea class="form-control" name="address" required><?php echo $address; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="hstack gap-2 justify-content-end">
                                            <button type="submit" name="save" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <hr>
                            <h5 class="mt-4">Contact List</h5>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Primary Phone</th>
                                        <th>Alternative Phone</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                        <?php
                                        $query = "SELECT * FROM sitecontact ORDER BY id DESC";
                                        $result = mysqli_query($con, $query);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<tr>
                                                    <td>{$row['id']}</td>
                                                    <td>{$row['phone1']}</td>
                                                    <td>{$row['phone2']}</td>
                                                    <td>{$row['email']}</td>
                                                    <td>{$row['address']}</td>
                                                    <td>
                                                        <a href='contact-detail.php?edit_id={$row['id']}' class='btn btn-warning btn-sm'>Edit</a>
                                                        <a href='contact-detail.php?delete={$row['id']}' class='btn btn-danger btn-sm' onclick='return confirm(\"Are you sure?\");'>Delete</a>
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
        </div>
    </div>
    <?php include "footer.php"; ?>
</div>