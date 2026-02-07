<?php
include 'header.php'; // include navbar
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PrimeHealth - Health Blog</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  
  <style>

  .blog-banner {
  position: relative;
  width: 100%;
  height: 83vh;  /* adjust height */
  background: url("images/canva15.png") no-repeat center center/cover;
  overflow: hidden;
  
}


.blog-banner {
  position: relative;
  width: 100%;
  height: 83vh;
  background: url("images/canva15.png") no-repeat center center/cover;
  overflow: hidden;
}

/* Tablet */
@media (max-width: 1024px) {
  .blog-banner {
    height: 70vh;
  }
}

/* Mobile */
@media (max-width: 768px) {
  .blog-banner {
    height: 55vh;
  }
}

/* Small Mobile */
@media (max-width: 576px) {
  .blog-banner {
    height: 45vh;
  }
}



    /* HEALTHBLOG PAGE CSS - EXACTLY YOUR ORIGINAL */

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

    .blog-section {
      text-align: center;
      padding: 40px 20px;
    }

    .blog-section h1 {
      font-size: 34px;
      color: #0B2C59;
      margin-bottom: 8px;
    }

    .blog-sub {
      color: #555;
      font-size: 16px;
      margin-bottom: 35px;
    }

    .blog-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr); /* keep original 2-column grid */
      gap: 25px;
      max-width: 1190px;
      margin: 0 auto;
    }

    .blog-card {
    background: #ffffff;
    padding: 12px 18px;
    border-radius: 12px;
    box-shadow: 0 3px 12px rgba(0,0,0,0.1);
    text-align: left;
    transition: transform 0.4s ease, box-shadow 0.4s ease, border-left-color 0.4s ease;
    border-left: 5px solid #0B2C59;
}

.blog-card:hover {
    transform: translateY(-6px) scale(1.02);
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    border-left-color: #00A8E8; /* subtle accent color on hover */
}


    .blog-card h3 {
      font-size: 20px;
      color: #0B2C59;
      margin-bottom: 8px;
    }

    .blog-card p {
      color: #555;
      font-size: 15px;
      margin-bottom: 12px;
    }

    @media(max-width: 900px) {
      .blog-grid {
        grid-template-columns: 1fr; /* responsive for mobile */
      }
    }

    /* Add this at the VERY END of your CSS */
html, body {
  margin: 0 !important;
  padding: 0 !important;
  width: 100% !important;
  overflow-x: hidden !important;
}

* {
  box-sizing: border-box !important;
}





/* HEALTH BLOG SECTION */
.health-blog-section {
  background: #D6E9F7;
  padding: 100px 0;
}

.health-blog-container {
  max-width: 1250px;
  margin: auto;
  padding: 0 20px;
}

/* HEADER */
.health-blog-header {
  text-align: center;
  margin-bottom: 80px;
}

.health-blog-header span {
  color: #0066FF;
  letter-spacing: 2px;
  font-weight: 600;
  font-size: 25px;
}

.health-blog-header h2 {
  font-size: 30px;
  color: #0A2540;
  margin-top: 10px;
}

/* GRID */
.health-blog-grid {
  display: grid;
  grid-template-columns: 1.2fr 1fr;
  gap: 60px;
  align-items: start;
}

/* LEFT */
.health-blog-left img {
  width: 690px;
  height: 360px;
  object-fit: cover;
}
/* LEFT IMAGE WITH SUBTLE HOVER EFFECT */
.health-blog-left img {
  width: 690px;
  height: 360px;
  object-fit: cover;
  transition: transform 0.4s ease, box-shadow 0.4s ease;
  border-radius: 10px; /* optional */
}

.health-blog-left img:hover {
  transform: scale(1.03); /* mild zoom */
  box-shadow: 0 0 15px rgba(0, 102, 255, 0.3); /* subtle glow */
}



.health-blog-left h3 {
  margin: 24px 0 10px;
  color: #0A2540;
  font-size: 26px;
}

.health-blog-left p {
  color: #4A4A4A;
  font-size: 16px;
  line-height: 1.6;
}

