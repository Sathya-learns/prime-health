<?php
include 'header.php'; // include navbar
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PrimeHealth - Services</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

  <style>

    /* ===== SERVICES BANNER ===== */
.services-banner {
  position: relative;
  width: 100%;
  height: 83vh; /* same as about – change pannalaam */
  background: url("images/canva16.png") no-repeat center center/cover;
  overflow: hidden;
}



    /* Services Page CSS - EXACTLY YOUR ORIGINAL */

    
/* ==============================
   SERVICES SECTION
============================== */

.services-section {
  padding: 100px 8%;
  background: #D6E9F7;
  font-family: 'Poppins', sans-serif;
}

.services-wrapper {
  display: grid;
  grid-template-columns: 1fr 1.4fr;
  gap: 60px;
  align-items: start;
}

/* ==============================
   LEFT SIDE
============================== */

.services-left .section-tag {
  font-size: 14px;
  font-weight: 600;
  color: #2f80ed;
  letter-spacing: 1px;
}

.services-left h2 {
  font-size: 48px;
  font-weight: 700;
  color: #243b53;
  margin: 14px 0 40px;
  line-height: 1.2;
}
/* LEFT SIDE IMAGE CARD */
.service-image-card {
  position: relative;  /* for image positioning */
  border-radius: 22px;
  overflow: hidden;
  min-height: 400px;
  box-shadow: 0 20px 45px rgba(0,0,0,0.06);
}

.service-image-card img {
  position: absolute; /* absolute positioning to overflow */
  top: 0;
  left: 0;
  width: 100%;
  height: 120%; /* 100% exceeds card height */
  object-fit: cover;
}

.service-image-card img {
  transition: transform 0.5s ease;
}

.service-image-card:hover img {
  transform: scale(1.05);
}

/* ==============================
   RIGHT SIDE GRID
============================== */

.services-right {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 35px;
}

/* ==============================
   SERVICE CARD (SAME SIZE)
============================== */

.service-card {
  background: #ffffff;
  border-radius: 22px;
  padding: 38px 32px;
  min-height: 260px;
  box-shadow: 0 20px 45px rgba(0,0,0,0.06);
  transition: all 0.4s ease;
  position: relative;
  overflow: hidden;
}

/* ICON */
.service-card .icon {
  width: 48px;
  height: 48px;
  background: #2f80ed;
  color: #fff;
  border-radius: 50%;
  display: grid;
  place-items: center;
  font-size: 20px;
  margin-bottom: 22px;
}

/* HEADING */
.service-card h3 {
  font-size: 20px;
  font-weight: 700;
  color: #243b53;
  margin-bottom: 12px;
}

/* PARAGRAPH */
.service-card p {
  font-size: 15px;
  line-height: 1.7;
  color: #7b8a9a;
}

/* ==============================
   🔥 UNIQUE FULL BLUE HOVER
============================== */

.service-card::before {
  content: "";
  position: absolute;
  inset: 0;
  background: #0066FF;
  opacity: 0;
  transition: 0.4s ease;
  z-index: 0;
}

.service-card:hover::before {
  opacity: 1;
}

.service-card * {
  position: relative;
  z-index: 1;
}

.service-card:hover h3,
.service-card:hover p {
  color: #ffffff;
}

.service-card:hover .icon {
  background: #ffffff;
  color: #0066FF;
}

.service-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 30px 65px rgba(0,102,255,0.35);
}

/* ==============================
   RESPONSIVE
============================== */

@media (max-width: 992px) {
  .services-wrapper {
    grid-template-columns: 1fr;
  }

  .services-right {
    grid-template-columns: 1fr;
  }

  .services-left h2 {
    font-size: 38px;
  }
}


    
     /* Doctors Page CSS - EXACTLY YOUR ORIGINAL */


     
    /* ================= DEPARTMENTS ================= */
 

