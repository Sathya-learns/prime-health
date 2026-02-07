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
:root {
  --banner-height: 500px;          /* 🔥 height change pannalaam */
  --banner-overlay: rgba(0,0,0,0.55);
  --heading-size: 35px;            /* 🔥 heading size */
  --breadcrumb-size: 15px;         /* 🔥 breadcrumb text size */
  --text-color: #ffffff;
}

/* BANNER */
.inner-banner {
  position: relative;
  width: 100%;
  height: var(--banner-height);
  background: url("images/imageback1.jpg") center/cover no-repeat;
  display: flex;
  align-items: center;
  justify-content: center;
}

/* BLACK TRANSPARENT OVERLAY */
.banner-overlay {
  position: absolute;
  inset: 0;
  background: var(--banner-overlay);
}

/* CONTENT */
.banner-content {
  position: relative;
  text-align: center;
  color: var(--text-color);
  z-index: 2;
  padding: 0 20px;
}

.banner-content h1 {
  font-size: var(--heading-size);
  font-weight: 600;
  margin-bottom: 12px;
}

/* BREADCRUMB */
.breadcrumb {
  font-size: var(--breadcrumb-size);
}

.breadcrumb a {
  color: #ffffff;
  text-decoration: none;
  transition: color 0.3s ease;
}

.breadcrumb a:hover {
  color: #00aaff;
}

.breadcrumb span {
  margin: 0 8px;
  opacity: 0.8;
}




.cardiology-section {
  padding: 70px 0;
  background-color: #d6e9f7;
}

.container {
  width: 90%;
  max-width: 1200px;
  margin: auto;
}

.section-tag {
  color: #1aa6b7;
  font-weight: 600;
  margin-bottom: 10px;
  display: inline-block;
}

.section-title {
  font-size: 42px;
  font-weight: 700;
  margin-bottom: 20px;
  color: #222;
}

.section-desc {
  font-size: 17px;
  line-height: 1.8;
  color: #555;
  max-width: 900px;
  margin-bottom: 45px;
}

.image-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 30px;
}

.image-box {
  overflow: hidden;
  border-radius: 16px;
  box-shadow: 0 12px 30px rgba(0,0,0,0.12);
}

.image-box img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  transition: transform 0.4s ease;
}

.image-box:hover img {
  transform: scale(1.05);
}

/* Responsive */
@media (max-width: 768px) {
  .section-title {
    font-size: 32px;
  }

  .image-grid {
    grid-template-columns: 1fr;
  }
}


body {
  margin: 0;
  font-family: "Segoe UI", sans-serif;
  background-color: #d6e9f7;
}

.page-wrapper {
  padding: 50px 0;
}

.content-grid {
  width: 92%;
  max-width: 1300px;
  margin: auto;
  display: grid;
  grid-template-columns: 2fr 1fr;
  gap: 40px;
  align-items: stretch;
}

/* LEFT */
.left-content h1 {
  font-size: 42px;
  color: #003366;
  margin-bottom: 15px;
}

.intro-text {
  font-size: 17px;
  line-height: 1.8;
  color: #333;
  max-width: 90%;
  margin-bottom: 30px;
}

.big-image {
  height: 480px;
  width: 90%;
  border-radius: 18px;
  overflow: hidden;
  box-shadow: 0 15px 35px rgba(0,0,0,0.2);
}

.big-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.big-image img {
  transition: transform 0.4s ease;
}

.big-image:hover img {
  transform: scale(1.06);
}

.big-image {
  transition: box-shadow 0.4s ease;
}

.big-image:hover {
  box-shadow: 0 20px 45px rgba(0,0,0,0.25);
}

/* RIGHT */
.right-sidebar {
  display: flex;
  flex-direction: column;
  gap: 35px;
}

/* SEARCH */
.search-box {
  display: flex;
  border: 2px solid #0066ff;
  border-radius: 6px;
  overflow: hidden;
   width: 90%;  
  background: #fff;
}

.search-box input {
  flex: 1;
  padding: 14px;
  border: none;
  outline: none;
  font-size: 15px;
}

.search-box button {
  padding: 0 18px;
  background: #0066ff;
  color: #fff;
  border: none;
  cursor: pointer;
  font-size: 18px;
}
.search-box button {
  transition: all 0.3s ease;
}

.search-box button:hover {
  background-color: #004bcc;
  transform: translateX(3px);
  box-shadow: 0 6px 15px rgba(0,102,255,0.4);
}


