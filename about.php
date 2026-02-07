<?php
include 'header.php'; // This includes your navbar
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PrimeHealth - About</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

  <!-- About Page CSS -->
  <style>

    /* ABOUT PAGE PURE IMAGE BANNER */
/* ===== ABOUT BANNER ===== */
.about-banner {
  position: relative;
  width: 100%;
  height: 83vh; /* banner height – change panna mudiyum */
  background: url("images/canva2.png") no-repeat center center/cover;
  overflow: hidden;
}

/* navy blue transparent overlay */
.about-banner::before {
  content: "";
  position: absolute;
  inset: 0;
  background: rgba(0, 40, 120, 0.4); /* opacity change panna mudiyum */
  z-index: 1;
}

/* content position */
.about-banner-content {
  position: absolute;
  left: 69%;
  top: 35%;          /* up/down control */
  transform: translate(-50%, -50%);
  z-index: 5;
  text-align: center;
}

/* ===== TITLE ===== */
.about-banner-title {
  font-family: 'Montserrat', sans-serif; /* stylish & professional */
  font-size: 35px;        /* size control */
  font-weight: 600;
  color: #ffffff;        /* text color */
  letter-spacing: 1px;   /* stylish spacing */

  /* mild navy shadow for clarity */
  text-shadow: 2px 2px 8px rgba(10, 25, 80, 0.45);
}




    /*About page -------------------------*/
    body {
      margin: 0;
      font-family: "Poppins", sans-serif;
      background: #D6E9F7;
      color: #4A4A4A;
    }

    h1, h2, h3 {
      color: #0B2C59;
      font-weight: 700;
    }

    .about-hero {
      padding: 80px 10%;
      text-align: center;
    }

    .about-hero h1 {
      font-size: 42px;
      margin-bottom: 10px;
    }
    h2 {
  color: #0066FF;   /* Light blue (change as you like) */
  font-weight: 600;
}

    .about-hero p {
      margin: 6px auto;
      font-size: 18px;
      line-height: 1.5;
      text-align: center;
      max-width: 700px;
    }
    .hero {
      padding: 80px 10%;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 40px;
    }

    .hero-text h1 { font-size: 42px; line-height: 1.2; }
    .hero-text p { font-size: 18px; margin: 16px 0 24px; }
    .hero img { width: 45%; height: 400px; }

    .about-main { font-size: 32px; margin-bottom: 10px; }
    .about-extra { font-size: 18px; margin-bottom: 12px; }
    .btn-primary {
  background: #0066FF;
  color: white;
  padding: 12px 28px;
  border-radius: 6px;
  border: none;
  text-decoration: none;   /* ✔ underline remove */
  font-weight: 600;
  display: inline-block;
  transition: 0.3s;
  cursor: pointer;
}

/* ✨ Thin shine line */
.btn-primary::before {
  content: "";
  position: absolute;
  top: 0;
  left: -120%;
  width: 20%;              /* 👈 thinner shine (previously 80%) */
  height: 100%;
  background: linear-gradient(
    120deg,
    transparent,
    rgba(255,255,255,0.65),
    transparent
  );
  transform: skewX(-25deg);
  transition: 0.6s ease;
}

.btn-primary:hover::before {
  left: 120%;              /* 👈 moves only inside button */
}

.btn-primary:hover {
  transform: scale(1.02);  /* slight zoom only */
}




/* ==============================
   RESPONSIVE – TABLET
============================== */
@media (max-width: 992px) {

  .hero {
    padding: 60px 8%;
    flex-direction: column;
    text-align: center;
  }

  .hero-text {
    max-width: 100%;
  }

  .hero-text h1 {
    font-size: 36px;
  }

  .hero-text p {
    font-size: 17px;
  }

  .hero img {
    width: 80%;
    height: auto;
    margin-top: 30px;
  }

  .about-main {
    font-size: 28px;
  }
}