.departments-section {
  background: #D6E9F7;
  padding: 100px 0 120px;
  text-align: center;
  position: relative;
  height: 520px;  
  overflow: hidden;
}

.dept-title {
  font-size: 48px;
  color: #0B2C59;
  margin-bottom: 60px;
  font-weight: 700;
}

/* Wrapper */
.dept-wrapper {
  position: relative;
  max-width: 1300px;
  margin: auto;
  overflow: hidden;
  padding: 0 60px;
}

/* Scroll container */
.dept-container {
  display: flex;
  gap: 30px;
  overflow-x: auto;
  overflow-y: hidden; 
  scroll-behavior: smooth;
  scrollbar-width: none;
}
.dept-container::-webkit-scrollbar {
  display: none;
}

/* Card */
.dept-card {
  min-width: 230px;
  height: 260px;
  border-radius: 26px;
  box-shadow: 0 25px 60px rgba(0,0,0,0.12);
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  cursor: pointer;
  background-size: cover;
  background-position: center;
  overflow: hidden;
  transition: transform 0.35s ease;
}

.dept-card .overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(255,255,255,0.4); /* white transparent overlay */
  pointer-events: none;
}

/* Text */
.dept-card h3 {
  position: relative;
  font-size: 18px;
  color: #0B2C59; /* navy blue */
  line-height: 1.4;
  text-align: center;
  z-index: 2;
  margin: 0;
}


/* Arrows */
.dept-arrow {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  width: 48px;
  height: 48px;
  border-radius: 50%;
  border: none;
  background: #ffffff;
  color: #0066FF;
  font-size: 22px;
  cursor: pointer;
  box-shadow: 0 10px 30px rgba(0,0,0,0.15);
  transition: all 0.3s ease;
}

.dept-arrow:hover {
  background: #0066FF;
  color: #ffffff;
}

.dept-arrow.left {
  left: 0;
}

.dept-arrow.right {
  right: 0;
}

/* Responsive */
@media (max-width: 768px) {
  .dept-title {
    font-size: 34px;
  }
  .dept-wrapper {
    padding: 0 20px;
  }
}
.dept-card h3 {
  position: absolute;      /* make it positionable */
  bottom: 20px;            /* distance from bottom of card */
  left: 50%;               /* center horizontally */
  transform: translateX(-50%);
  font-size: 20px;
  color: #0B2C59;          /* navy blue text */
  text-align: center;
  margin: 0;
  z-index: 2;              /* above overlay */
}

.departments-section {
  background: #D6E9F7;
  padding: 100px 0 120px;
  text-align: center;
  position: relative;
}


/* Arrow container positioning fix */
.dept-arrow.left {
  left: 10px; /* Changed from 0 */
  z-index: 10;
}

.dept-arrow.right {
  right: 10px; /* Changed from 0 */
  z-index: 10;
}

/* Better positioning with padding consideration */
@media (min-width: 769px) {
  .dept-arrow.left {
    left: 30px;
  }
  
  .dept-arrow.right {
    right: 30px;
  }
}



.ph-services-section {
  background: #D6E9F7;
  padding: 80px 20px; /* reduced */
}

.ph-services-container {
  max-width: 1200px; /* reduced */
  margin: auto;
}

.ph-services-header {
  text-align: center;
  margin-bottom: 55px; /* reduced */
}

.ph-services-header h2 {
  font-size: 36px; /* reduced */
  color: #0b2c3d;
  margin-bottom: 10px;
}

.ph-services-header p {
  color: #555;
  font-size: 15px;
}

/* GRID */
.ph-services-grid {
  display: grid;
  grid-template-columns: repeat(3, minmax(0, 360px));
  gap: 45px; /* reduced */
  justify-content: center;
}

/* CARD */
.ph-service-card {
  background: #fff;
  border-radius: 20px; /* reduced */
  overflow: hidden;
  padding-bottom: 24px; /* reduced */
  transition: 0.4s ease;
}