.search-box button:hover {
  background: #004bcc;
  transform: translateX(4px);
  box-shadow: 0 6px 18px rgba(0,102,255,0.45);
}

.read-more:hover {
  background-color: #004bcc;
  transform: translateY(-3px);
  box-shadow: 0 10px 25px rgba(0,102,255,0.4);
}

/* ABOUT */
.about-box {
  background: #ffffff;
  padding: 25px;
  border-radius: 12px;
  width: 90%;  
  box-shadow: 0 10px 25px rgba(0,0,0,0.12);
}

.about-box h3 {
  margin-bottom: 15px;
  font-size: 22px;
  color: #003366;
}

.about-box img {
  width: 100%;
  height: 300px;
  object-fit: cover;
  border-radius: 10px;
  margin-bottom: 15px;
}

.about-box p {
  font-size: 15px;
  line-height: 1.7;
  color: #444;
  margin-bottom: 15px;
}

.read-more {
  display: inline-block;
  padding: 10px 18px;
  background: #0066ff;
  color: #fff;
  text-decoration: none;
  border-radius: 20px;
  font-size: 14px;
}
.read-more {
  transition: all 0.3s ease;
}

.read-more:hover {
  background-color: #004bcc;
  transform: translateY(-3px);
  box-shadow: 0 10px 25px rgba(0,102,255,0.4);
}

/* RESPONSIVE */
@media (max-width: 900px) {
  .content-grid {
    grid-template-columns: 1fr;
  }

  .big-image {
    height: 360px;
  }
}


body {
  margin: 0;
  font-family: "Segoe UI", sans-serif;
  background: #d6e9f7;
}

.bypass-info-section {
  padding: 60px 0;
}

.info-grid {
  width: 92%;
  max-width: 1300px;
  margin: auto;
  display: grid;
  grid-template-columns: 2fr 1fr;
  gap: 45px;
  align-items: stretch;
}

/* LEFT CONTENT */
.info-content h1 {
  font-size: 40px;
  color: #003366;
  margin-bottom: 18px;
}

.intro {
  font-size: 17px;
  line-height: 1.8;
  color: #333;
  margin-bottom: 25px;
}

/* BLUE ROUND BULLET POINTS */
.bypass-points {
  list-style: none;
  padding: 0;
  margin-bottom: 25px;
}

.bypass-points li {
  position: relative;
  padding-left: 28px;
  margin-bottom: 14px;
  font-size: 16px;
  line-height: 1.7;
  color: #222;
}

.bypass-points li::before {
  content: "";
  position: absolute;
  left: 0;
  top: 9px;
  width: 10px;
  height: 10px;
  background: #0066ff;
  border-radius: 50%;
}

.extra-text {
  font-size: 16px;
  line-height: 1.8;
  color: #444;
}

/* RIGHT IMAGES */
.info-images {
  display: grid;
  grid-template-rows: 1fr 1fr;
  gap: 25px;
}

.img-box {
  height: 260px;
  width: 85%;              /* 👈 width reduce (75%–90% try) */
  margin: 0 auto;          /* center align */
  border-radius: 16px;
  overflow: hidden;
  box-shadow: 0 12px 28px rgba(0,0,0,0.15);
  transition: box-shadow 0.4s ease;
}


.img-box img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.4s ease;
}

/* IMAGE HOVER EFFECT */
.img-box:hover img {
  transform: scale(1.08);
}

.img-box:hover {
  box-shadow: 0 18px 40px rgba(0,0,0,0.25);
}

/* RESPONSIVE */
@media (max-width: 900px) {
  .info-grid {
    grid-template-columns: 1fr;
  }

  .info-images {
    grid-template-rows: auto;
  }

  .img-box {
    height: 220px;
  }
}

.team-section {
  padding: 90px 8%;
  background: #d6e9f7;
  font-family: 'Segoe UI', sans-serif;
}

.team-container {
  display: grid;
  grid-template-columns: 1.1fr 1fr 1fr;
  gap: 60px;
  align-items: start;
}

/* LEFT CONTENT */
.team-content .small-title {
  font-size: 13px;
  letter-spacing: 1.5px;
  font-weight: 600;
  color: #1a4ed8;
}

.team-content h2 {
  font-size: 52px;
  font-weight: 700;
  margin: 20px 0;
  color: #0f172a;
}

.team-content .subtitle {
  font-size: 20px;
  color: #334155;
  margin-bottom: 18px;
}