/* RIGHT */
.health-blog-right {
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.health-blog-card {
  display: flex;
  gap: 20px;
  align-items: center;
  background: #fff;
  padding: 19px;
  border: 1px solid #E3EAF2;
  transition: all 0.4s ease;
}

.health-blog-card img {
  width: 90px;
  height: 90px;
  object-fit: cover;
}

/* TEXT */
.health-blog-card h4 {
  color: #0A2540;
  font-size: 18px;
  margin-bottom: 6px;
}

.health-blog-card p {
  color: #4A4A4A;
  font-size: 15px;
  line-height: 1.5;
}

/* HOVER */
.health-blog-card:hover {
  box-shadow: 0 15px 40px rgba(0,0,0,0.12);
  transform: translateX(6px);
}

.blog-learn-more {
  display: inline-block;
  margin-top: 12px;
  font-size: 15px;
  font-weight: 600;
  color: #0066FF;
  text-decoration: none;
  position: relative;
  transition: color 0.3s ease;
}

/* UNDERLINE */
.blog-learn-more::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: -4px;
  width: 0%;
  height: 2px;
  background: #0066FF;
  transition: width 0.35s ease;
}

/* HOVER */
.blog-learn-more:hover {
  color: #004bb5;
}

.blog-learn-more:hover::after {
  width: 100%;
}

/* ===============================
   RESPONSIVE – HEALTH BLOG
================================ */

/* TABLET (max-width: 1024px) */
@media (max-width: 1024px) {

  .health-blog-grid {
    grid-template-columns: 1fr;
    gap: 50px;
  }

  .health-blog-left img {
    height: 320px;
  }

  .health-blog-header h2 {
    font-size: 38px;
  }
}

/* MOBILE (max-width: 768px) */
@media (max-width: 768px) {

  .health-blog-section {
    padding: 70px 0;
  }

  .health-blog-header {
    margin-bottom: 50px;
  }

  .health-blog-header h2 {
    font-size: 32px;
  }

  .health-blog-left h3 {
    font-size: 22px;
  }

  .health-blog-left p {
    font-size: 15px;
  }

  .health-blog-card {
    flex-direction: column;
    align-items: flex-start;
    gap: 14px;
  }

  .health-blog-card img {
    width: 100%;
    height: 160px;
  }
}

/* SMALL MOBILE (max-width: 480px) */
@media (max-width: 480px) {

  .health-blog-header span {
    font-size: 12px;
  }

  .health-blog-header h2 {
    font-size: 26px;
  }

  .health-blog-left img {
    height: 240px;
  }

  .health-blog-card p {
    font-size: 14px;
  }
}

/* TABLET (1024px and below) */
@media (max-width: 1024px) {
  .health-blog-section {
    padding: 80px 0;
  }
  
  .health-blog-container {
    max-width: 95%;
    padding: 0 30px;
  }
  
  .health-blog-grid {
    gap: 40px;
  }
  
  .health-blog-left img {
    width: 100%;
    height: 320px;
  }
  
  .health-blog-header {
    margin-bottom: 60px;
  }
  
  .health-blog-header h2 {
    font-size: 28px;
  }
}

/* MEDIUM TABLET (900px and below) */
@media (max-width: 900px) {
  .health-blog-grid {
    grid-template-columns: 1fr;
    gap: 50px;
  }
  
  .health-blog-left {
    order: 1;
  }
  
  .health-blog-right {
    order: 2;
  }
  
  .health-blog-left h3 {
    font-size: 24px;
  }
  
  .health-blog-left p {
    font-size: 15px;
  }
  
  .health-blog-card h4 {
    font-size: 17px;
  }
  
  .health-blog-card p {
    font-size: 14px;
  }
}

/* TABLET/MOBILE LANDSCAPE (768px and below) */
@media (max-width: 768px) {
  .health-blog-section {
    padding: 70px 0;
  }
  
  .health-blog-container {
    padding: 0 25px;
  }
  
  .health-blog-header {
    margin-bottom: 50px;
  }
  
  .health-blog-header span {
    font-size: 22px;
  }
  
  .health-blog-header h2 {
    font-size: 26px;
  }
  
  .health-blog-left img {
    height: 280px;
  }
  
  .health-blog-card {
    padding: 15px;
    gap: 15px;
  }
  
  .health-blog-card img {
    width: 80px;
    height: 80px;
  }
}