.ph-service-card:hover {
  transform: translateY(-8px); /* reduced */
  box-shadow: 0 20px 45px rgba(0,0,0,0.12);
}

/* IMAGE */
.ph-service-image {
  position: relative;
  overflow: hidden;
  border-radius: 20px 20px 0 0;
}

.ph-service-image img {
  width: 100%;
  height: 210px; /* 🔥 IMAGE SIZE REDUCED */
  object-fit: cover;
  transition: transform 0.6s ease;
}

/* IMAGE HOVER EFFECT */
.ph-service-card:hover img {
  transform: scale(1.07);
}

/* REQUIRED */
.ph-service-card {
  position: relative;
  overflow: hidden;
}

/* shine element default hidden */
.ph-service-card::after {
  content: "";
  position: absolute;
  top: 0;
  left: -120%;
  width: 60%;
  height: 100%;
  background: linear-gradient(
    120deg,
    transparent,
    rgba(255,255,255,0.55),
    transparent
  );
  opacity: 0;
  transition: left 0.6s ease, opacity 0.2s ease;
  pointer-events: none;
}

/* ONLY hovered card */
.ph-service-card:hover::after {
  left: 140%;
  opacity: 1;
}



/* TEXT */
.ph-service-card h3 {
  margin: 38px 22px 8px; /* reduced */
  font-size: 20px; /* reduced */
  color: #0b2c3d;
}

.ph-service-card p {
  margin: 0 22px 22px;
  color: #666;
  font-size: 14px; /* reduced */
  line-height: 1.6;
}

/* BUTTON */
.ph-read-more {
  margin-left: 22px;
  padding: 9px 24px; /* reduced */
  border: 2px solid #0066FF;
  border-radius: 28px;
  text-decoration: none;
  color: #0066FF;
  font-size: 13px; /* reduced */
  transition: 0.3s ease;
}

.ph-read-more:hover {
  background: #0066FF;
  color: #fff;
}

/* RESPONSIVE */
@media (max-width: 992px) {
  .ph-services-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 600px) {
  .ph-services-grid {
    grid-template-columns: 1fr;
  }
}





/* SECTION STYLING */
.treatment-projects-section {
  background: #D6E9F7;
  padding: 80px 0;
  font-family: 'poppins';
}

.projects-header {
  text-align: center;
  margin-bottom: 50px;
}

.projects-header h2 {
  font-size: 38px;
  color: #0066FF;
  margin-bottom: 10px;
}

.projects-header p {
  font-size: 17px;
  color: #333;
}

/* PROJECTS ROW */
.projects-row {
  display: flex;
  justify-content: center;
  gap: 30px;
  flex-wrap: wrap;
}

/* PROJECT CARD */
.project-card {
  position: relative;
  width: 385px;
  height: 280px;
  overflow: hidden;
  border-radius: 20px;
  cursor: pointer;
  box-shadow: 0 20px 40px rgba(0,0,0,0.1);
  transition: transform 0.4s ease, box-shadow 0.4s ease;
  gap:25px;
}

.project-card:hover {
  transform: translateY(-10px) scale(1.05);
  box-shadow: 0 30px 50px rgba(0,0,0,0.2);
}

/* IMAGE */
.project-card img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  transition: transform 0.4s ease;
}

.project-card:hover img {
  transform: scale(1.1);
}

/* OVERLAY */
.overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0,0,0,0.6);
  opacity: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  transition: opacity 0.4s ease;
  pointer-events: none;
}

.project-card:hover .overlay {
  opacity: 1;
}

/* PROJECT NAME */
.project-name {
  color: #fff;
  font-size: 16px;
  font-weight: bold;
  text-align: center;
  transition: color 0.3s ease;
}

/* PROJECT NAME CLICK EFFECT */
.project-link:active .project-name {
  color: #0066FF; /* gold color on click */
}