.team-content .desc {
  font-size: 16px;
  line-height: 1.7;
  color: #475569;
  max-width: 420px;
}

/* TEAM CARD */
.team-card {
  text-align: left;
}

.img-wrapper {
  height: 420px;
  border-radius: 18px;
  overflow: hidden;
  box-shadow: 0 18px 40px rgba(0,0,0,0.12);
  transition: transform 0.4s ease, box-shadow 0.4s ease;
}

.img-wrapper img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

/* HOVER EFFECT */
.team-card:hover .img-wrapper {
  transform: translateY(-10px);
  box-shadow: 0 25px 55px rgba(0,0,0,0.18);
}

/* TEXT BELOW IMAGE */
.team-card h4 {
  margin-top: 20px;
  font-size: 20px;
  font-weight: 600;
  color: #0f172a;
}

.team-card span {
  font-size: 15px;
  color: #64748b;
}

/* RESPONSIVE */
@media (max-width: 1024px) {
  .team-container {
    grid-template-columns: 1fr;
  }

  .img-wrapper {
    height: 360px;
  }
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Segoe UI", sans-serif;
}

body {
  background: #d6e9f7;
}

.stats-section {
  min-height: 100vh;
  background: #d6e9f7;
  display: flex;
  align-items: center;
  justify-content: center;
}
.stats-container {
  position: relative;
  max-width: 1200px;
  width: 100%;
  min-height: 520px; 
  padding: 60px 40px;

  background: url("images/imageback1.jpg") center/cover no-repeat;
  border-radius: 22px;
  box-shadow: 0 30px 70px rgba(0,0,0,0.25);

  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 40px;
  overflow: hidden;
}
.stats-container::before {
  content: "";
  position: absolute;
  inset: 0;
  background: rgba(0,0,0,0.45);
  z-index: 1;
}
.stat-card {
  position: relative;
  z-index: 2;
  text-align: center;
  color: #fff;
}




.stats-container {
  position: relative;
  z-index: 2;
  max-width: 1200px;
  width: 100%;
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 40px;
  padding: 40px;
}

.stat-card {
  text-align: center;
  color: #fff;
}

