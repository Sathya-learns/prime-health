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


/* =========================
   EASY CUSTOMIZATION AREA
========================= */
:root {
  --overlay-color: rgba(214, 233, 247, 0.35); /* overlay color */
  --heading-size: 52px;
  --subheading-size: 22px;
  --para-size: 16px;
  --card-height: 260px;
  --card-radius: 16px;
}

/* RESET */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Segoe UI", sans-serif;
}
.card {
  display: block;
}
/* HERO SECTION */
.cardio-hero {
  position: relative;
  min-height: 100vh;
  background: url("images/heroine1.jpg") center/cover no-repeat;
  display: flex;
  align-items: center;
}

.overlay {
  position: absolute;
  inset: 0;
  background: var(--overlay-color);
  pointer-events: none;   /* ⭐ THIS LINE */
}

/* CONTAINER */
.hero-container {
  position: relative;
  max-width: 1300px;
  margin: auto;
  padding: 60px 20px;
  display: grid;
  grid-template-columns: 1.1fr 1fr;
  gap: 50px;
  color: #fff;
}

/* LEFT CONTENT */
.hero-left .tagline {
  font-size: 13px;
  letter-spacing: 2px;
  opacity: 0.8;
}

.hero-left h1 {
  font-size: var(--heading-size);
  line-height: 1.15;
  margin: 15px 0;
}

.hero-left h1 span {
  color: #fff;
}

.hero-left p {
  font-size: var(--para-size);
  max-width: 500px;
  opacity: 0.9;
  margin: 20px 0 30px;
}

/* SOCIAL ICONS */
.social-icons {
  display: flex;
  gap: 15px;
}

.social-icons a {
  width: 48px;
  height: 48px;
  border-radius: 50%;
  border: 1px solid rgba(255,255,255,0.4);
  display: grid;
  place-items: center;
  color: #fff;
  font-size: 18px;
  transition: 0.3s;
}

.social-icons a:hover {
  background: #0066ff;
  border-color: #0066ff;
  transform: translateY(-3px);
}

/* RIGHT CARDS */
.hero-right {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 25px;
}

.card {
  height: var(--card-height);
  
  background: #fff;
  color: #0a2540;
  padding: 25px;
  box-shadow: 0 15px 40px rgba(0,0,0,0.15);
  transition: 0.35s;
}

/* TEXT CARD */
.text-card {
  text-decoration: none;
}

.text-card h3 {
  font-size: var(--subheading-size);
  margin-bottom: 8px;
}


/* FORCE stars color */
.text-card .stars {
  color: #0066ff !important;
  font-size: 18px;
}

/* CONFIRM hover */
.card:hover {
  transform: translateY(-12px);
  box-shadow: 0 35px 80px rgba(0,0,0,0.35);
}

.text-card p {
  font-size: 15px;
  color: #555;
}

/* IMAGE CARD */
.image-card {
  padding: 0;
  overflow: hidden;
}

.image-card img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

/* HOVER EFFECT */
.card:hover {
  transform: translateY(-8px);
  box-shadow: 0 25px 60px rgba(0,0,0,0.25);
}

/* RESPONSIVE */
@media (max-width: 992px) {
  .hero-container {
    grid-template-columns: 1fr;
  }
}


    /* ===== BANNER VARIABLES (EASY TO CHANGE) ===== */
:root {
  --banner-height: 450px;                 /* 🔧 change banner height */
  --overlay-color: rgba(0, 0, 0, 0.6);    /* 🔧 overlay color + transparency */
}

/* ===== PROJECT BANNER ===== */
.project-banner {
  width: 100%;
  height: var(--banner-height);
  background: url("images/bannernew.jpg") center/cover no-repeat;
  position: relative;
}

/* ===== OVERLAY ===== */
.banner-overlay {
  width: 100%;
  height: 100%;
  background: var(--overlay-color);
  display: flex;
  align-items: center;
  justify-content: center;
}

/* ===== CONTENT ===== */
.banner-content {
 position: absolute;

  /* 🔧 MOVE CONTROLS */
  top: 50%;        /* up/down */
  left: 35%;       /* left/right */
  transform: translate(-50%, -50%);

  text-align: center;
  color: #ffffff;
  max-width: 900px;
  padding: 20px;
}