/* UNIQUE HOVER EFFECT */
.project-card::after {
  content: '';
  position: absolute;
  left: -75%;
  top: 0;
  width: 50%;
  height: 100%;
  background: rgba(255,255,255,0.2);
  transform: skewX(-25deg);
  transition: left 0.7s ease;
}

.project-card:hover::after {
  left: 125%;
}





/* SECTION */
/* ===== GLOBAL RESET ===== */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

/* ===== SECTION BACKGROUND ===== */
.experts-section {
  background: #d6e9f7;
  padding: 80px 20px;
}

/* ===== CONTAINER ===== */
.experts-container {
  max-width: 1200px;
  margin: auto;
}

/* ===== HEADER ===== */
.experts-header {
  text-align: center;
  margin-bottom: 60px;
}

.experts-header span {
  color: #2b7cff;
  font-weight: 600;
  letter-spacing: 2px;
  font-size: 14px;
}

.experts-header h2 {
  font-size: 36px;
  margin: 12px 0;
  color: #0a2540;
}

.experts-header p {
  max-width: 650px;
  margin: auto;
  color: #555;
  line-height: 1.7;
}

/* ===== GRID ===== */
.experts-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 40px;
}

/* ===== CARD ===== */
.expert-card {
  background: #d6e9f7;
  border-radius: 20px;
  padding: 30px 20px;
  text-align: center;
  position: relative;
  overflow: hidden;
  transition: all 0.4s ease;
}

.expert-card::before {
  content: "";
  position: absolute;
  width: 100%;
  height: 0%;
  left: 0;
  bottom: 0;
  background: linear-gradient(135deg, #2b7cff, #00c6ff);
  z-index: 0;
  transition: 0.4s;
}

.expert-card:hover::before {
  height: 100%;
}

.expert-card:hover {
  transform: translateY(-12px);
}

/* ===== IMAGE ===== */
.expert-img {
  width: 160px;
  height: 160px;
  margin: auto;
  border-radius: 50%;
  padding: 6px;
  background: linear-gradient(135deg, #2b7cff, #00c6ff);
  position: relative;
  z-index: 1;
}

.expert-img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 50%;
  transition: transform 0.5s ease;
}

.expert-card:hover .expert-img img {
  transform: scale(1.1) rotate(3deg);
}

/* ===== CONTENT ===== */
.expert-content {
  margin-top: 25px;
  position: relative;
  z-index: 1;
}

.expert-content h3 {
  font-size: 20px;
  color: #0a2540;
  margin-bottom: 5px;
  transition: 0.3s;
}

.expert-content span {
  display: block;
  color: #2b7cff;
  font-weight: 600;
  margin-bottom: 10px;
  transition: 0.3s;
}

.expert-content p {
  font-size: 14px;
  color: #666;
  line-height: 1.6;
  transition: 0.3s;
}

/* ===== SOCIAL ICONS ===== */
.expert-card::after {
  content: "";
}

.expert-content::after {
  content: "";
}

.expert-card:hover h3,
.expert-card:hover span,
.expert-card:hover p {
  color: #ffffff;
}

/* Social icons container (using pseudo) */
.expert-card:hover .expert-content::after {
  content: "";
}

/* Social icons */
.expert-card .social-icons {
  margin-top: 18px;
}

.expert-card .social-icons a {
  display: inline-flex;
  width: 38px;
  height: 38px;
  border-radius: 50%;
  background: #2b7cff;
  color: #fff;
  align-items: center;
  justify-content: center;
  margin: 0 6px;
  font-size: 14px;
  transition: 0.3s;
}

.expert-card:hover .social-icons a {
  background: #ffffff;
  color: #2b7cff;
}

.expert-card .social-icons a:hover {
  transform: scale(1.15);
}

/* ===== RESPONSIVE ===== */
@media (max-width: 992px) {
  .experts-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 576px) {
  .experts-grid {
    grid-template-columns: 1fr;
  }
}








* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

html, body {
  margin: 0;
  padding: 0;
  background: #D6E9F7; /* test purpose */
}


.facilities-section {
  padding: 100px 0;
  background: #D6E9F7;
  overflow: hidden;
}

.facilities-container {
  max-width: 1300px;
  margin: auto;
  padding: 0 20px;
}

/* HEADING */
.facilities-header span {
  color: #2f7df4;
  font-weight: 600;
  letter-spacing: 1px;
}

.facilities-header h2 {
  font-size: 30px;
  color: #12304a;
  margin-top: 10px;
  margin-bottom: 0px;
}

/* GRID */
.facilities-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 30px;
}