.circle {
  width: 140px;
  height: 140px;
  border: 2px solid rgba(255,255,255,0.8);
  border-radius: 50%;
  margin: 0 auto 20px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.circle span {
  font-size: 36px;
  font-weight: 600;
}

.stat-card h3 {
  font-size: 22px;
  margin-bottom: 12px;
}

.stat-card p {
  font-size: 15px;
  line-height: 1.6;
  opacity: 0.9;
}

  </style>
</head>
<body>

<!-- BANNER SECTION -->
<section class="inner-banner">
  <div class="banner-overlay"></div>

  <div class="banner-content">
    <h1>Emergency checkups</h1>

    <div class="breadcrumb">
      <a href="index.php">Home</a>
      <span>/</span>
      <a href="about.php">About</a>
    </div>
  </div>
</section>

<section class="cardiology-section">
  <div class="container">

    <span class="section-tag">Emergency Care</span>

    <h2 class="section-title">Advanced Emergency care & Treatments</h2>

    <p class="section-desc">
     Our emergency department provides rapid and reliable medical checkups using
advanced monitoring systems and immediate diagnostic support. From sudden
illnesses to critical medical conditions, our emergency care team focuses on
quick assessment, timely intervention, and accurate treatment decisions. We
are committed to delivering prompt medical attention that ensures patient
safety, clinical efficiency, and effective stabilization during emergencies.
    </p>

    <div class="image-grid">
      <div class="image-box">
        <img src="images/medical.jpg" alt="Cardiology Treatment Room">
      </div>

      <div class="image-box">
        <img src="images/medical1.jpg" alt="Advanced Heart Care Equipment">
      </div>
    </div>

  </div>
</section>

<section class="page-wrapper">
  <div class="content-grid">

    <!-- LEFT SIDE -->
    <div class="left-content">
      <h1>Cardiopulmonary Resuscitation</h1>

      <p class="intro-text">
        Cardiopulmonary resuscitation is an emergency life-saving procedure
        performed when the heart or breathing stops suddenly. Immediate CPR
        helps maintain blood circulation and oxygen delivery to vital organs
        until advanced medical care is provided.
      </p>

      <div class="big-image">
        <img src="images/cpr2.jpg" alt="Heart Bypass Surgery">
      </div>
    </div>

    <!-- RIGHT SIDE -->
    <aside class="right-sidebar">

      <!-- SEARCH -->
       <div class="search-box">
  <input type="text" id="searchInput" placeholder="Search..."
  onkeydown="if(event.key==='Enter'){searchPage()}">
  <button onclick="searchPage()">➜</button>
</div>

      <!-- ABOUT US -->
      <div class="about-box">
        <h3>About Us</h3>

        <img src="images/clinic8.jpg" alt="About Hospital">

        <p>
          We provide advanced cardiac care with a patient-first approach.
          Our experienced cardiologists and surgeons are committed to
          delivering excellence through innovation and compassion.
        </p>

        <a href="about.php" class="read-more">Read More</a>
      </div>

    </aside>

  </div>
</section>


<section class="bypass-info-section">
  <div class="info-grid">

    <!-- LEFT CONTENT -->
    <div class="info-content">
      <h1>Cardiopulmonary Resuscitation</h1>

      <p class="intro">
       Cardiopulmonary resuscitation is a critical emergency procedure used to
        restore partial flow of oxygenated blood to the brain and heart during
        cardiac arrest situations until normal heart rhythm is restored.
      </p>

      <ul class="bypass-points">
         <li>CPR maintains blood circulation and oxygen supply to vital organs.</li>
        <li>Immediate response significantly increases survival and recovery chances.</li>
        <li>Advanced life support techniques improve patient stabilization.</li>
        <li>Timely CPR reduces the risk of brain damage and organ failure.</li>
        <li>Continuous monitoring ensures effective heart rhythm restoration.</li>
        <li>Our emergency team follows international resuscitation protocols.</li>
        <li>Post-resuscitation care supports neurological and cardiac recovery.</li>
      </ul>

      <p class="extra-text">
         Our emergency response team is trained in advanced cardiac life support
        and rapid intervention protocols to deliver immediate, reliable, and
        life-saving care during critical situations.
      </p>
    </div>

    <!-- RIGHT IMAGES -->
    <div class="info-images">
      <div class="img-box">
        <img src="images/cardiologyy.jpg" alt="Heart Bypass Surgery">
      </div>

      <div class="img-box">
        <img src="images/emergencyy.jpg" alt="Cardiac Surgery Care">
      </div>
    </div>

  </div>
</section>

<section class="page-wrapper">
  <div class="content-grid">

    <!-- LEFT SIDE -->
    <div class="left-content">
      <h1>Acute Medical Interventions</h1>

      <p class="intro-text">
        Acute medical interventions are critical emergency procedures designed to
stabilize life-threatening conditions and restore normal functioning of vital
organs through rapid assessment and immediate medical treatment.
</p>

      <div class="big-image">
        <img src="images/emergency1.jpg" alt="Heart Bypass Surgery">
      </div>
    </div>

    <!-- RIGHT SIDE -->
    <aside class="right-sidebar">

      <!-- SEARCH -->
       <div class="search-box">
  <input type="text" id="searchInput" placeholder="Search..."
  onkeydown="if(event.key==='Enter'){searchPage()}">
  <button onclick="searchPage()">➜</button>
</div>

      <!-- ABOUT US -->
      <div class="about-box">
        <h3>About Us</h3>

        <img src="images/clinic8.jpg" alt="About Hospital">

        <p>
          We provide advanced cardiac care with a patient-first approach.
          Our experienced cardiologists and surgeons are committed to
          delivering excellence through innovation and compassion.
        </p>

        <a href="about.php" class="read-more">Read More</a>
      </div>

    </aside>

  </div>
</section>

<section class="bypass-info-section">
  <div class="info-grid">

    <!-- LEFT CONTENT -->
    <div class="info-content">
      <h1>Acute Medical Interventions</h1>

      <p class="intro">
         Acute medical interventions focus on rapid assessment, immediate
        treatment, and continuous monitoring to stabilize critically ill
        patients and prevent further complications.
      </p>

      <ul class="bypass-points">
      <li>Rapid diagnosis ensures timely and effective emergency treatment.</li>
        <li>Immediate interventions stabilize vital organ functions.</li>
        <li>Advanced monitoring supports accurate clinical decision making.</li>
        <li>Critical care procedures reduce complications and mortality risk.</li>
        <li>Multidisciplinary teams manage complex medical emergencies.</li>
        <li>Modern equipment enables precise and controlled interventions.</li>
        <li>Post-intervention care ensures recovery and long-term stability.</li>
      </ul>

      <p class="extra-text">
         Our acute care services follow evidence-based emergency protocols,
        supported by experienced physicians, modern intensive care units,
        and continuous patient monitoring systems.
      </p>
    </div>

    <!-- RIGHT IMAGES -->
    <div class="info-images">
      <div class="img-box">
        <img src="images/clinicc6.jpg" alt="Heart Bypass Surgery">
      </div>

      <div class="img-box">
        <img src="images/blogg3.jpg" alt="Cardiac Surgery Care">
      </div>
    </div>

  </div>
</section>

<section class="team-section">
  <div class="team-container">

    <!-- LEFT CONTENT COLUMN -->
    <div class="team-content">
      <span class="small-title">DISCOVER OUR HEALTHCARE EXPERTS</span>

      <h2>Meet our<br>executive staff</h2>

      <p class="subtitle">
        Our team brings care and passion to every patient
      </p>

      <p class="desc">
        Our leadership team combines decades of medical excellence,
        compassionate care, and innovative healthcare solutions to
        deliver the highest standards of patient-centered treatment.
      </p>
    </div>

    <!-- TEAM MEMBER 1 -->
    <div class="team-card">
      <div class="img-wrapper">
        <img src="images/clinic10.jpg" alt="Dr Emily Carter">
      </div>
      <h4>Dr. Emily Carter</h4>
      <span>Chief Medical Officer</span>
    </div>

    <!-- TEAM MEMBER 2 -->
    <div class="team-card">
      <div class="img-wrapper">
        <img src="images/clinic9.jpg" alt="Michael Rodriguez">
      </div>
      <h4>Michael Rodriguez</h4>
      <span>Director of Nursing</span>
    </div>

  </div>
</section>

<section class="stats-section">
  <div class="overlay"></div>

  <div class="stats-container">

    <div class="stat-card">
      <div class="circle" data-percent="55">
        <span class="count">0%</span>
      </div>
      <h3>Analytics</h3>
      <p>
        Ut wisi enim ad minim veniam, quis laore nostrud exerci tation ullam
        corporis suscipit.
      </p>
    </div>

    <div class="stat-card">
      <div class="circle" data-percent="73">
        <span class="count">0%</span>
      </div>
      <h3>Diagnostics</h3>
      <p>
        Ut wisi enim ad minim veniam, quis laore nostrud exerci tation ullam
        corporis suscipit.
      </p>
    </div>

    <div class="stat-card">
      <div class="circle" data-percent="92">
        <span class="count">0%</span>
      </div>
      <h3>Treatment</h3>
      <p>
        Ut wisi enim ad minim veniam, quis laore nostrud exerci tation ullam
        corporis suscipit.
      </p>
    </div>

    <div class="stat-card">
      <div class="circle" data-percent="67">
        <span class="count">0%</span>
      </div>
      <h3>Testing</h3>
      <p>
        Ut wisi enim ad minim veniam, quis laore nostrud exerci tation ullam
        corporis suscipit.
      </p>
    </div>

  </div>
</section>

<script src="script.js"></script>




<script src="search.js"></script>
<script>
function searchPage() {
  let query = document.getElementById("searchInput").value
    .toLowerCase()
    .trim();

  if (query === "") {
    alert("Please enter a search term");
    return;
  }

  const pages = {
    "home": "index.php",
    "about": "about.php",
    "cardiology": "cardiology.php",
    "heart bypass": "surgical-heart-bypass.php",
    "bypass": "surgical-heart-bypass.php",
    "surgery": "surgical-heart-bypass.php",
    "contact": "contact.php"
  };

  if (pages[query]) {
    window.location.href = pages[query];
  } else {
    alert("Page not found. Try: home, about, cardiology, bypass");
  }
}


  const counters = document.querySelectorAll(".circle");

const animateCounters = () => {
  counters.forEach(circle => {
    const target = +circle.getAttribute("data-percent");
    const countEl = circle.querySelector(".count");
    let current = 0;

    const speed = 25; // slow smooth animation

    const updateCount = () => {
      if (current < target) {
        current++;
        countEl.textContent = current + "%";
        setTimeout(updateCount, speed);
      } else {
        countEl.textContent = target + "%";
      }
    };

    updateCount();
  });
};

window.addEventListener("load", animateCounters);
</script>
<?php
include 'footer.php'; // include footer
?>
</body>
</html>