/* ==============================
   RESPONSIVE – MOBILE
============================== */
@media (max-width: 576px) {

  .hero {
    padding: 50px 6%;
    gap: 25px;
  }

  .hero-text h1 {
    font-size: 30px;
    line-height: 1.3;
  }

  .about-main {
    font-size: 24px;
  }

  .hero-text p {
    font-size: 16px;
  }

  .about-extra {
    font-size: 16px;
  }

  .hero img {
    width: 100%;
    height: auto;
    border-radius: 14px;
  }

  .btn-primary {
    padding: 10px 22px;
    font-size: 15px;
  }
}

/* ===========================================
   SIDE SPACE FIX - ADD THIS TO YOUR EXISTING CSS
   WITHOUT CHANGING YOUR ORIGINAL STYLE
=========================================== */

/* FIX 1: Remove horizontal overflow */
html {
  overflow-x: hidden;
  width: 100%;
}

body {
  width: 100%;
  max-width: 100%;
  overflow-x: hidden;
  position: relative;
}

/* FIX 2: Force full width for sections */
.about-banner {
  width: 100vw;
  position: relative;
  left: 50%;
  right: 50%;
  margin-left: -50vw;
  margin-right: -50vw;
}

.hero {
  width: 100%;
  padding-left: 10%;
  padding-right: 10%;
  box-sizing: border-box;
}

/* FIX 3: Fix for any container elements */
.container, .wrapper, .main-container {
  max-width: 100%;
  overflow: hidden;
}

/* FIX 4: Check if navbar is causing the issue */
.navbar, header, nav {
  max-width: 100vw !important;
  width: 100% !important;
  left: 0 !important;
  right: 0 !important;
  padding-left: 0 !important;
  padding-right: 0 !important;
  margin-left: 0 !important;
  margin-right: 0 !important;
}

/* FIX 5: Ensure images don't cause overflow */
img {
  max-width: 100%;
  height: auto;
}

/* FIX 6: Specific media query fixes */
@media (max-width: 992px) {
  .hero {
    width: 100%;
    padding-left: 8%;
    padding-right: 8%;
  }
}

@media (max-width: 768px) {
  .hero {
    width: 100%;
    padding-left: 5%;
    padding-right: 5%;
  }
  
  .about-banner {
    height: 70vh;
  }
}

@media (max-width: 576px) {
  .hero {
    width: 100%;
    padding-left: 4%;
    padding-right: 4%;
  }
  
  .about-banner {
    height: 60vh;
  }
}

/* ===========================================
   DEBUG CODE (Optional - remove after fixing)
=========================================== */
/*
* {
  outline: 1px solid rgba(255,0,0,0.1) !important;
}

body > * {
  background-color: rgba(0,255,0,0.05) !important;
}
*/







/* SECTION */
.why-choose {
  background: #D6E7F9;
  padding: 90px 0 110px;
  font-family: "Poppins", sans-serif;
}

/* WRAPPER */
.why-wrapper {
  max-width: 1450px;
  margin: auto;
  display: grid;
  grid-template-columns: 1fr 1.1fr;
  gap: 0px;
  align-items: center;
  padding: 0 80px;
}

/* LEFT IMAGE (PNG – NO CONTAINER LOOK) */
.why-image img {
  width: 100%;
  height: 560px;
  object-fit: contain; /* IMPORTANT for PNG */
  display: block;
}

/* RIGHT CONTENT */
.why-content h2 {
  text-align: center;
  font-size: 40px;
  font-weight: 600;
  color: #0066FF;
  margin-bottom: 40px;
}

/* FEATURES GRID */
.why-features {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 40px 50px;
}

/* FEATURE ITEM (NO CARD LOOK BY DEFAULT) */
.feature-box {
  display: flex;
  gap: 20px;
  padding: 22px 24px;
  border-radius: 22px;
  transition: all 0.35s ease;
}