.banner-content h1 {
  font-size: 25px;
  font-weight: 700;
  letter-spacing: 1px;
  margin-bottom: 15px;
  text-transform: uppercase;
}

.banner-content h1::after {
  content: "";
  width: 80px;
  height: 4px;
  background: #0066ff;
  display: block;
  margin: 15px auto 0;
  border-radius: 5px;
}

.banner-content p {
  font-size: 10px;
  line-height: 1.8;
  color: #f1f1f1;
}
/* ===== BREADCRUMB ===== */
.breadcrumb {
  margin: 15px 0 20px;
  font-size: 15px;
 justify-content: center;   
}

.breadcrumb a {
  color: #cfe4ff;
  text-decoration: none;
  font-weight: 500;
  transition: 0.3s;
}

.breadcrumb a:hover {
  color: #ffffff;
  text-decoration: underline;
}

.breadcrumb span {
  margin: 0 8px;
  color: #9fc5ff;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 768px) {
  .banner-content h1 {
    font-size: 32px;
  }

  .banner-content p {
    font-size: 16px;
  }
}





/* GLOBAL */
body {
  margin: 0;
  font-family: "Poppins", sans-serif;
  background: #D6E9F7;
}
/* SECTION */
.project-section {
  padding: 110px 0;
}

/* WRAPPER */
.project-wrapper {
  max-width: 1400px;
  margin: auto;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 90px;
  align-items: center;
  padding: 0 40px;
}

/* REVERSE LAYOUT */
.project-wrapper.reverse {
  grid-template-columns: 1fr 1fr;
}

/* IMAGE */
.project-image {
  overflow: hidden;
  
}

.project-image img {
  width: 100%;
  height: 520px;
  object-fit: cover;
  transition: transform 0.6s ease;
}

/* IMAGE HOVER */
.project-image:hover img {
  transform: scale(1.08);
}

/* CONTENT */
.project-content h1 {
  font-size: 40px;
  font-weight: 700;
  color: #0b3a6e;
  margin-bottom: 30px;
}

.project-content p {
  font-size: 18px;
  line-height: 1.8;
  color: #445b73;
  max-width: 560px;
  margin-bottom: 40px;
}

/* BUTTON */
/* BUTTON BASE */
.project-btn {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  padding: 16px 46px;
  border-radius: 60px;
  background: linear-gradient(135deg, #0066ff, #004fc4);
  color: #ffffff;
  text-decoration: none;
  font-weight: 600;
  font-size: 16px;
  letter-spacing: 0.4px;
  position: relative;
  overflow: hidden;
  transition: all 0.4s ease;
  box-shadow: 0 12px 25px rgba(0, 102, 255, 0.35);
}

/* SHINE LAYER */
.project-btn::before {
  content: "";
  position: absolute;
  top: 0;
  left: -75%;
  width: 50%;
  height: 100%;
  background: linear-gradient(
    120deg,
    transparent,
    rgba(255, 255, 255, 0.45),
    transparent
  );
  transform: skewX(-25deg);
}

/* HOVER EFFECT */
.project-btn:hover {
  transform: translateY(-5px) scale(1.03);
  box-shadow: 0 25px 55px rgba(0, 102, 255, 0.55);
}

/* SHINE MOVE */
.project-btn:hover::before {
  left: 130%;
  transition: left 0.7s ease;
}

/* CLICK (ACTIVE) FEEL */
.project-btn:active {
  transform: translateY(-1px) scale(0.98);
  box-shadow: 0 12px 25px rgba(0, 102, 255, 0.4);
}

/* RESPONSIVE */
@media (max-width: 992px) {
  .project-wrapper {
    grid-template-columns: 1fr;
    gap: 60px;
  }

  .project-content h1 {
    font-size: 40px;
  }

  .project-image img {
    height: 420px;
  }
}




.testimonials-section {
  background: #D6E9F7;
  padding: 120px 0;
}

.testimonials-container {
  max-width: 1400px; /* 🔧 change width here */
  margin: auto;
  padding: 0 40px;
}

.testimonials-header {
  text-align: center;
  margin-bottom: 70px;
}

.testimonials-header span {
  letter-spacing: 2px;
  font-size: 13px;
  color: #0b3a6e;
}

.testimonials-header h2 {
  font-size: 52px;
  color: #0b3a6e;
  margin-top: 12px;
}

/* GRID */
.testimonials-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 40px; /* 🔧 card gap */
}