/* MOBILE (576px and below) */
@media (max-width: 576px) {
  .health-blog-section {
    padding: 60px 0;
  }
  
  .health-blog-container {
    padding: 0 20px;
  }
  
  .health-blog-header {
    margin-bottom: 40px;
  }
  
  .health-blog-header span {
    font-size: 20px;
    letter-spacing: 1px;
  }
  
  .health-blog-header h2 {
    font-size: 24px;
  }
  
  .health-blog-left img {
    height: 240px;
  }
  
  .health-blog-left h3 {
    font-size: 22px;
    margin: 20px 0 8px;
  }
  
  .health-blog-left p {
    font-size: 14px;
    line-height: 1.6;
  }
  
  .health-blog-card {
    flex-direction: column;
    align-items: flex-start;
    gap: 15px;
    padding: 20px;
  }
  
  .health-blog-card img {
    width: 100%;
    height: 160px;
    object-fit: cover;
  }
  
  .health-blog-card h4 {
    font-size: 18px;
    margin-bottom: 8px;
  }
  
  .health-blog-card p {
    font-size: 14px;
    line-height: 1.6;
  }
  
  .blog-learn-more {
    font-size: 14px;
    margin-top: 10px;
  }
}




/* ================================
   HEALTHCARE BENEFITS – HOME BLOG
================================ */
.healthcare-benefits-section {
  position: relative;
  background: linear-gradient(135deg, #D6E9F7, #D6E9F7);
  padding: 100px 0;
  overflow: hidden;
}

/* Floating bubble background */
.healthcare-benefits-section::before,
.healthcare-benefits-section::after {
  content: "";
  position: absolute;
  border-radius: 50%;
  background: rgba(0, 153, 255, 0.12);
  filter: blur(60px);
  animation: floatBubble 14s infinite alternate ease-in-out;
}

.healthcare-benefits-section::before {
  width: 320px;
  height: 320px;
  top: -80px;
  left: -80px;
}

.healthcare-benefits-section::after {
  width: 420px;
  height: 420px;
  bottom: -120px;
  right: -120px;
  animation-delay: 4s;
}

@keyframes floatBubble {
  from { transform: translateY(0) translateX(0); }
  to { transform: translateY(-40px) translateX(40px); }
}

/* Container */
.healthcare-benefits-container {
  max-width: 1250px;
  margin: auto;
  padding: 0 20px;
  position: relative;
  z-index: 2;
}

/* Header */
.healthcare-benefits-header {
  text-align: center;
  margin-bottom: 80px;
}

.healthcare-benefits-header span {
  color: #0077ff;
  font-weight: 700;
  font-size: 25px;
  letter-spacing: 2px;
}

.healthcare-benefits-header h2 {
  font-size: 30px;
  margin-top: 10px;
  color: #0b2c4d;
}

/* Grid */
.healthcare-benefits-grid {
  display: grid;
  grid-template-columns: 1.2fr 1fr;
  gap: 50px;
  align-items: center;
}

/* LEFT BIG IMAGE CARD */
.healthcare-benefits-left {
  position: relative;
  overflow: hidden;
  background: rgba(255,255,255,0.55);
  backdrop-filter: blur(18px);
  box-shadow: 0 20px 45px rgba(0,0,0,0.12);
  transition: transform 0.6s ease;
}

.healthcare-benefits-left:hover {
  transform: translateY(-12px) scale(1.02);
}

.healthcare-benefits-left img {
  width: 100%;
  height: 350px;
  object-fit: cover;
}

.healthcare-benefits-left h3 {
  font-size: 26px;
  color: #003d66;
  margin: 20px;
}

.healthcare-benefits-left p {
  margin: 0 20px 25px;
  color: #555;
  line-height: 1.7;
}

/* RIGHT SIDE */
.healthcare-benefits-right {
  display: flex;
  flex-direction: column;
  gap: 25px;
}

/* BENEFIT CARDS */
.healthcare-benefits-card {
  display: flex;
  align-items: center;
  gap: 20px;
  padding: 22px;
  border-radius: 20px 60px 20px 20px;
  background: rgba(255,255,255,0.6);
  backdrop-filter: blur(15px);
  box-shadow: 0 15px 35px rgba(0,0,0,0.08);
  transition: all 0.45s ease;
  position: relative;
  overflow: hidden;
}

/* Glow animation */
.healthcare-benefits-card::before {
  content: "";
  position: absolute;
  inset: 0;
  background: linear-gradient(120deg, transparent, rgba(0,119,255,0.25), transparent);
  transform: translateX(-100%);
  transition: 0.6s;
}

.healthcare-benefits-card:hover::before {
  transform: translateX(100%);
}

.healthcare-benefits-card:hover {
  transform: translateY(-8px) scale(1.04);
  box-shadow: 0 25px 55px rgba(0,119,255,0.25);
}

/* Card image */
.healthcare-benefits-card img {
  width: 90px;
  height: 100px;
  object-fit: cover;
  border-radius: 50%;
  border: 4px solid rgba(0,119,255,0.3);
  background: #fff;
  transition: transform 0.4s ease;
}

.healthcare-benefits-card:hover img {
  transform: rotate(8deg) scale(1.15);
}

/* Text */
.healthcare-benefits-card h4 {
  font-size: 18px;
  margin-bottom: 6px;
  color: #003d66;
}

.healthcare-benefits-card p {
  font-size: 14.5px;
  color: #555;
  line-height: 1.6;
}

/* Responsive */
@media (max-width: 992px) {
  .healthcare-benefits-grid {
    grid-template-columns: 1fr;
  }

  .healthcare-benefits-left img {
    height: 300px;
  }
}
/* BASE */
.post-read-more {
  display: inline-block;
  font-size: 15px;
  font-weight: 600;
  color: #0066FF;
  text-decoration: none;
  position: relative;
  line-height: 1.4;
  padding-bottom: 4px;          /* ⬅ IMPORTANT */
  transition: color 0.3s ease;
}

/* UNDERLINE */
.post-read-more::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;                    /* ⬅ changed */
  width: 0%;
  height: 2px;
  background-color: #0066FF;
  transition: width 0.35s ease;
}

