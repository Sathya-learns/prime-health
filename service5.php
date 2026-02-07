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

    
    /* ===== READ MORE BANNER VARIABLES ===== */
:root {
  --readmore-height: 450px;                          /* 🔧 banner height */
  --readmore-overlay: rgba(10, 30, 60, 0.7);         /* 🔧 navy blue overlay */
  --readmore-heading-color: #ffffff;                /* 🔧 heading text */
  --readmore-text-color: #e0e9f5;                    /* 🔧 paragraph text */
}

/* ===== READ MORE BANNER ===== */
.readmore-banner {
  width: 100%;
  height: var(--readmore-height);
  background: url("images/banner10.jpg") center/cover no-repeat;
  position: relative;
}

/* ===== OVERLAY ===== */
.readmore-overlay {
  width: 100%;
  height: 100%;
  background: var(--readmore-overlay);
  display: flex;
  align-items: center;
  justify-content: center;
}

/* ===== CONTENT ===== */
.readmore-content {
  text-align: center;
  max-width: 950px;
  padding: 20px;
}

.readmore-content h1 {
  font-size: 25px;
  color: var(--readmore-heading-color);
  font-weight: 700;
  letter-spacing: 1px;
  margin-bottom: 15px;
}

.readmore-content h1::after {
  content: "";
  width: 90px;
  height: 4px;
  background: #4da3ff;
  display: block;
  margin: 16px auto 0;
  border-radius: 4px;
}

.readmore-content p {
  font-size: 18px;
  line-height: 1.8;
  color: var(--readmore-text-color);
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
  .readmore-content h1 {
    font-size: 30px;
  }

  .readmore-content p {
    font-size: 16px;
  }
}

     .service-detail-section{
  background: linear-gradient( #d6e9f7 45%);
  padding:120px 0;
  position:relative;
  overflow:hidden;
}

.service-detail-container{
  max-width:1300px;
  margin:auto;
  display:grid;
  grid-template-columns: 1fr 1.2fr;
  gap:60px;
  align-items:center;
}

/* LEFT */

.service-detail-left img{
  width:100%;
  box-shadow:0 20px 40px rgba(0,0,0,0.15);
}

.service-name-box{
  background:#0066FF;
  color:#fff;
  text-align:center;
  padding:20px;
  font-size:22px;
  font-weight:700;
  border-radius:0 0 12px 12px;
}

/* RIGHT */
.service-detail-right h2{
  font-size:38px;
  color:#0a2540;
  margin-bottom:15px;
}

.service-intro{
  font-size:16.5px;
  color:#555;
  line-height:1.7;
  margin-bottom:30px;
}

/* CONTENT BOXES */
.service-box{
  background:#fff;
  padding:22px 26px;
  border-radius:12px;
  box-shadow:0 10px 30px rgba(0,0,0,0.08);
  margin-bottom:22px;
}

.service-box.highlight{
  background:#0066FF;
  color:#fff;
}

.service-box h4{
  font-size:20px;
  margin-bottom:10px;
}

.service-box ul{
  padding-left:18px;
}

.service-box ul li{
  margin-bottom:6px;
}

/* BUBBLES */
.bubble{
  position:absolute;
  border-radius:50%;
  background:rgba(0,102,255,0.12);
}

.b1{
  width:120px;
  height:120px;
  top:80px;
  left:60px;
}

.b2{
  width:90px;
  height:90px;
  bottom:100px;
  right:80px;
}




/* RESPONSIVE */
@media(max-width:992px){
  .service-detail-container{
    grid-template-columns:1fr;
  }
}

/* SECTION */
.service-prevention-section {
  background: #D6E9F7;
  padding: 100px 0;
  position: relative;
  overflow: hidden;
}

/* CONTAINER */
.service-prevention-container {
  max-width: 1250px;
  margin: auto;
  padding: 0 20px;
  display: grid;
  grid-template-columns: 1fr 1.2fr;
  gap: 80px;
  align-items: center;
}

/* LEFT SIDE */
.service-prevention-left {
  display: flex;
  flex-direction: column;
  gap: 30px;
}

/* UNIQUE CARD */
.prevention-card {
  background: #ffffff;
  padding: 30px 28px;
  border-radius: 24px 6px 24px 6px;
  box-shadow: 0 20px 45px rgba(0, 102, 255, 0.15);
  position: relative;
  cursor: pointer;
  transition: all 0.4s ease;
  border-left: 6px solid #0066ff;
}

/* HOVER EFFECT */
.prevention-card:hover {
  transform: translateX(12px);
  box-shadow: 0 30px 60px rgba(0, 102, 255, 0.35);
  border-left-color: #00b4d8;
}

/* CARD TEXT */
.prevention-card h3 {
  font-size: 22px;
  color: #003b8f;
  margin-bottom: 10px;
}

.prevention-card p {
  font-size: 15.5px;
  color: #444;
  line-height: 1.6;
}

/* RIGHT SIDE */
.service-prevention-right h2 {
  font-size: 34px;
  color: #003b8f;
  margin-bottom: 25px;
  text-align: left;
}

/* POINTS */
.prevention-points {
  list-style: none;
  padding: 0;
  margin-bottom: 35px;
}

.prevention-points li {
  font-size: 16px;
  color: #333;
  line-height: 1.8;
  margin-bottom: 14px;
  padding-left: 30px;
  position: relative;
}

/* ARROW */
.prevention-points li::before {
  content: "➜";
  position: absolute;
  left: 0;
  top: 0;
  color: #0066ff;
  font-size: 18px;
  font-weight: bold;
}

/* RESPONSIVE */
@media (max-width: 900px) {
  .service-prevention-container {
    grid-template-columns: 1fr;
    gap: 60px;
  }

  .service-prevention-right h2 {
    text-align: center;
  }

  .prevention-card {
    margin: 0 auto;
  }
}
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Segoe UI', sans-serif;
}