.facility-card {
  position: relative;
  overflow: hidden;
  border-radius: 22px;
  cursor: pointer;
}

.facility-card img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.6s ease;
}

/* Creative Sizes */
.facility-card.tall {
  grid-row: span 2;
}

.facility-card.wide {
  grid-column: span 2;
}

/* OVERLAY */
.facility-overlay {
  position: absolute;
  inset: 0;
  background: rgba(0, 102, 255, 0.55);
  backdrop-filter: blur(6px);
  display: flex;
  align-items: center;
  justify-content: center;
  opacity: 0;
  transition: 0.4s ease;
}

/* ICON */
.view-icon {
  width: 65px;
  height: 65px;
  border-radius: 50%;
  background: #fff;
  color: #0066ff;
  font-size: 26px;
  display: flex;
  align-items: center;
  justify-content: center;
  transform: scale(0.6);
  transition: 0.4s ease;
}


/* HOVER EFFECT */
.facility-card:hover img {
  transform: scale(1.1);
}

.facility-card:hover .facility-overlay {
  opacity: 1;
}

.facility-card:hover .view-icon {
  transform: scale(1);
}






/* ===========================
   RESPONSIVE DESIGN
=========================== */

/* Large Tablets */
@media (max-width: 1024px) {
  .facilities-grid {
    grid-template-columns: repeat(3, 1fr);
  }

  .facilities-header h2 {
    font-size: 40px;
  }
}

/* Tablets */
@media (max-width: 768px) {
  .facilities-section {
    padding: 80px 0;
  }

  .facilities-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
  }

  .facility-card.tall,
  .facility-card.wide {
    grid-column: span 1;
    grid-row: span 1;
  }

  .facilities-header h2 {
    font-size: 34px;
    margin-bottom: 50px;
  }

  .view-icon {
    width: 55px;
    height: 55px;
    font-size: 22px;
  }
}

/* Mobile */
@media (max-width: 480px) {
  .facilities-section {
    padding: 60px 0;
  }

  .facilities-grid {
    grid-template-columns: 1fr;
    gap: 18px;
  }

  .facilities-header span {
    font-size: 14px;
  }

  .facilities-header h2 {
    font-size: 28px;
    line-height: 1.3;
    margin-bottom: 40px;
  }

  .facility-card {
    border-radius: 18px;
  }

  .view-icon {
    width: 48px;
    height: 48px;
    font-size: 20px;
  }

  .lightbox img {
    max-width: 92%;
    max-height: 75%;
  }

  .lightbox .close {
    top: 20px;
    right: 25px;
    font-size: 32px;
  }
}



    

  </style>
</head>
<body>

<section class="services-banner">
  
</section>




<section class="services-section">
  <div class="services-wrapper">

    <!-- LEFT SIDE -->
    <div class="services-left">
      <span class="section-tag">SERVICES</span>
      <h2>Provides Our<br>Best Services</h2>
      
      <div class="service-image-card">
  <img src="images/facility6.jpg" alt="Healthcare Service">