/* HOVER */
.post-read-more:hover {
  color: #004bb5;
}

.post-read-more:hover::after {
  width: 100%;
}

/* CARD FIX */
.post-read-more--card {
  margin-top: 10px;
  align-self: flex-start;
}




/* SECTION */
.sleep-blog-section {
  background: #D6E9F7; /* soft background */
  padding: 100px 20px;
  position: relative;
  overflow: hidden;
  font-family: 'Poppins', sans-serif;
}

/* CONTAINER */
.sleep-blog-container {
  max-width: 1250px;
  margin: auto;
}

/* HEADER */
.sleep-blog-header span {
  display: block;
  font-size: 16px;
  font-weight: 600;
  color: #0066FF; /* blog posts color */
  margin-bottom: 8px;
  text-transform: uppercase;
}

.sleep-blog-header h2 {
  font-size: 36px;
  font-weight: 700;
  color: navy; /* H2 color */
  margin-bottom: 50px;
}

/* CONTENT GRID */
.sleep-blog-grid {
  display: grid;
  grid-template-columns: 1.3fr 1fr;
  gap: 50px;
  align-items: start;
}

/* LEFT BIG IMAGE */
/* LEFT BIG CARD */
.sleep-blog-left {
  background: #ffffff;
  padding: 22px;
  
  box-shadow: 0 18px 50px rgba(0,102,255,0.15);
  text-align: left;
  max-width: 650px;          /* ⬅ screenshot width match */
  height: 100%;              /* ⬅ right cards height-ku equal */
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  transition: transform 0.4s ease, box-shadow 0.4s ease;
}

/* IMAGE */
.sleep-blog-left img {
  width: 100%;
  height: 300px;             /* ⬅ BIG image like screenshot */
  object-fit: cover;
  
  margin-bottom: 22px;
  transition: transform 0.4s ease;
}

/* TITLE */
.sleep-blog-left h3 {
  font-size: 26px;           /* ⬅ bold & strong */
  color: #003366;
  margin-bottom: 14px;
}

/* DESCRIPTION */
.sleep-blog-left p {
  font-size: 16px;
  color: #555;
  line-height: 1.7;
}

/* HOVER */
.sleep-blog-left:hover {
  transform: translateY(-10px);
  box-shadow: 0 28px 65px rgba(0,102,255,0.25);
}

.sleep-blog-left:hover img {
  transform: scale(1.04);
}

/* RIGHT CONTENT CARDS */
.sleep-blog-right {
  display: flex;
  flex-direction: column;
  gap: 35px;
}