.about-section {
  padding: 80px 0;
  background: #d6e9f7;
}

.container {
  width: 90%;
  max-width: 1200px;
  margin: auto;
  display: flex;
  gap: 50px;
}

.left, .right {
  flex: 1;
}

.section-title {
  font-size: 28px;
  font-weight: 700;
  letter-spacing: 1px;
  color: #222;
}

.underline {
  display: block;
  width: 50px;
  height: 3px;
  background: #0077b6;
  margin: 10px 0 25px;
}

.intro-text {
  color: #666;
  line-height: 1.7;
  margin-bottom: 30px;
}

.image-row {
  display: flex;
  gap: 20px;
  margin-bottom: 25px;
}

.image-row img {
  flex: 1;
  max-width: 280px;    /* 👈 control size */
  height: 200px;
  object-fit: cover;
  border-radius: 10px;
}

.sub-title {
  font-size: 20px;
  margin-bottom: 10px;
  color: #222;
}

.service-text {
  color: #666;
  line-height: 1.7;
}

/* STATISTICS */
.skill {
  margin-bottom: 22px;
}

.skill-info {
  display: flex;
  justify-content: space-between;
  margin-bottom: 8px;
  font-weight: 600;
}

.progress {
  width: 100%;
  height: 14px;
  background: #e9eef3;
  border-radius: 20px;
  overflow: hidden;
}

.progress-bar {
  height: 100%;
  width: 0;
  background: linear-gradient(90deg, #0077b6, #00b4d8);
  border-radius: 20px;
  transition: width 1.8s ease-in-out;
}

/* Responsive */
@media (max-width: 900px) {
  .container {
    flex-direction: column;
  }
}
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Segoe UI', sans-serif;
}

.about-section {
  padding: 80px 0;
  background: #d6e9f7;
}

.container {
  width: 90%;
  max-width: 1200px;
  margin: auto;
  display: flex;
  gap: 50px;
}

.left, .right {
  flex: 1;
}

.section-title {
  font-size: 28px;
  font-weight: 700;
  letter-spacing: 1px;
  color: #222;
}

.underline {
  display: block;
  width: 50px;
  height: 3px;
  background: #0077b6;
  margin: 10px 0 25px;
}

.intro-text {
  color: #666;
  line-height: 1.7;
  margin-bottom: 30px;
}

.image-row {
  display: flex;
  gap: 20px;
  margin-bottom: 25px;
}