</div>
    </div>

    <!-- RIGHT SIDE -->
    <div class="services-right">

      <div class="service-card">
        <div class="icon">📅</div>
        <h3>Diagnostic testing</h3>
        <p>
          Blood tests, imaging studies, and other tests to diagnose health
          conditions
        </p>
      </div>

      <div class="service-card">
        <div class="icon">📅</div>
        <h3>Rehabilitation services</h3>
        <p>
          Physical therapy, occupational therapy, and other services to help
          patients recover
        </p>
      </div>

      <div class="service-card">
        <div class="icon">📅</div>
        <h3>Treatment for acute and chronic conditions</h3>
        <p>
          Medication management, disease management, and treatments to improve
          outcomes
        </p>
      </div>

      <div class="service-card">
        <div class="icon">📅</div>
        <h3>Mental health services</h3>
        <p>
          Counseling, therapy, and other services to help manage mental health
          conditions
        </p>
      </div>

    </div>
  </div>
</section>


 

   

   


 <section class="departments-section">
  <h2 class="dept-title">Departments</h2>
  

  <div class="dept-wrapper">

    <!-- LEFT ARROW -->
    <button class="dept-arrow left" onclick="scrollDept(-1)">&#10094;</button>

    <!-- CARDS -->
    <div class="dept-container" id="deptContainer">

      <div class="dept-card" style="background-image: url('images/emergency.jpg');">
        <div class="overlay"></div>
        <h3>Emergency<br>Department</h3>
      </div>

      <div class="dept-card" style="background-image: url('images/pediatric.jpg');">
        <div class="overlay"></div>
        <h3>Pediatric<br>Department</h3>
      </div>

      <div class="dept-card" style="background-image: url('images/gynecology.jpg');">
        <div class="overlay"></div>
        <h3>Gynecology<br>Department</h3>
      </div>

      <div class="dept-card" style="background-image: url('images/cardiology.jpg');">
        <div class="overlay"></div>

        <h3>Cardiology<br>Department</h3>
      </div>

      <div class="dept-card" style="background-image: url('images/neurology.jpg');">
        <div class="overlay"></div>
        <h3>Neurology<br>Department</h3>
      </div>

      <div class="dept-card" style="background-image: url('images/general1.jpg');">
        <div class="overlay"></div>
        <h3>General<br>Consultation</h3>
      </div>

    </div>

    <!-- RIGHT ARROW -->
    <button class="dept-arrow right" onclick="scrollDept(1)">&#10095;</button>

  </div>
</section>




<section class="ph-services-section">
  <div class="ph-services-container">

    <!-- MAIN HEADING -->
    <div class="ph-services-header">
      <h2>Services We Provide</h2>
      <p>Comprehensive healthcare services delivered with care and excellence, tailored to meet every patient’s unique needs.<br>
       Our specialized treatments and emergency care ensure the highest quality of health and well-being for all</p>
    </div>

    <!-- SERVICES GRID -->
    <div class="ph-services-grid">

      <!-- CARD 1 -->
      <div class="ph-service-card">
        <div class="ph-service-image">
          <img src="images/cardiology.jpg" alt="Cardiology Care">
         
        </div>
        <h3>Cardiology Care</h3>
        <p>Advanced heart care services with modern diagnostics and expert cardiologists.</p>
        <a href="service1.php" class="ph-read-more">Read More</a>
      </div>

      <!-- CARD 2 -->
      <div class="ph-service-card">
        <div class="ph-service-image">
          <img src="images/pediatric.jpg" alt="Pediatric Services">
          
        </div>
        <h3>Pediatric Services</h3>
        <p>Compassionate medical care for infants, children, and adolescents.</p>
        <a href="service2.php" class="ph-read-more">Read More</a>
      </div>

      <!-- CARD 3 -->
      <div class="ph-service-card">
        <div class="ph-service-image">
          <img src="images/gynecology.jpg" alt="Gynecology Care">
          
        </div>
        <h3>Gynecology Care</h3>
        <p>Complete women’s health services with personalized medical attention.</p>
        <a href="service4.php" class="ph-read-more">Read More</a>
      </div>

      <!-- CARD 4 -->
      <div class="ph-service-card">
        <div class="ph-service-image">
          <img src="images/emergency.jpg" alt="Emergency Checkups">
         
        </div>
        <h3>Emergency Checkups</h3>
        <p>24/7 emergency care with rapid response and expert medical support.</p>
        <a href="service3.php" class="ph-read-more">Read More</a>
      </div>

      <!-- CARD 5 -->
      <div class="ph-service-card">
        <div class="ph-service-image">
          <img src="images/neurology.jpg" alt="Neurology Treatment">
          
        </div>
        <h3>Neurology Treatment</h3>
        <p>Specialized treatment for neurological disorders using advanced technology.</p>
        <a href="service5.php" class="ph-read-more">Read More</a>
      </div>

      <!-- CARD 6 -->
      <div class="ph-service-card">
        <div class="ph-service-image">
          <img src="images/general1.jpg" alt="General Consultation">
         
        </div>
        <h3>General Consultation</h3>
        <p>Professional medical consultations for routine and preventive healthcare.</p>
        <a href="service6.php" class="ph-read-more">Read More</a>
      </div>

    </div>
  </div>