/* HOVER → WHITE TILE */
.feature-box:hover {
  background: #ffffff;
  box-shadow: 0 30px 70px rgba(0, 102, 255, 0.25);
  transform: translateY(-6px);
}

/* ICON */
.feature-icon {
  min-width: 48px;
  height: 48px;
  border-radius: 50%;
  background: #e8f1ff;
  color: #0066FF;
  font-size: 20px;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.35s ease;
}

/* ICON HOVER */
.feature-box:hover .feature-icon {
  background: #0066FF;
  color: #ffffff;
}

/* TEXT */
.feature-box h3 {
  font-size: 22px;
  font-weight: 600;
  color: #0b2C59;
  margin-bottom: 10px;
  transition: color 0.35s ease;
}

.feature-box p {
  font-size: 16px;
  line-height: 1.7;
  color: #445b73;
  transition: color 0.35s ease;
}

/* TEXT COLOR ON HOVER */
.feature-box:hover h3 {
  color: #0b3a6e;
}

.feature-box:hover p {
  color: #4a4a4a;
}

/* ===========================================
   MOBILE-ONLY RESPONSIVE FIXES
   (Only affects screens 768px and below)
=========================================== */

@media (max-width: 768px) {
  /* SECTION PADDING FOR MOBILE */
  .why-choose {
    padding: 60px 0 80px !important;
  }
  
  /* WRAPPER FOR MOBILE */
  .why-wrapper {
    grid-template-columns: 1fr !important;
    gap: 50px !important;
    padding: 0 25px !important;
  }
  
  /* IMAGE FOR MOBILE */
  .why-image img {
    height: 300px !important;
    object-fit: contain !important;
  }
  
  /* HEADING FOR MOBILE */
  .why-content h2 {
    font-size: 32px !important;
    margin-bottom: 30px !important;
    text-align: center !important;
  }
  
  /* FEATURES GRID FOR MOBILE */
  .why-features {
    grid-template-columns: 1fr !important;
    gap: 25px !important;
  }
  
  /* FEATURE BOX FOR MOBILE */
  .feature-box {
    padding: 20px !important;
    gap: 15px !important;
    border-radius: 18px !important;
  }
  
  /* FEATURE TITLE FOR MOBILE */
  .feature-box h3 {
    font-size: 20px !important;
    margin-bottom: 8px !important;
  }
  
  /* FEATURE TEXT FOR MOBILE */
  .feature-box p {
    font-size: 15px !important;
    line-height: 1.6 !important;
  }
  
  /* ICON FOR MOBILE */
  .feature-icon {
    min-width: 44px !important;
    height: 44px !important;
    font-size: 18px !important;
  }
}

   


    /* OUR VALUES SECTION */
.our-values-section {
  padding: 90px 20px;
  background: #D6E7F9;
}

.our-values-container {
  max-width: 1250px;
  margin: auto;
}

/* TITLE */
.our-values-title {
  text-align: center;
  font-size: 36px;
  color: #0b2c4d;
  margin-bottom: 55px; /* REDUCED SPACE */
  font-weight: 600;
}

/* GRID */
.our-values-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 45px;
}

/* CARD */
.value-card {
  background: #ffffff;
  padding: 42px 34px;
  border-radius: 26px;
  box-shadow: 0 18px 40px rgba(0,0,0,0.08);
  text-align: center;
  position: relative;
  transition: box-shadow 0.35s ease;
}


/* INNER HIGHLIGHT (DEFAULT WHITE) */
.value-highlight {
  background: #ffffff;
  padding: 14px 26px;
  border-radius: 40px;
  margin-bottom: 26px;
  transition: background 0.35s ease;
  border: 1px solid #e3edf7;
}

/* HEADING */
.value-highlight h3 {
  margin: 0;
  font-size: 21px;
  color: #0b2c4d;
  font-weight: 600;
  transition: color 0.35s ease;
}

/* TEXT */
.value-card p {
  font-size: 15.5px;
  line-height: 1.7;
  color: #5a6a7a;
  margin: 0;
}