/* INDIVIDUAL CARD */
.sleep-blog-card {
  display: flex;
  gap: 40px;
  background: #fff;
  padding: 25px;
  border-radius: 15px;
  box-shadow: 0 10px 35px rgba(0,102,255,0.1);
  transition: transform 0.4s ease, box-shadow 0.4s ease;
  cursor: pointer;
}

.sleep-blog-card img {
  width: 100px;
  height: 100px;
  object-fit: cover;
  border-radius: 15px;
  transition: transform 0.4s ease;
}

.sleep-blog-card h4 {
  font-size: 18px;
  color: #003366;
  margin-bottom: 5px;
}

.sleep-blog-card p {
  font-size: 14px;
  color: #555;
  line-height: 1.5;
}

/* CARD HOVER ANIMATION */
.sleep-blog-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 20px 50px rgba(0,102,255,0.2);
}

.sleep-blog-card:hover img {
  transform: scale(1.08) rotate(2deg);
}

/* RESPONSIVE */
@media (max-width: 1024px) {
  .sleep-blog-grid {
    grid-template-columns: 1fr;
  }

  .sleep-blog-left {
    margin-bottom: 40px;
  }
}

@media (max-width: 600px) {
  .sleep-blog-card {
    flex-direction: column;
    align-items: center;
    text-align: center;
  }

  .sleep-blog-card img {
    width: 80px;
    height: 80px;
  }
}


/* BASE STYLE – COMMON FOR ALL */
.blog-learn-more {
  display: inline-block;
  font-size: 15px;
  font-weight: 600;
  color: #0066FF;
  text-decoration: none;
  position: relative;
  line-height: 1.4;
  transition: color 0.3s ease;
}

/* UNDERLINE EFFECT */
.blog-learn-more::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: -4px;
  width: 0%;
  height: 2px;
  background: #0066FF;
  transition: width 0.35s ease;
}

/* HOVER */
.blog-learn-more:hover {
  color: #004bb5;
}

.blog-learn-more:hover::after {
  width: 100%;
}

/* CARD-SPECIFIC ADJUSTMENT */
.blog-learn-more--card {
  margin-top: 10px;      /* safe spacing */
  align-self: flex-start; /* prevents center shift in flex */
}

/* ===============================
   TABLET & SMALL DESKTOP FIX
   =============================== */
@media (max-width: 1024px) {

  .sleep-blog-grid {
    grid-template-columns: 1fr;
    gap: 40px;
    justify-items: center; /* 👈 important */
  }

  /* LEFT BIG CARD */
  .sleep-blog-left {
    max-width: 650px;
    width: 100%;
    margin: 0 auto;
  }

  /* RIGHT CONTAINER */
  .sleep-blog-right {
    max-width: 650px;   /* 👈 SAME AS LEFT */
    width: 100%;
    margin: 0 auto;
  }

  /* EACH RIGHT CARD FULL WIDTH */
  .sleep-blog-card {
    width: 100%;
  }

  .sleep-blog-card img {
    width: 90px;
    height: 90px;
  }
}




* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Segoe UI', sans-serif;
}

body {
  background: #d6e9f7;
}

/* SECTION */
.health-section {
  padding: 80px 40px;
  display: flex;
  justify-content: center;
}

/* MAIN CONTAINER */
.health-container {
  max-width: 1250px;
  width: 100%;
  display: flex;
  align-items: center;
  gap: 60px;
  padding: 60px;
  border-radius: 30px;
  background: rgba(255, 255, 255, 0.85); /* 👈 light transparent overlay */
  box-shadow: 0 25px 60px rgba(0,0,0,0.1);
  overflow: hidden;
}

/* LEFT TEXT */
.health-text {
  flex: 1;
  opacity: 0;
  transform: translateX(-60px);
  transition: 1.2s ease;
}

.health-text h1 {
  font-size: 48px;
  font-weight: 500;
  color: #333;
  margin-bottom: 25px;
}

.health-text h1 span {
  font-weight: 800;
}

.health-text p {
  font-size: 16px;
  line-height: 1.8;
  color: #666;
  margin-bottom: 20px;
}

/* AUTHOR */
.author {
  margin-top: 30px;
}

.author strong {
  display: block;
  font-size: 17px;
  color: #000;
}

.author span {
  font-size: 14px;
  color: #0066ff;
}

/* RIGHT IMAGE */
.health-image {
  flex: 1;
  text-align: right;
  opacity: 0;
  transform: translateX(60px);
  transition: 1.2s ease;
}

