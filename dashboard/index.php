<?php

session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}

include "header.php";
include "sidebar.php";
 // Assuming this is the file where your database connection is established
?>

<style>
    .card:hover{
    transform: translateY(-5px);
    transition: 0.3s ease;
}


</style>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Dashboard</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
                <!-- end page title -->
                <div class="row mb-3 pb-1">
                            <div class="col-12">
                                <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                    <div class="flex-grow-1">
                                        <h4 class="fs-16 mb-1">Howdy, !</h4>
                                        <p class="text-muted mb-0">Welcome back to your dashboard.</p>
                                    </div>
                                    <div class="mt-3 mt-lg-0">
                                        <form action="javascript:void(0);">

                                        </form>
                                    </div>
                                </div><!-- end card header -->
                            </div>
                            <!--end col-->
                        </div>
<!-- ================= Healthcare Dashboard Overview ================= -->
<div class="row">

    <!-- Total Patients -->
    <div class="col-xl-3 col-md-6">
        <div class="card card-animate">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <p class="text-muted mb-1">Total Patients</p>
                        <h4 class="mb-0">1,248</h4>
                    </div>
                    <div class="avatar-sm bg-primary rounded-circle">
                        <span class="avatar-title">
                            <i class="ri-user-heart-line fs-20 text-white"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Doctors -->
    <div class="col-xl-3 col-md-6">
        <div class="card card-animate">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <p class="text-muted mb-1">Doctors Available</p>
                        <h4 class="mb-0">36</h4>
                    </div>
                    <div class="avatar-sm bg-success rounded-circle">
                        <span class="avatar-title">
                            <i class="ri-stethoscope-line fs-20 text-white"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Appointments -->
    <div class="col-xl-3 col-md-6">
        <div class="card card-animate">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <p class="text-muted mb-1">Today Appointments</p>
                        <h4 class="mb-0">92</h4>
                    </div>
                    <div class="avatar-sm bg-warning rounded-circle">
                        <span class="avatar-title">
                            <i class="ri-calendar-check-line fs-20 text-white"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Departments -->
    <div class="col-xl-3 col-md-6">
        <div class="card card-animate">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <p class="text-muted mb-1">Departments</p>
                        <h4 class="mb-0">14</h4>
                    </div>
                    <div class="avatar-sm bg-danger rounded-circle">
                        <span class="avatar-title">
                            <i class="ri-hospital-line fs-20 text-white"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- ================= Welcome Healthcare Message ================= -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="mb-2">Healthcare Management Overview</h5>
                <p class="text-muted mb-0">
                    Monitor patient care, manage doctors, track appointments, and keep your healthcare services
                    running efficiently. This dashboard gives you a quick snapshot of daily hospital activities
                    and service performance.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- ================= Healthcare Info Cards ================= -->
<div class="row">

    <div class="col-md-4">
        <div class="card text-center h-100">
            <div class="card-body">
                <i class="ri-user-heart-line fs-32 text-primary mb-2"></i>
                <h6>Patient Care</h6>
                <p class="text-muted fs-13 mb-0">
                    We focus on patient-centric care with accurate records,
                    continuous monitoring, and quality medical services.
                </p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card text-center h-100">
            <div class="card-body">
                <i class="ri-shield-check-line fs-32 text-success mb-2"></i>
                <h6>Trusted & Secure</h6>
                <p class="text-muted fs-13 mb-0">
                    All healthcare data is handled securely, ensuring
                    confidentiality and compliance with medical standards.
                </p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card text-center h-100">
            <div class="card-body">
                <i class="ri-hospital-line fs-32 text-warning mb-2"></i>
                <h6>Modern Facilities</h6>
                <p class="text-muted fs-13 mb-0">
                    Equipped with advanced medical infrastructure and
                    expert professionals for effective treatment.
                </p>
            </div>
        </div>
    </div>

</div>

                       
    <!-- End Page-content -->
    <?php include "footer.php";?>