/* HOVER – INSIDE CARD ONLY */
.value-card:hover .value-highlight {
  background: #8bbcf0;
  border-color: transparent;
}

.value-card:hover .value-highlight h3 {
  color: #ffffff;
}

/* CARD SHADOW ON HOVER (NO SCALE) */
.value-card:hover {
  box-shadow: 0 26px 55px rgba(0, 91, 170, 0.18);
}

/* 4TH & 5TH CARD ALIGNMENT (LIKE IMAGE) */
.our-values-grid .value-card:nth-child(4),
.our-values-grid .value-card:nth-child(5) {
  padding: 38px 34px;
}

/* RESPONSIVE */
@media (max-width: 1024px) {
  .our-values-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 600px) {
  .our-values-grid {
    grid-template-columns: 1fr;
  }

  .our-values-title {
    font-size: 30px;
    margin-bottom: 45px;
  }
}











/* SECTION */
.testimonials-section {
  padding: 80px 0;
  background: #D6E9F7;
  font-family: 'Poppins';
}

/* CONTAINER */
.testimonials-container {
  max-width: 1200px;
  margin: auto;
  display: flex;
  gap: 40px;
}

/* LEFT */
.testimonials-left {
  width: 65%;
}

.testimonials-left h2 {
  font-size: 32px;
  margin-bottom: 10px;
}

.subtitle {
  color: #555;
  margin-bottom: 40px;
}

/* CARDS */
.testimonial-cards {
  display: flex;
  gap: 30px;
}

.testimonial-card {
  background: #fff;
  padding: 30px;
 /* BLUE SHADE BORDER */
  border: 1.5px solid rgba(0, 102, 255, 0.25);

  box-shadow: 0 15px 40px rgba(0,0,0,0.08);
  transition: transform .3s ease, box-shadow .3s ease, border .3s ease;
 
}

.testimonial-card:hover {
  transform: translateY(-10px);
}

/* HOVER – PURE #0066FF */
.testimonial-card:hover {
  transform: translateY(-10px);

  /* border in exact color */
  border-color: #0066FF;

  /* blue glow shadow */
  box-shadow:
    0 25px 55px rgba(0, 102, 255, 0.35),
    0 0 0 1px #0066FF;
}

.profile img {
  width: 80px;
  height: 80px;
  border-radius: 50%;
  object-fit: cover;
  margin-bottom: 20px;
}

.review {
  font-size: 15px;
  color: #333;
  margin-bottom: 20px;
}

.testimonial-card h4 {
  margin: 0;
  font-size: 16px;
}

.role {
  font-size: 13px;
  color: #888;
}

