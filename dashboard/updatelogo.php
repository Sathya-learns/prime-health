<?php 
include "header.php";
include "sidebar.php";
include "z_db.php"; // Ensure database connection is included

?>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- Start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Update Logo</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Logo</a></li>
                                <li class="breadcrumb-item active">Update</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End page title -->

            <div class="row">
                <div class="col-xxl-9">
                    <div class="card mt-xxl-n5">
                        <div class="card-header">
                            <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails" role="tab">
                                        <i class="fas fa-home"></i> Update Logo
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <?php
                        // Initialize status and messages
                        $status = "OK";
                        $msg = "";

                        if (isset($_POST['save'])) {
                            $uploads_dir = 'uploads/logo';
                            
                            // Ensure the folder exists
                            if (!is_dir($uploads_dir)) {
                                mkdir($uploads_dir, 0777, true);
                            }

                            // Handle Favicon Upload
                            if (!empty($_FILES["xfile"]["name"])) {
                                $tmp_name = $_FILES["xfile"]["tmp_name"];
                                $name = basename($_FILES["xfile"]["name"]);
                                $random_digit = rand(1000, 9999);
                                $new_favicon = $random_digit . "_" . $name;
                                move_uploaded_file($tmp_name, "$uploads_dir/$new_favicon");
                            } else {
                                $new_favicon = "";
                            }

                            // Handle Logo Upload
                            if (!empty($_FILES["ufile"]["name"])) {
                                $tmp_name = $_FILES["ufile"]["tmp_name"];
                                $name = basename($_FILES["ufile"]["name"]);
                                $random_digit = rand(1000, 9999);
                                $new_logo = $random_digit . "_" . $name;
                                move_uploaded_file($tmp_name, "$uploads_dir/$new_logo");
                            } else {
                                $new_logo = "";
                            }

                            // Update the database only if files were uploaded
                            if ($status == "OK") {
                                $query = "UPDATE logo SET 
                                    xfile = IF('$new_favicon' != '', '$new_favicon', xfile), 
                                    ufile = IF('$new_logo' != '', '$new_logo', ufile) 
                                    WHERE id = 1";
                                
                                $qb = mysqli_query($con, $query);

                                if ($qb) {
                                    $errormsg = "
                                    <div class='alert alert-success alert-dismissible alert-outline fade show'>
                                        Data updated successfully.
                                        <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
                                    </div>";
                                } else {
                                    $errormsg = "
                                    <div class='alert alert-danger alert-dismissible alert-outline fade show'>
                                        Database update failed. Please try again.
                                        <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
                                    </div>";
                                }
                            }
                        }

                        // Fetch existing logo details
                        $query = "SELECT * FROM logo WHERE id = 1";
                        $result = mysqli_query($con, $query);
                        $row = mysqli_fetch_assoc($result);
                        $xfile = $row['xfile'] ?? '';
                        $ufile = $row['ufile'] ?? '';
                        ?>

                        <div class="card-body p-4">
                            <div class="tab-content">
                                <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                    <?php if ($_SERVER['REQUEST_METHOD'] == 'POST') { echo $errormsg; } ?>
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <span>Current Favicon: </span> 
                                                <?php if ($xfile): ?>
                                                    <img src="uploads/logo/<?php echo $xfile; ?>" alt="Favicon" style="max-height:120px;">
                                                <?php else: ?>
                                                    <p>No favicon uploaded</p>
                                                <?php endif; ?>
                                                <div class="mb-3">
                                                    <label for="faviconInput" class="form-label">Favicon</label>
                                                    <input type="file" class="form-control" id="faviconInput" name="xfile">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <span>Current Logo: </span>
                                                <?php if ($ufile): ?>
                                                    <img src="uploads/logo/<?php echo $ufile; ?>" alt="Logo" style="max-height:120px;">
                                                <?php else: ?>
                                                    <p>No logo uploaded</p>
                                                <?php endif; ?>
                                                <div class="mb-3">
                                                    <label for="logoInput" class="form-label">Logo</label>
                                                    <input type="file" class="form-control" id="logoInput" name="ufile">
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="hstack gap-2 justify-content-end">
                                                    <button type="submit" name="save" class="btn btn-primary">Update Logo</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- End tab-pane -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- container-fluid -->
    </div> <!-- End Page-content -->

    <?php include "footer.php"; ?>
</div>