</section>




<!-- TREATMENT PROJECTS SECTION -->
<section class="treatment-projects-section">
  <div class="container">
    <!-- Section Heading -->
    <div class="projects-header">
      <h2>Our Treatment Projects</h2>
      <p>Explore our specialized treatment projects designed for your health and<br>
         See how our expert care transforms lives through specialized treatments.</p>
    </div>

    <!-- Projects Row -->
    <div class="projects-row">
      <!-- Project 1 -->
      <div class="project-card">
        <a href="project1.php" class="project-link">
          <img src="images/treat1.jpg" alt="Project 1">
          <div class="overlay">
            <span class="project-name">Surgical heart bypass</span>
            
          </div>
        </a>
      </div>

      <!-- Project 2 -->
      <div class="project-card">
        <a href="project2.php" class="project-link">
          <img src="images/cpr.jpg" alt="Project 2">
          <div class="overlay">
            <span class="project-name">Cardiopulmonary Resuscitation</span>
          </div>
        </a>
      </div>

      <!-- Project 3 -->
      <div class="project-card">
        <a href="project3.php" class="project-link">
          <img src="images/neurosur1.jpg" alt="Project 3">
          <div class="overlay">
            <span class="project-name">Spinal cord Decompression surgery</span>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>




<section class="experts-section">
  <div class="experts-container">

    <!-- Heading -->
    <div class="experts-header">
      <span>MEET OUR SPECIALISTS</span>
      <h2>Introduce You to Our Experts</h2>
      <p>
        Our team of experienced doctors are committed to delivering
        personalized, compassionate, and advanced healthcare services
        for every patient.
      </p>
    </div>

    <!-- Cards -->
    <div class="experts-grid">

      <!-- Doctor 1 -->
      <div class="expert-card">
        <div class="expert-img">
          
          <img src="images/doctor1.jpg" alt="Cardiologist">
        </div>
        <div class="expert-content">
          <h3>Dr. Emily Carter</h3>
          <span>General Physician</span>
          <p>Dedicated to preventive care and complete family healthcare</p>
        </div>
      </div>

      <!-- Doctor 2 -->
      <div class="expert-card">
        <div class="expert-img">
          <img src="images/doctor2.jpg" alt="Gynecologist">
        </div>
        <div class="expert-content">
          <h3>Dr. Daniel Wilson</h3>
          <span>Cardiologist</span>
          <p>Specialized in advanced cardiac care and life-saving heart procedures.</p>
        </div>
      </div>

      <!-- Doctor 3 -->
      <div class="expert-card">
        <div class="expert-img">
          <img src="images/doctor3.jpg" alt="Neurologist">
        </div>
        <div class="expert-content">
          <h3>Dr. Sophia Lee</h3>
          <span>Pediatrician</span>
          <p>Providing gentle, comprehensive healthcare for children of all ages.</p>
        </div>
      </div>

      <!-- Doctor 4 -->
      <div class="expert-card">
        <div class="expert-img">
          <img src="images/doct4.jpg" alt="Pediatrician">
        </div>
        <div class="expert-content">
          <h3>Dr. Arjun Kumar</h3>
          <span>Neurologist</span>
          <p>Focused on brain, spine, and nervous system disorders.</p>
        </div>
      </div>

      <!-- Doctor 5 -->
      <div class="expert-card">
        <div class="expert-img">
          <img src="images/doctr5.jpg" alt="Orthopedic">
        </div>
        <div class="expert-content">
          <h3>Dr. Rahul Varma</h3>
          <span>Emergency checkups</span>
          <p>Provides rapid emergency checkups with accurate assessment and timely treatment.</p>
        </div>
      </div>

      <!-- Doctor 6 -->
      <div class="expert-card">
        <div class="expert-img">
          <img src="images/doctr6.jpg" alt="General Physician">
        </div>
        <div class="expert-content">
          <h3>Dr. Neha Sharma</h3>
          <span>Gynecologist</span>
          <p>Expert in women’s health, maternity care, and reproductive wellness.</p>
        </div>
      </div>

    </div>
  </div>
