<?php
include "z_db.php";
?>



<div class="app-menu navbar-menu">
  <!-- LOGO -->
  <div class="navbar-brand-box">
    <!-- Dark Logo-->
    <?php
    // Corrected the query and fetching logic
    $ufile = ''; // default

$rr = mysqli_query($con, "SELECT ufile FROM logo LIMIT 1");
if ($rr && mysqli_num_rows($rr) > 0) {
    $r = mysqli_fetch_row($rr);
    $ufile = $r[0];
}
    ?>


    <a href="dashboard" class="logo logo-dark">
      <span class="logo-sm">
        <img src="uploads/logo/<?php echo htmlspecialchars($ufile ?: 'default.png'); ?>" alt="Logo" height="22">

      </span>
      <span class="logo-lg">
        <img src="uploads/logo/<?php echo htmlspecialchars($ufile ?: 'default.png'); ?>" alt="Logo" height="30">

      </span>
    </a>
    <!-- Light Logo-->
    <a href="dashboard" class="logo logo-light">
      <span class="logo-sm">
        <img src="uploads/logo/<?php echo htmlspecialchars($ufile ?: 'default.png'); ?>" alt="Logo" height="22">

      </span>
      <span class="logo-lg">
       <img src="uploads/logo/<?php echo htmlspecialchars($ufile ?: 'default.png'); ?>" alt="Logo" style="width:50%">

      </span>
    </a>
    <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
      <i class="ri-record-circle-line"></i>
    </button>
  </div>


  <div id="scrollbar">
    <div class="container-fluid">

      <div id="two-column-menu">
      </div>
      <ul class="navbar-nav" id="navbar-nav">
        <li class="menu-title"><span data-key="t-menu">Menu</span></li>


              <!-- <li class="nav-item">
                <a href="dashboard" class="nav-link" data-key="t-analytics">  <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards"> Dashboard </span></a>
              </li>
                    <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarhome" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarLanding">
                                <i class="ri-home-fill"></i><span data-key="t-landing">Home Page</span>
                            </a>
                            <div class="menu-dropdown collapse" id="sidebarhome" style="">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="homebanner" class="nav-link" data-key="t-one-page">Home Banner </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="homeabout" class="nav-link" data-key="t-one-page">Home About </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="hometestimony" class="nav-link" data-key="t-one-page">Home Testimony </a>
                                    </li>
                                    
                                </ul>
                            </div>
                    </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarabt" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarLanding">
                            <i class="ri-questionnaire-line"></i><span data-key="t-landing">About Page</span>
                            </a>
                            <div class="menu-dropdown collapse" id="sidebarabt" style="">
                                <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                        <a href="about-banner" class="nav-link" data-key="t-one-page"> Add Banner </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="about-whoweare" class="nav-link" data-key="t-one-page">About Who we are </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="about-box" class="nav-link" data-key="t-one-page">About small box details </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="about-mission" class="nav-link" data-key="t-one-page">About mission & vission </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarfit" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarLanding">
                            <i class="ri-run-line"></i> <span data-key="t-landing">Fitness</span>
                            </a>
                            <div class="menu-dropdown collapse" id="sidebarfit" style="">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="fitness-banner" class="nav-link" data-key="t-one-page"> Add Banner </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="fitnessclass" class="nav-link" data-key="t-nft-landing">Fitness Programs</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="fitnessinspire" class="nav-link" data-key="t-nft-landing">Fitness inspire points</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="fitness-inspire-img" class="nav-link" data-key="t-nft-landing">Fitness inspire big img</a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a href="fitness-offer-banner" class="nav-link" data-key="t-nft-landing">Fitness Offer Banner</a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarB" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarLanding">
                            <i class="ri-boxing-fill"></i> <span data-key="t-landing">Boxing</span>
                            </a>
                            <div class="menu-dropdown collapse" id="sidebarB" style="">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="boxing-banner" class="nav-link" data-key="t-one-page"> Add Banner </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="boxingclass" class="nav-link" data-key="t-nft-landing">Boxing programs</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="boxing-whychoose" class="nav-link" data-key="t-nft-landing">Boxing why choose</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="boxing-offer-banner" class="nav-link" data-key="t-nft-landing">Boxing Offer Banner</a>
                                    </li>
                                </ul>
                            </div>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarmem" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarLanding">
                            <i class="ri-file-text-fill"></i><span data-key="t-landing">Membership Page</span>
                            </a>
                            <div class="menu-dropdown collapse" id="sidebarmem" style="">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="membership-banner" class="nav-link" data-key="t-one-page"> Add Banner </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="membershipheading" class="nav-link" data-key="t-one-page">Membership Heading</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="membership" class="nav-link" data-key="t-one-page">Membership Detail </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="faq" class="nav-link" data-key="t-one-page">Faq Section </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        
                       
                     
                        
            
                       

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarcontact" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarLanding">
                            <i class="ri-phone-line"></i> <span data-key="t-landing">Contact</span>
                            </a>
                            <div class="menu-dropdown collapse" id="sidebarcontact" style="">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="contact-banner" class="nav-link" data-key="t-one-page"> Add Banner </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="contact-background-img" class="nav-link" data-key="t-nft-landing">Contact Background Img</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="contact-detail" class="nav-link" data-key="t-nft-landing">Contact Detail</a>
                                    </li>
                                </ul>
                            </div>
                        </li> -->
            


                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarK" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarLanding">
                                <i class="ri-tools-fill"></i> <span data-key="t-landing"> HOME PAGE </span>
                            </a>
                            <div class="menu-dropdown collapse" id="sidebarK" style="">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="home_banner.php" class="nav-link" data-key="t-one-page"> home banner </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="home_aboutus.php" class="nav-link" data-key="t-one-page"> home aboutus </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="home_trusted.php" class="nav-link" data-key="t-nft-landing"> home trusted</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="home_ads.php" class="nav-link" data-key="t-nft-landing">home ads</a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a href="home_experts.php" class="nav-link" data-key="t-nft-landing"> home experts </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="home_services.php" class="nav-link" data-key="t-nft-landing"> home services </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="home_blog.php" class="nav-link" data-key="t-nft-landing"> home blog </a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </li>

                           <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarconfig2" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarLanding">
                                <i class="ri-tools-fill"></i> <span data-key="t-landing">What we do details </span>
                            </a>
                            <div class="menu-dropdown collapse" id="sidebarconfig2" style="">
                                <ul class="nav nav-sm flex-column">
                                                            <li class="nav-item">
                                        <a href="service_details.php" class="nav-link" data-key="t-one-page">Services details </a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </li>


                         <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarKcon" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarLanding">
                                <i class="ri-tools-fill"></i> <span data-key="t-landing"> ABOUT PAGE </span>
                            </a>
                            <div class="menu-dropdown collapse" id="sidebarKcon" style="">
                                <ul class="nav nav-sm flex-column">
                                    
                                    <li class="nav-item">
                                        <a href="about_ads.php" class="nav-link" data-key="t-one-page"> about ads</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="why_choose.php" class="nav-link" data-key="t-nft-landing"> why choose</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="about_values.php" class="nav-link" data-key="t-nft-landing">about values</a>
                                    </li>

                                    
                                </ul>
                            </div>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarKconfigpage" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarLanding">
                                <i class="ri-tools-fill"></i> <span data-key="t-landing">SERVICES PAGE </span>
                            </a>
                            <div class="menu-dropdown collapse" id="sidebarKconfigpage" style="">
                                <ul class="nav nav-sm flex-column">
                                                            <li class="nav-item">
                                        <a href="services_items.php" class="nav-link" data-key="t-one-page"> services items </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="departments.php" class="nav-link" data-key="t-nft-landing"> departments </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="treatment_projects.php" class="nav-link" data-key="t-nft-landing">treatment projects</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="service_doctors.php" class="nav-link" data-key="t-nft-landing">service doctors</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                         <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarKconfigpagee" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarLanding">
                                <i class="ri-tools-fill"></i> <span data-key="t-landing">PROJECTS </span>
                            </a>
                            <div class="menu-dropdown collapse" id="sidebarKconfigpagee" style="">
                                <ul class="nav nav-sm flex-column">
                                                            <li class="nav-item">
                                        <a href="project_details.php" class="nav-link" data-key="t-one-page">project details</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarKconfigpage1" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarLanding">
                                <i class="ri-tools-fill"></i> <span data-key="t-landing">BLOG PAGE </span>
                            </a>
                            <div class="menu-dropdown collapse" id="sidebarKconfigpage1" style="">
                                <ul class="nav nav-sm flex-column">
                                                            <li class="nav-item">
                                        <a href="blog_details.php" class="nav-link" data-key="t-one-page">blog details </a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </li>


                       <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarKconfig1" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarLanding">
                                <i class="ri-tools-fill"></i> <span data-key="t-landing"> FAQ PAGE</span>
                            </a>
                            <div class="menu-dropdown collapse" id="sidebarKconfig1" style="">
                                <ul class="nav nav-sm flex-column">
                                                            <li class="nav-item">
                                        <a href="faq_section.php" class="nav-link" data-key="t-one-page">faq section </a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </li>

                         <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarKconfig" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarLanding">
                                <i class="ri-tools-fill"></i> <span data-key="t-landing"> Site Configuration </span>
                            </a>
                            <div class="menu-dropdown collapse" id="sidebarKconfig" style="">
                                <ul class="nav nav-sm flex-column">
                                                            <li class="nav-item">
                                        <a href="settings" class="nav-link" data-key="t-one-page"> Footer Details </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="logo" class="nav-link" data-key="t-nft-landing"> Update Logo </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="fitness-headings" class="nav-link" data-key="t-nft-landing">Fitness,Boxing Heading</a>
                                    </li>
                                </ul>
                            </div>
                        </li>




      </ul>
    </div>
    <!-- Sidebar -->
  </div>

  <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>

<style>
    .navbar-menu{
        background-color:rgb(10, 69, 109) !important;
    }
</style>