/* CARD */
.testimonial-card {
  background: #fff;
  border: 2px solid #0066ff;
  border-radius: 22px;
  padding: 40px 32px;
  transition: all 0.45s ease;
  transform: translateY(40px);
  opacity: 0;
}

/* SLIDE ANIMATION */
.testimonial-card.show {
  transform: translateY(0);
  opacity: 1;
}

/* HOVER */
.testimonial-card:hover {
  background: #ffffff;
  box-shadow: 0 35px 80px rgba(0, 0, 0, 0.15);
}

/* STARS */
.stars {
  color: #0066ff;
  font-size: 20px;
  margin-bottom: 20px;
}

/* TEXT */
.testimonial-card p {
  font-size: 16px;
  line-height: 1.7;
  color: #1d2f45;
  margin-bottom: 35px;
}

/* PATIENT */
.patient-info {
  display: flex;
  align-items: center;
  gap: 14px;
}

.patient-info img {
  width: 52px;
  height: 52px;
  border-radius: 50%;
  object-fit: cover;
}

.patient-info h4 {
  margin: 0;
  font-size: 16px;
  color: #0b3a6e;
}

.patient-info span {
  font-size: 14px;
  color: #6b7c93;
}

/* RESPONSIVE */
@media (max-width: 1100px) {
  .testimonials-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 600px) {
  .testimonials-grid {
    grid-template-columns: 1fr;
  }
}





  </style>
</head>
<body>




<!-- ===== PROJECT BANNER ===== -->
<section class="project-banner">
  <div class="banner-overlay">
    <div class="banner-content">
      <h1>Advanced Cardiology<br> Treatments</h1>
       <!-- Breadcrumb -->
  <div class="breadcrumb">
    <a href="index.php">Home</a>
    <span>/</span>
    <a href="services.php">Our Services</a>
  </div>
    </div>
  </div>
</section>




    <section class="project-section">
  <div class="project-wrapper">

    <!-- LEFT IMAGE -->
    <div class="project-image">
      <img src="images/treat2.jpg" alt="Surgical Heart Bypass">
    </div>

    <!-- RIGHT CONTENT -->
    <div class="project-content">
      <h1>Surgical Heart Bypass</h1>

      <p>
      Surgical heart bypass is a life-saving cardiac procedure that improves blood
  flow to the heart by creating an alternate pathway around blocked or narrowed
  coronary arteries. This advanced surgery helps reduce chest pain, lowers the
  risk of heart attack, and significantly improves overall heart function.
  Our experienced cardiac surgeons use state-of-the-art techniques to ensure
  safe recovery, faster rehabilitation, and long-term cardiovascular health
  for patients with complex heart conditions.
      </p>

      <a href="project4.php" class="project-btn">
        View Details
      </a>
    </div>

  </div>
</section>


<section class="project-section">
  <div class="project-wrapper reverse">

    <!-- LEFT CONTENT -->
    <div class="project-content">
      <h1>Angioplasty & Stent Placement</h1>

      <p>
       Angioplasty and stent placement is a minimally invasive heart procedure used
       to open blocked or narrowed blood vessels and restore healthy blood flow.
       A small balloon is used to widen the artery, followed by placing a stent to
       keep it open. This procedure helps relieve symptoms, improves circulation,
       and reduces the risk of future cardiac complications.
      </p>

      <a href="project4.php" class="project-btn">
        Explore Details
      </a>
    </div>

    <!-- RIGHT IMAGE -->
    <div class="project-image">
      <img src="images/clinic5.jpg" alt="Angioplasty & Stent Placement">
    </div>

  </div>
</section>