.image-row img {
  flex: 1;
  max-width: 280px;    /* 👈 control size */
  height: 200px;
  object-fit: cover;
  border-radius: 10px;
}

.sub-title {
  font-size: 20px;
  margin-bottom: 10px;
  color: #222;
}

.service-text {
  color: #666;
  line-height: 1.7;
}

/* STATISTICS */
.skill {
  margin-bottom: 22px;
}

.skill-info {
  display: flex;
  justify-content: space-between;
  margin-bottom: 8px;
  font-weight: 600;
}

.progress {
  width: 100%;
  height: 14px;
  background: #e9eef3;
  border-radius: 20px;
  overflow: hidden;
}

.progress-bar {
  height: 100%;
  width: 0;
  background: linear-gradient(90deg, #0077b6, #00b4d8);
  border-radius: 20px;
  transition: width 1.8s ease-in-out;
}

/* Responsive */
@media (max-width: 900px) {
  .container {
    flex-direction: column;
  }
}
/* =========================
   MOBILE VIEW (≤ 768px)
   ========================= */
@media (max-width: 768px) {

  .about-section {
    padding: 60px 0;
  }

  .container {
    flex-direction: column;   /* 👈 stack */
    gap: 30px;
  }

  .section-title {
    font-size: 24px;
  }

  .image-row {
    flex-direction: column;
    gap: 15px;
  }

  .image-row img {
    max-width: 100%;
    height: 200px;
  }
}
/* =========================
   TABLET VIEW (769px – 1024px)
   ========================= */
@media (max-width: 1024px) and (min-width: 769px) {

  .container {
    flex-direction: row;   /* 👈 IMPORTANT: NOT column */
    gap: 35px;
  }

  .section-title {
    font-size: 26px;
  }

  .image-row img {
    max-width: 240px;
    height: 180px;
  }
}


   </style>
   </head>
<body>

<!-- ===== READ MORE BANNER ===== -->
<section class="readmore-banner">
  <div class="readmore-overlay">
    <div class="readmore-content">
      <h1>Advance Neurology treatment</h1>
             <!-- Breadcrumb -->
  <div class="breadcrumb">
    <a href="index.php">Home</a>
    <span>/</span>
    <a href="services.php">Our Services</a>
  </div>
    </div>
  </div>
</section>



    <section class="service-detail-section">

  <div class="service-detail-container">

    <!-- LEFT IMAGE SIDE -->
    <div class="service-detail-left">
      <img src="images/neurology1.jpg" alt="Neurology Service">

      <div class="service-name-box">
        <h3>Neurology Care</h3>
      </div>
    </div>

    <!-- RIGHT CONTENT SIDE -->
    <div class="service-detail-right">

      <h2>Advanced Neurology Treatments</h2>
      <p class="service-intro">
        Our neurology department offers expert care for brain, spine and
        nervous system disorders using modern technology.
      </p>

      <div class="service-box">
        <h4><i class="icon-brain"></i> Treatments We Offer</h4>
        <ul>
          <li>Headache & Migraine Treatment</li>
          <li>Stroke Management</li>
          <li>Epilepsy Care</li>
          <li>Nerve Disorder Treatment</li>
        </ul>
      </div>

      <div class="service-box highlight">
        <h4><i class="icon-doctor"></i> Specialist Doctor</h4>
        <p>
          Dr. Robert Smith – Senior Neurologist  
          <br>12+ years experience in neurology care
        </p>
      </div>

      <div class="service-box">
        <h4><i class="icon-star"></i> Proven Success</h4>
        <p>
          Successfully treated <strong>6,500+ neurological patients</strong>
          with excellent outcomes.
        </p>
      </div>

    </div>

  </div>

  <span class="bubble b1"></span>
  <span class="bubble b2"></span>

</section>

<!-- Neurology Treatment Section -->
<section class="service-prevention-section">
  <div class="service-prevention-container">

    <!-- LEFT CARDS -->
    <div class="service-prevention-left">

      <div class="prevention-card">
        <h3>Early Diagnosis</h3>
        <p>Recognize neurological symptoms early for timely treatment and better outcomes.</p>
      </div>

      <div class="prevention-card">
        <h3>Healthy Lifestyle</h3>
        <p>Maintain proper sleep, nutrition, and exercise to support brain health.</p>
      </div>

      <div class="prevention-card">
        <h3>Stress Management</h3>
        <p>Practice mindfulness, meditation, and relaxation techniques to prevent neurological stress.</p>
      </div>

    </div>

    <!-- RIGHT CONTENT -->
    <div class="service-prevention-right">
      <h2>Preventive Measures for Neurology Care</h2>
      <ul class="prevention-points">
        <li>Maintain regular sleep schedule to support brain health daily</li>
        <li>Follow a balanced diet rich in nutrients for mental function</li>
        <li>Engage in cognitive exercises and memory stimulating activities</li>
        <li>Monitor blood pressure and sugar levels regularly for wellness</li>
        <li>Practice stress management using meditation and yoga techniques</li>
        <li>Avoid smoking and alcohol for better neurological health consistently</li>
        <li>Stay hydrated to support optimal brain function every day</li>
        <li>Regularly monitor medications and their impact on nervous system</li>
        <li>Consult neurologist for early signs of neurological disorders promptly</li>
        <li>Maintain social interactions to prevent mental fatigue and isolation</li>
        <li>Track emotional well-being and seek counseling if needed consistently</li>
      </ul>
    </div>

  </div>
</section>


<section class="about-section">
  <div class="container">

    <!-- LEFT SIDE -->
    <div class="left">
      <h2 class="section-title">WHO WE ARE</h2>
      <span class="underline"></span>

      <p class="intro-text">
        We are a trusted healthcare provider delivering compassionate, patient-centric
        medical services with advanced technology and expert doctors.
      </p>

      <div class="image-row">
        <img src="images/image1.jpg" alt="Doctor">
        <img src="images/image2.jpg" alt="Patient Care">
      </div>

      <h3 class="sub-title">Hospital Services</h3>
      <p class="service-text">
        Our hospital offers comprehensive medical services including diagnostics,
        specialized treatments, preventive care, and round-the-clock emergency support
        with a commitment to excellence.
      </p>
    </div>

    <!-- RIGHT SIDE -->
    <div class="right">
      <h2 class="section-title">OUR STATISTICS</h2>
      <span class="underline"></span>

      <p class="intro-text">
        Our expertise across medical departments reflects years of experience,
        innovation, and patient satisfaction.
      </p>

      <div class="skill">
        <div class="skill-info">
          <span>Dentistry</span><span>60%</span>
        </div>
        <div class="progress">
          <div class="progress-bar" data-progress="60"></div>
        </div>
      </div>

      <div class="skill">
        <div class="skill-info">
          <span>Dermatology</span><span>75%</span>
        </div>
        <div class="progress">
          <div class="progress-bar" data-progress="75"></div>
        </div>
      </div>

      <div class="skill">
        <div class="skill-info">
          <span>Cardiology</span><span>80%</span>
        </div>
        <div class="progress">
          <div class="progress-bar" data-progress="80"></div>
        </div>
      </div>

      <div class="skill">
        <div class="skill-info">
          <span>Gynecology</span><span>50%</span>
        </div>
        <div class="progress">
          <div class="progress-bar" data-progress="50"></div>
        </div>
      </div>

      <div class="skill">
        <div class="skill-info">
          <span>Health Care</span><span>95%</span>
        </div>
        <div class="progress">
          <div class="progress-bar" data-progress="95"></div>
        </div>
      </div>

    </div>

  </div>
</section>
<script src="script.js"></script>
<script>

const bars = document.querySelectorAll('.progress-bar');

const animateBars = () => {
  bars.forEach(bar => {
    const value = bar.getAttribute('data-progress');
    bar.style.width = value + '%';
  });
};

const section = document.querySelector('.about-section');

window.addEventListener('scroll', () => {
  const sectionTop = section.getBoundingClientRect().top;
  const screenHeight = window.innerHeight;

  if (sectionTop < screenHeight - 100) {
    animateBars();
  }
});
</script>

<?php
include 'footer.php'; // include footer
?>

</body>
</html>