/* RIGHT */
.testimonials-right {
  width: 35%;
  background: linear-gradient(135deg, #0066FF, #0066FF);
  padding: 40px;
  
  color: #fff;
}

.testimonials-right h3 {
  font-size: 24px;
}

.line {
  width: 50px;
  height: 3px;
  background: #fff;
  display: block;
  margin: 15px 0;
}

.kid-sub {
  font-size: 14px;
  margin-bottom: 20px;
}

.kid-text {
  font-size: 15px;
  line-height: 1.7;
  margin-bottom: 30px;
}

.read-more {
  padding: 12px 25px;
  border: 2px solid #fff;
  color: #fff;
  text-decoration: none;
  border-radius: 30px;
  font-size: 14px;
  transition: all .3s ease;
}

.read-more:hover {
  background: #fff;
  color: #008080;
}

/* RESPONSIVE */
@media (max-width: 900px) {
  .testimonials-container {
    flex-direction: column;
  }

  .testimonials-left,
  .testimonials-right {
    width: 100%;
  }

  .testimonial-cards {
    flex-direction: column;
  }
}

   /* ===========================================
   SIMPLIFIED RESPONSIVE
=========================================== */

/* ==============================
   FORCE TABLET LAYOUT FIX
   (768px – 1023px)
============================== */
@media (min-width: 768px) and (max-width: 1023px) {

  /* FORCE SIDE-BY-SIDE */
  .testimonials-container {
    flex-direction: row !important;
    align-items: stretch;
  }

  /* LEFT = WHITE CARDS */
  .testimonials-left {
    width: 62% !important;
  }

  /* RIGHT = BLUE BOX */
  .testimonials-right {
    width: 38% !important;
    margin-top: 0;
  }

  /* 2 CARDS GRID */
  .testimonial-cards {
    flex-direction: row !important;
    flex-wrap: wrap;
    gap: 20px;
  }

  .testimonial-card {
    width: calc(50% - 10px);
  }
}

@media (min-width: 768px) and (max-width: 1023px) {
  .testimonials-container {
    padding-right: 20px;
  }
}


/* MOBILE (768px and below) */
@media (max-width: 768px) {
  .testimonials-section {
    padding: 60px 0;
  }
  
  .testimonial-cards {
    flex-direction: column;
  }
  
  .testimonial-card {
    width: 100%;
  }
}

/* SMALL MOBILE (576px and below) */
@media (max-width: 576px) {
  .testimonials-section {
    padding: 50px 0;
  }
  
  .testimonials-left h2 {
    font-size: 26px;
  }
  
  .testimonial-card {
    padding: 25px;
  }
  
  .testimonials-right {
    padding: 30px;
  }
}

/* Add these lines to your current code */

/* TO THIS: */
.testimonials-left {
  padding: 0 40px; /* Equal padding on both sides */
}

.testimonial-card {
  max-width: 350px; /* Line 2 - limits card width */
  width: 100%; /* Line 3 - makes it responsive */
}

  </style>
</head>

<body>

<section class="about-banner">
  <div class="about-banner-content">
    <h1 class="about-banner-title">About Us</h1>
  </div>
</section>


<!-- HERO ------------------------------- -->
  <section class="hero">
    <div class="hero-text">
      <h2 class="about-main">About Us</h2>
      <h1>Quality Healthcare<br>For You and Your Family</h1>
      <p class="about-extra">We are committed to providing reliable, modern, and compassionate care for every patient.</p>
      <p>PrimeHealth provides trusted, modern, and affordable<br>medical services with experienced professionals.</p>
      <a href="#" class="btn-primary">Explore Services</a>
    </div>
    <img src="images/about.jpg" alt="Healthcare Service" class="hero-img">
  </section>




  <section class="why-choose">
  <div class="why-wrapper">

    <!-- LEFT IMAGE -->
    <div class="why-image">
      <img src="images/whychoose.png" alt="Why Choose PrimeHealth">
    </div>

    <!-- RIGHT CONTENT -->
    <div class="why-content">

      <h2>Why Choose Us</h2>

      <div class="why-features">

        <div class="feature-box">
          <div class="feature-icon">⚙</div>
          <div>
            <h3>Experienced Medical Professionals</h3>
            <p>
              Our team includes experienced doctors, nurses, and healthcare
              professionals dedicated to delivering quality patient care.
            </p>
          </div>
        </div>

        <div class="feature-box">
          <div class="feature-icon">⚙</div>
          <div>
            <h3>Comprehensive Services</h3>
            <p>
              We provide a wide range of healthcare services from preventive
              care to specialized medical treatments.
            </p>
          </div>
        </div>

        <div class="feature-box">
          <div class="feature-icon">⚙</div>
          <div>
            <h3>Patient-Centered Approach</h3>
            <p>
              Every patient is treated as an individual with personalized
              treatment plans and compassionate care.
            </p>
          </div>
        </div>

        <div class="feature-box">
          <div class="feature-icon">⚙</div>
          <div>
            <h3>Modern Facilities</h3>
            <p>
              Our healthcare center is equipped with advanced medical
              technology for accurate diagnosis and effective treatment.
            </p>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>




  <section class="our-values-section">
  <div class="our-values-container">

    <h2 class="our-values-title">Our Values</h2>

    <div class="our-values-grid">

      <div class="value-card">
        <div class="value-highlight">
          <h3>Compassion</h3>
        </div>
        <p>
          We understand that seeking medical care can be a stressful
          experience, and we strive to create a supportive and caring
          environment for every patient.
        </p>
      </div>

      <div class="value-card">
        <div class="value-highlight">
          <h3>Excellence</h3>
        </div>
        <p>
          We are committed to delivering high-quality medical care
          through continuous improvement, knowledge, and best practices.
        </p>
      </div>

      <div class="value-card active">
        <div class="value-highlight">
          <h3>Integrity</h3>
        </div>
        <p>
          We practice medicine with honesty and transparency, always
          placing our patients’ interests first and providing trusted
          solutions.
        </p>
      </div>

      <div class="value-card">
        <div class="value-highlight">
          <h3>Respect</h3>
        </div>
        <p>
          We treat every individual with dignity, respect, and empathy,
          valuing diversity and personal care at all levels.
        </p>
      </div>

      <div class="value-card">
        <div class="value-highlight">
          <h3>Teamwork</h3>
        </div>
        <p>
          We believe strong collaboration among healthcare professionals
          leads to better decisions and improved patient outcomes.
        </p>
      </div>
      <div class="value-card">
        <div class="value-highlight">
          <h3>Patient-Centered Care</h3>
        </div>
        <p>
        We focus on understanding each patient’s unique needs and concerns,
        delivering personalized care that respects comfort, dignity, and
        individual health goals.
       </p>
      </div>


    </div>
  </div>
</section>











<section class="testimonials-section">
  <div class="testimonials-container">

    <!-- LEFT SIDE -->
    <div class="testimonials-left">
      <h2>PATIENT TESTIMONIALS</h2>
      <p class="subtitle">
        Real experiences shared by our patients reflect the quality, compassion, and care we deliver every day.
      </p>

      <div class="testimonial-cards">

        <!-- Testimonial 1 -->
        <div class="testimonial-card">
          <div class="profile">
            <img src="images/patient4.jpg" alt="Paula Smith">
          </div>
          <p class="review">
            “From the very first consultation, the medical team made me feel comfortable and confident.
            The care I received was exceptional.”
          </p>
          <h4>Paula Smith</h4>
          <span class="role">Verified Patient</span>
        </div>

        <!-- Testimonial 2 -->
        <div class="testimonial-card">
          <div class="profile">
            <img src="images/patient2.jpg" alt="Ann Clark">
          </div>
          <p class="review">
            “The doctors and nurses showed genuine concern for my recovery.
            Their professionalism made a huge difference in my healing journey.”
          </p>
          <h4>Ann Clark</h4>
          <span class="role">Verified Patient</span>
        </div>

      </div>
    </div>

    <!-- RIGHT SIDE -->
    <div class="testimonials-right">
      <h3>A KID’S THOUGHT</h3>
      <span class="line"></span>
      <p class="kid-sub">What do our youngest patients say?</p>

      <p class="kid-text">
        “The doctors were kind and gentle, and they explained everything in a way I could understand.
        I felt safe and happy during my visit.The doctors were friendly and made me feel calm during my visit.
        They explained everything clearly, and I felt safe the whole time”
      </p>

      
    </div>

  </div>
</section>


  


<script>
let currentIndex = 0;
const track = document.getElementById("abtTrack");
const totalSlides = track.children.length;
const visibleSlides = 3;

function slideProjects(direction) {
  const maxIndex = totalSlides - visibleSlides;
  currentIndex += direction;

  if (currentIndex < 0) currentIndex = 0;
  if (currentIndex > maxIndex) currentIndex = maxIndex;

  const slideWidth = track.children[0].offsetWidth + 25;
  track.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
}
</script>

<?php
include 'footer.php'; // include footer
?>
</body>
</html>