<section class="cardio-hero">
  <div class="overlay"></div>

  <div class="hero-container">

    <!-- LEFT CONTENT -->
    <div class="hero-left">
      <span class="tagline">ADVANCED CARDIOLOGY CARE</span>

      <h1>
        Angioplasty &<br>
        <span>Stent Placement</span><br>
        Surgical Heart Bypass
      </h1>

      <p>
        Our cardiology department delivers advanced heart care using
        cutting-edge technology and expert specialists. We focus on
        precision-driven procedures ensuring faster recovery and
        long-term heart health.
      </p>

      <!-- SOCIAL ICONS -->
      <div class="social-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-linkedin-in"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
      </div>
    </div>

    <!-- RIGHT CARDS -->
    <div class="hero-right">

      <!-- CARD 1 (CLICKABLE) -->
      <a href="project4.php" class="card text-card">
        <h3>Surgical Heart Bypass</h3>
        <div class="stars">★★★★★</div>
        <p>Advanced bypass procedures ensuring improved blood flow and heart efficiency.</p>
      </a>

      <!-- CARD 2 IMAGE -->
      <div class="card image-card">
        <img src="images/clinic11.jpg" alt="">
      </div>

      <!-- CARD 3 IMAGE -->
      <div class="card image-card">
        <img src="images/clinic4.jpg" alt="">
      </div>

      <!-- CARD 4 (CLICKABLE) -->
      <a href="project5.php" class="card text-card">
        <h3>Angioplasty & Stent Placement</h3>
        <div class="stars">★★★★★</div>
        <p>Minimally invasive procedures to restore healthy blood circulation.</p>
      </a>

    </div>
  </div>
</section>





<section class="testimonials-section">
  <div class="testimonials-container">

    <!-- HEADING -->
    <div class="testimonials-header">
      <span>COMPASSIONATE CARE FOR EVERY PATIENT</span>
      <h2>Patient stories</h2>
    </div>

    <!-- CARDS -->
    <div class="testimonials-grid">

      <!-- CARD 1 -->
      <div class="testimonial-card">
        <div class="stars">★★★★★</div>
        <p>
          The care I received for my heart condition was exceptional.
          The cardiology team ensured comfort, clarity, and confidence
          throughout my treatment journey.
        </p>

        <div class="patient-info">
          <img src="images/review2.png" alt="">
          <div>
            <h4>Brian Edwards</h4>
            <span>Cardiology Patient</span>
          </div>
        </div>
      </div>

      <!-- CARD 2 -->
      <div class="testimonial-card">
        <div class="stars">★★★★★</div>
        <p>
          The gynecology team supported me with compassion and professionalism.
          Every procedure was explained clearly and handled with care.
        </p>

        <div class="patient-info">
          <img src="images/patient2.jpg" alt="">
          <div>
            <h4>Sophia Williams</h4>
            <span>Gynecology Patient</span>
          </div>
        </div>
      </div>

      <!-- CARD 3 -->
      <div class="testimonial-card">
        <div class="stars">★★★★★</div>
        <p>
          After my neurological diagnosis, the doctors guided me patiently.
          Their expertise and reassurance helped me recover confidently.
        </p>

        <div class="patient-info">
          <img src="images/review3.png" alt="">
          <div>
            <h4>Linda Harris</h4>
            <span>Neurology Patient</span>
          </div>
        </div>
      </div>

      <!-- CARD 4 -->
      <div class="testimonial-card">
        <div class="stars">★★★★★</div>
        <p>
          From consultation to follow-up, the general care team was attentive.
          I felt safe, heard, and genuinely cared for throughout my visit.
        </p>

        <div class="patient-info">
          <img src="images/review1.png" alt="">
          <div>
            <h4>James Miller</h4>
            <span>General Consultation</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<script>
  const cards = document.querySelectorAll(".testimonial-card");

  window.addEventListener("load", () => {
    cards.forEach((card, i) => {
      setTimeout(() => {
        card.classList.add("show");
      }, i * 200); // slow stagger effect
    });
  });
</script>




<?php
include 'footer.php'; // include footer
?>
</body>
</html>