</section>



<section class="facilities-section">
  <div class="facilities-container">

    <!-- HEADING -->
    <div class="facilities-header">
      <span>HAVE A LOOK AT</span>
      <h2>Our Facilities & Services</h2>
    </div>

    <!-- IMAGE GRID -->
    <div class="facilities-grid">

      <div class="facility-card">
        <img src="images/equipment.jpg" alt="">
        
      </div>

      <div class="facility-card">
        <img src="images/facility21.jpg" alt="">
        
      </div>

      <div class="facility-card tall">
        <img src="images/facility3.jpg" alt="">
        
      </div>

      <div class="facility-card wide">
        <img src="images/facility4.jpg" alt="">
        
      </div>

      <div class="facility-card">
        <img src="images/facility5.jpg" alt="">
       
      </div>
      <div class="facility-card">
        <img src="images/facility6.jpg" alt="">
       
      </div>
      <div class="facility-card">
        <img src="images/facility9.jpg" alt="">
       
      </div>
      <div class="facility-card">
        <img src="images/facility8.jpg" alt="">
       
      </div>
      <div class="facility-card">
        <img src="images/facility7.jpg" alt="">
        
       
      </div>

    </div>
  </div>
</section>

<!-- LIGHTBOX -->
<div class="lightbox" id="lightbox">
  <span class="close">&times;</span>
  <img id="lightbox-img">
</div>



 

 
<script>


  const container = document.getElementById("deptContainer");

  function scrollDept(direction) {
    const cardWidth = 260; // card + gap approx
    const maxScroll = container.scrollWidth - container.clientWidth;

    if (direction === 1) {
      // RIGHT arrow
      if (container.scrollLeft >= maxScroll - 10) {
        container.scrollLeft = 0; // 🔁 go to first
      } else {
        container.scrollLeft += cardWidth;
      }
    } else {
      // LEFT arrow
      if (container.scrollLeft <= 0) {
        container.scrollLeft = maxScroll; // 🔁 go to last
      } else {
        container.scrollLeft -= cardWidth;
      }
    }
  }





 
   const popup = document.getElementById("imagePopup");
  const popupImg = document.getElementById("popupImg");
  const closeBtn = document.querySelector(".popup-close");

  document.addEventListener("click", function(e) {
    if (e.target.classList.contains("open-popup")) {
      const imgSrc = e.target.closest(".facility-card").querySelector("img").src;
      popupImg.src = imgSrc;
      popup.style.display = "flex";
    }
  });

  closeBtn.onclick = () => popup.style.display = "none";

  popup.onclick = (e) => {
    if (e.target !== popupImg) {
      popup.style.display = "none";
    }
  };





  



  </script>



<?php
include 'footer.php'; // include footer
?>
</body>
</html>