.health-image img {
 max-width: 100%; 
 height: auto;       /* 👈 image keela move aagum */ 
}

/* ACTIVE ANIMATION */
.health-container.active .health-text,
.health-container.active .health-image {
  opacity: 1;
  transform: translateX(0);
}

@media (max-width: 576px) {

  .health-container {
    flex-direction: column;
    padding: 30px 20px;
  }

  /* TEXT FIRST */
  .health-text {
    order: 1;
    width: 100%;
  }

  /* IMAGE AFTER TEXT */
  .health-image {
    order: 2;
    width: 100%;
    margin-top: 25px;
    text-align: center;
  }

  .health-image img {
    width: 100%;
    max-width: 340px;   /* 👈 proper size */
    height: auto;
    margin: 0 auto;
    display: block;
  }

  /* MOBILE ANIMATION FIX */
  .health-text,
  .health-image {
    transform: translateY(30px);
  }

  .health-container.active .health-text,
  .health-container.active .health-image {
    transform: translateY(0);
  }
}




   
    
  </style>
</head>
<body>


<section class="blog-banner">
  
</section>


  <!-- BLOG SECTION -->
  <section class="blog-section">
    <h1> Health Blog</h1>
    <p class="blog-sub">Expert insights, wellness tips, and trusted medical information and
      stay<br> informed with the latest updates to help you live a healthier and happier life.
    </p>

    <div class="blog-grid">

      <article class="blog-card">
        <h3>Tips for a Healthy Lifestyle</h3>
        <p>Improve your daily routine with simple wellness habits recommended by doctors.</p>
      </article>

      <article class="blog-card">
        <h3>Understanding Heart Health</h3>
        <p>Learn the risk factors and prevention methods to keep your heart healthy.</p>
      </article>

      <article class="blog-card">
        <h3>Mental Health Matters</h3>
        <p>Simple strategies to reduce stress and improve emotional well-being.</p>
      </article>

      <article class="blog-card">
        <h3>Boosting Your Immunity</h3>
        <p>Essential nutrients and habits that help strengthen your immune system.</p>
      </article>

      <article class="blog-card">
        <h3>Healthy Diet Basics</h3>
        <p>Understand what a balanced diet looks like and how to follow it daily.</p>
      </article>

      <article class="blog-card">
        <h3>Sleep & Wellness</h3>
        <p>Discover why good sleep is important and how to improve sleep quality.</p>
      </article>

    </div>
  </section>

   
<section class="health-blog-section">
  <div class="health-blog-container">

    <!-- HEADER -->
    <div class="health-blog-header">
      <span>LATEST ARTICLES</span>
      <h2>Benefits of Meditation</h2>
    </div>

    <!-- CONTENT GRID -->
    <div class="health-blog-grid">

      <!-- LEFT BIG IMAGE -->
      <div class="health-blog-left">
        <a href="blog1.php">
        <img src="images/meditation.jpg" alt="Meditation">
        </a>
        <h3>The Benefits of Mindfulness Meditation</h3>
        <p>Improves focus, reduces stress, and promotes emotional well-being.</p>
        <a href="blog1.php" class="blog-learn-more">Learn More</a>

      </div>

      <!-- RIGHT CONTENT -->
      <div class="health-blog-right">

        <div class="health-blog-card">
          <img src="images/med1.jpg" alt="Reduces Stress">
          <div>
            <h4>Reduces Stress</h4>
            <p>Lowers cortisol levels and calms the nervous system.</p>
          </div>
        </div>

        <div class="health-blog-card">
          <img src="images/med2.jpg" alt="Improves Focus">
          <div>
            <h4>Improves Focus</h4>
            <p>Enhances attention, clarity, and mental awareness.</p>
          </div>
        </div>

        <div class="health-blog-card">
          <img src="images/med3.jpg" alt="Emotional Balance">
          <div>
            <h4>Boost Immunity</h4>
            <p>Regular relaxation techniques improve overall health and immunity.</p>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>

<section class="healthcare-benefits-section">
  <div class="healthcare-benefits-container">

    <!-- HEADER -->
    <div class="healthcare-benefits-header">
      <span>Nutrition and Wellness</span>
      <h2>Benefits of Eating Healthy Foods.</h2>
    </div>

    <!-- CONTENT GRID -->
    <div class="healthcare-benefits-grid">

      <!-- LEFT BIG IMAGE -->
      <div class="healthcare-benefits-left">
        <a href="blog1.php">
        <img src="images/healthcare.jpg" alt="Healthcare Benefits">
        </a>
        <h3>Eat Clean, Live Strong</h3>
        <p>Eating healthy foods daily helps your body function 
          better, boosts natural energy levels.</p>
          <a href="blog1.php" class="post-read-more post-read-more--card">Learn More</a>
      </div>

      <!-- RIGHT CONTENT -->
      <div class="healthcare-benefits-right">

        <div class="healthcare-benefits-card">
          <img src="images/digestion.jpg" alt="Boost Immunity">
          <div>
            <h4>Supports Digestive Health</h4>
            <p>Fiber-rich foods like fruits, vegetables, and whole grains
               improve digestion and help maintain a healthy gut.</p>
          </div>
        </div>

        <div class="healthcare-benefits-card">
          <img src="images/heart.jpg" alt="Heart Health">
          <div>
            <h4>Supports Heart Health</h4>
            <p>Healthy lifestyle choices reduce risk of cardiovascular 
              diseases and improve circulation.</p>
          </div>
        </div>

        <div class="healthcare-benefits-card">
          <img src="images/mentalwellness.jpg" alt="Mental Wellness">
          <div>
            <h4>Enhances Mental Wellness</h4>
            <p>Stress management and adequate rest improve
               focus, mood, and emotional balance.</p>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>

<section class="sleep-blog-section">
  <div class="sleep-blog-container">

    <!-- HEADER -->
    <div class="sleep-blog-header">
      <span>BLOG POSTS</span>
      <h2>Maintaining Healthy Sleep</h2>
    </div>

    <!-- CONTENT GRID -->
    <div class="sleep-blog-grid">

      <!-- LEFT BIG IMAGE -->
      <div class="sleep-blog-left">
        <a href="blog1.php">
        <img src="images/sleep.jpg" alt="Healthy Sleep">
        </a>
        <h3>Why Quality Sleep Matters</h3>
        <p>Proper sleep helps restore the body, balance hormones, and improve overall wellbeing.</p>
        <a href="blog1.php" class="blog-learn-more blog-learn-more--card">Learn More</a>
      </div>

      <!-- RIGHT CONTENT -->
      <div class="sleep-blog-right">

        <div class="sleep-blog-card">
          <img src="images/sleep1.jpg" alt="Memory Support">
          <div>
            <h4>Enhances Memory</h4>
            <p>Deep sleep improves memory consolidation and learning ability.</p>
          </div>
        </div>

        <div class="sleep-blog-card">
          <img src="images/sleep2.jpg" alt="Metabolism Regulation">
          <div>
            <h4>Regulates Metabolism</h4>
            <p>Consistent sleep helps maintain healthy metabolism and weight balance.</p>
          </div>
        </div>

        <div class="sleep-blog-card">
          <img src="images/sleep3.jpg" alt="Mood Stability">
          <div>
            <h4>Stabilizes Mood</h4>
            <p>Quality sleep reduces irritability and improves emotional resilience.</p>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>


<section class="health-section">
  <div class="health-container">

    <!-- LEFT CONTENT -->
    <div class="health-text">
      <h1>
        How To Live a <br>
        <span>Healthy Lifestyle?</span>
      </h1>

      <p>
       Living a healthy lifestyle is about making small, consistent choices that improve both physical and mental well-being. A balanced diet, regular physical activity, adequate sleep, and effective stress management work together to strengthen the body and mind. When healthy habits become part of daily life, they help prevent illness and promote long-term vitality.
      </p>

      <p>
        By making conscious lifestyle choices, individuals can enhance their quality of life and enjoy sustained energy and better health.
      </p>

      <div class="author">
        <strong>Victoria Fernandez</strong>
        <span>Cardiac Surgery</span>
      </div>
    </div>

    <!-- RIGHT IMAGE -->
    <div class="health-image">
      <img src="images/banner_img.png" alt="Doctors">
    </div>

  </div>
</section>

<script src="script.js"></script>











   



 
<script>

window.addEventListener("load", () => {
  document.querySelector(".health-container").classList.add("active");
});
</script>

<?php
include 'footer.php'; // include footer
?>

</body>
</html>
