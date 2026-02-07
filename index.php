<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PrimeHealth - Home</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/a076d05399.css" crossorigin="anonymous"></script>  


<!-- Banner Carousel Section START -->
<div id="primeHealthCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">

       <div class="carousel-item active">
    <img src="images/canva1.png" class="d-block w-100" alt="Banner1">

    
       </div>

        <div class="carousel-item">
            <img src="images/canva4.png" class="d-block w-100" alt="background">
                
        </div>

        <div class="carousel-item">
            <img src="images/canva14.png" class="d-block w-100" alt="banner3">
            
        </div>

    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#primeHealthCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#primeHealthCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>

</div>
<!-- Banner Carousel Section END -->






<style>

  

 /* FORCE HEIGHT CONTROL */
#primeHealthCarousel,
#primeHealthCarousel .carousel-inner,
#primeHealthCarousel .carousel-item {
    height: 83vh !important;
}

/* IMAGE FIT */
#primeHealthCarousel .carousel-item img {
    height: 100% !important;
    width: 100%;
    object-fit: cover;
}








@media (max-width: 768px) {

    .banner-one-text,
    .banner-two-text,
    .banner-three-text {
        left: 50% !important;
        right: auto !important;
        top: 55%;
        transform: translate(-50%, -50%);
        text-align: center;
        max-width: 90%;
    }

    .banner-one-text h1,
    .banner-two-text h1,
    .banner-three-text h1 {
        font-size: 26px;
    }

    .banner-one-text p,
    .banner-two-text p,
    .banner-three-text p {
        font-size: 14px;
    }
}

@media (max-width: 768px) {

  #primeHealthCarousel,
  #primeHealthCarousel .carousel-inner,
  #primeHealthCarousel .carousel-item {
    height: 45vh;   /* 👈 Mobile-friendly height */
  }

  #primeHealthCarousel .carousel-item img {
    height: 100%;
    object-fit: cover;
  }

  /* Hide arrows on small screens (optional but clean) */
  .carousel-control-prev,
  .carousel-control-next {
    display: none;
  }

}
@media (max-width: 992px) {

  #primeHealthCarousel,
  #primeHealthCarousel .carousel-inner,
  #primeHealthCarousel .carousel-item {
    height: 65vh;
  }

  .carousel-control-prev,
  .carousel-control-next {
    width: 8%;
  }

}
/* ==============================
   BANNER – TABLET RESPONSIVE
============================== */
@media (min-width: 768px) and (max-width: 1023px) {

  #primeHealthCarousel,
  #primeHealthCarousel .carousel-inner,
  #primeHealthCarousel .carousel-item {
      height: 65vh !important; /* reduced from 83vh */
  }

  #primeHealthCarousel .carousel-item img {
      height: 100% !important;
      width: 100%;
      object-fit: cover;
  }
}


/* ================= ABOUT HERO SECTION ================= */

.about-hero-section {
  background: #D6E9F7;
  padding: 120px 0;
  overflow: hidden;
}

.about-hero-container {
  max-width: 1250px;
  margin: auto;
  padding: 0 20px;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 80px;
  align-items: stretch;
}

/* ================= LEFT IMAGE ================= */

.about-hero-image {
  position: relative;
  border-radius: 26px;
  overflow: hidden;
  animation: fadeUp 1s ease forwards;
  
}

.about-hero-image img {
  width: 100%;
  height: 100%;
  min-height: 460px;
  object-fit: cover;
  border-radius: 26px;
  position: relative;
  z-index: 2;
}

/* CREATIVE SHADE BEHIND IMAGE */
.image-shade {
  position: absolute;
  width: 100%;
  height: 100%;
  background: linear-gradient(135deg, #d6e9f7, #d6e9f7);
  border-radius: 30px;
  top: 18px;
  left: -18px;
  z-index: 1;
  opacity: 0.18;
}


/* ================= RIGHT CONTENT ================= */

.about-hero-content {
  display: flex;
  flex-direction: column;
  justify-content: center;
  animation: fadeUp 1.2s ease forwards;
}

.about-tag {
  font-size: 24px;
  letter-spacing: 2px;
  color: #0066ff;
  font-weight: 600;
  margin-bottom: 18px;
}

.about-hero-content h2 {
  font-size: 46px;
  color: #0a2540;
  margin-bottom: 10px;
}

.about-hero-content h3 {
  font-size: 22px;
  color: #0066ff;
  font-weight: 500;
  margin-bottom: 35px;
}

/* POINTS */

.about-point {
  display: flex;
  gap: 14px;
  margin-bottom: 22px;
}

.about-point .arrow {
  font-size: 22px;
  color: #0066ff;
  line-height: 1.4;
}

.about-point p {
  font-size: 16.5px;
  color: #4a4a4a;
  line-height: 1.7;
  max-width: 520px;
}

/* ================= ANIMATION ================= */

@keyframes fadeUp {
  from {
    opacity: 0;
    transform: translateY(40px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}


/* ================= RESPONSIVE ================= */

/* Desktop: Default styles for > 1024px */

/* Tablet: 769px - 1024px */
@media (min-width: 769px) and (max-width: 1024px) {
  .about-hero-section {
    padding: 50px 0;
  }
  
  .about-hero-container {
    gap: 40px;
  }

  .about-hero-content h2 {
    font-size: 36px;
  }

  .about-hero-content h3 {
    font-size: 18px;
    margin-bottom: 20px;
  }
  
  .about-hero-image img {
    min-height: 350px;
  }
}

/* Mobile Landscape / Small Tablet: 601px - 768px */
@media (min-width: 601px) and (max-width: 768px) {
  .about-hero-section {
    padding: 40px 20px;
  }
  
  .about-hero-container {
    grid-template-columns: 1fr;
    gap: 30px;
  }

  .about-hero-content h2 {
    font-size: 32px;
  }

  .about-hero-content h3 {
    font-size: 18px;
    margin-bottom: 20px;
  }
  
  .about-hero-image img {
    min-height: 320px;
  }
}

/* Mobile Portrait: up to 600px */
@media (max-width: 600px) {
  .about-hero-section {
    padding: 30px 15px;
  }
  
  .about-hero-container {
    grid-template-columns: 1fr;
    gap: 25px;
  }

  .about-hero-image img {
    min-height: 250px;
  }
  
  .about-hero-content h2 {
    font-size: 24px;
  }
  
  .about-hero-content h3 {
    font-size: 16px;
  }
  
  .about-point p {
    font-size: 14px;
  }
}

@media (min-width: 768px) and (max-width: 991px){

  .about-hero-section{
    padding: 100px 0;
  }

  .about-hero-container{
    grid-template-columns: 1fr;
    gap: 60px;
  }

  /* IMAGE */
  .about-hero-image{
    max-width: 720px;
    margin: 0 auto;
  }

  .about-hero-image img{
    min-height: 380px;
  }

  .image-shade{
    top: 14px;
    left: -14px;
  }

  /* CONTENT */
  .about-hero-content{
    align-items: center;
    text-align: center;
  }

  .about-tag{
    font-size: 20px;
    margin-bottom: 14px;
  }

  .about-hero-content h2{
    font-size: 38px;
  }

  .about-hero-content h3{
    font-size: 20px;
    margin-bottom: 28px;
  }

  /* POINTS */
  .about-point{
    justify-content: center;
  }

  .about-point p{
    font-size: 15.5px;
    max-width: 600px;
  }
}



*{box-sizing:border-box;font-family:'Poppins',sans-serif;}
body{margin:0;color:#333;}

/* COMMON */
.section{padding:80px 0;}
.container{max-width:1200px;margin:auto;padding:0 20px;}
h2{color:#0B2C59;font-size:36px;margin-bottom:15px;}
p{color:#444;line-height:1.7;}
.btn{
  display:inline-block;
  background:#0066FF;
  color:#fff;
  padding:12px 28px;
  border-radius:30px;
  text-decoration:none;
  font-weight:500;
  transition:.3s;
}
.btn:hover{background:#0052CC;}

/* ================= HERO ================= */
.hero {
  background: linear-gradient(
    135deg,
    #D6E9F7 0%,
    #EAF4FC 100%
  );
  padding: 120px 0;
  position: relative;
  overflow: hidden;
}

/* soft background shapes */
.hero::before {
  content: "";
  position: absolute;
  top: -120px;
  right: -120px;
  width: 350px;
  height: 350px;
  background: rgba(0, 102, 255, 0.08);
  border-radius: 50%;
}

.hero::after {
  content: "";
  position: absolute;
  bottom: -150px;
  left: -150px;
  width: 400px;
  height: 400px;
  background: rgba(11, 44, 89, 0.06);
  border-radius: 50%;
}

.hero-grid {
  display: grid;
  grid-template-columns: 1.1fr 0.9fr;
  align-items: center;
  gap: 70px;
  position: relative;
  z-index: 2;
}

/* LEFT CONTENT */
.hero-content {
  max-width: 560px;
}

.hero-badge {
  display: inline-block;
  background: #ffffff;
  color: #0066FF;
  padding: 8px 18px;
  border-radius: 50px;
  font-size: 14px;
  font-weight: 600;
  margin-bottom: 20px;
  box-shadow: 0 6px 20px rgba(0,0,0,0.08);
}

.hero h1 {
  font-size: 48px;
  color: #0B2C59;
  line-height: 1.2;
  margin-bottom: 18px;
}

.hero h1 span {
  color: #0B2C59;
}

.hero p {
  font-size: 17px;
  line-height: 1.7;
  color: #4A4A4A;
  margin-bottom: 30px;
}

/* BUTTONS */
.hero-actions {
  display: flex;
  gap: 18px;
  flex-wrap: wrap;
}

.btn-primary {
  background: #0066FF;
  color: #fff;
  padding: 14px 32px;
  border-radius: 8px;
  font-weight: 600;
  transition: 0.3s;
}

.btn-primary:hover {
  background: #0056d8;
  transform: translateY(-2px);
}

.btn-outline {
  border: 2px solid #0066FF;
  color: #0066FF;
  padding: 14px 32px;
  border-radius: 8px;
  font-weight: 600;
  transition: 0.3s;
}

.btn-outline:hover {
  background: #0066FF;
  color: #fff;
}

/* RIGHT IMAGE */
.hero-image {
  text-align: center;
}

.hero-image img {
  width: 100%;
  max-width: 520px;
  object-fit: cover; 
  height: auto;
  min-height: 360px;
  box-shadow: 0 25px 60px rgba(0,0,0,0.18);
}

/* Secondary primary-style button */
.btn-secondary {
  background: #0066FF; /* Navy */
}

.btn-secondary:hover {
  background: #0066FF;
  transform: translateY(-2px);
  box-shadow: 0 6px 18px rgba(0,0,0,0.18);
}

/* ================= RESPONSIVE ================= */
@media (min-width: 768px) and (max-width: 991px){

  .hero{
    padding: 100px 0;
  }

  .hero-grid{
    grid-template-columns: 1fr;
    gap: 55px;
    text-align: center;
  }

  .hero-content{
    max-width: 650px;
    margin: 0 auto;
  }

  .hero h1{
    font-size: 40px;
    line-height: 1.25;
  }

  .hero p{
    font-size: 16px;
  }

  .hero-actions{
    justify-content: center;
    gap: 14px;
  }

  .hero-image img{
    max-width: 420px;
    min-height: auto;
  }

  /* soften background circles for tablet */
  .hero::before{
    width: 280px;
    height: 280px;
    top: -100px;
    right: -100px;
  }

  .hero::after{
    width: 320px;
    height: 320px;
    bottom: -120px;
    left: -120px;
  }
}


@media (max-width: 576px) {
  .hero {
    padding: 90px 0;
  }

  .hero h1 {
    font-size: 36px;
  }
}





/* ===============================
   WHAT WE DO – NEW CREATIVE STYLE
================================ */

.whatwedo-section{
  padding:120px 0;
  background: linear-gradient(135deg, #EAF3FF, #D6E9F7);
  overflow:hidden;
}

.whatwedo-container{
  max-width:1350px;
  margin:auto;
  padding:0 20px;
}

/* HEADING */
.whatwedo-heading{
  text-align:center;
  max-width:720px;
  margin:0 auto 100px;
}

.whatwedo-heading h2{
  font-size:42px;
  font-weight:800;
  color:#0a2540;
}

.whatwedo-line{
  display:block;
  width:55px;
  height:3px;
  background:#0066FF;
  margin:18px auto;
}

.whatwedo-heading p{
  font-size:17px;
  line-height:1.7;
  color:#555;
}

/* GRID */
.whatwedo-grid{
  display:grid;
  grid-template-columns:1fr 420px 1fr;
  gap:70px;
  align-items:center;
}

/* ================= CENTER IMAGE ================= */

.whatwedo-center{
  display:flex;
  justify-content:center;
}

.whatwedo-center img{
  max-width:460px;
  height: 700px;
  filter: drop-shadow(0 30px 60px rgba(0,102,255,0.35));
  animation: floatDoctor 6s ease-in-out infinite;
}

@keyframes floatDoctor{
  0%,100%{ transform: translateY(0); }
  50%{ transform: translateY(-18px); }
}

/* ================= CARDS ================= */
.whatwedo-section{
  padding:120px 0;
  background: #D6E9F7; /* changed from gradient to solid color */
  overflow:hidden;
}
.whatwedo-col{
  display:flex;
  flex-direction:column;
  gap:35px;
}

/* hide old service images completely */
.whatwedo-icon{
  display:none;
}

/* CARD */
.whatwedo-item{
  background: #fff;
  backdrop-filter: blur(14px);
  padding:28px 30px;
  border-radius:20px;
  border:1px solid rgba(0,102,255,0.10);
  position:relative;
  cursor:pointer;
  transition: all 0.45s ease;
  overflow:hidden;
}

/* Glow layer */
.whatwedo-item::before{
  content:"";
  position:absolute;
  inset:-2px;
  background: linear-gradient(
    120deg,
    transparent,
    rgba(0,102,255,0.10),
    transparent
  );
  opacity:0;
  transition: opacity 0.5s ease;
}

.whatwedo-item:hover::before{
  opacity:1;
}

/* Hover lift */
.whatwedo-item:hover{
  transform: translateY(-10px) scale(1.02);
  box-shadow: 0 30px 70px rgba(0, 170, 255, 0.15);
}

/* TEXT */
.whatwedo-text h4{
  font-size:15px;
  font-weight:700;
  color:#0a2540;
  margin-bottom:10px;
  transition: color 0.4s ease, transform 0.4s ease;
}

.whatwedo-text p{
  font-size:12.5px;
  line-height:1.65;
  color:#555;
  transition: color 0.4s ease;
}

/* Heading color change on hover */
.whatwedo-item:hover h4{
  color:#3399FF;
  transform: translateX(6px);
}

.whatwedo-item:hover p{
  color:#333;
}

/* ================= READ MORE ================= */

.whatwedo-text a.read-more{
  display:inline-flex;
  align-items:center;
  gap:6px;
  margin-top:14px;
  font-size:14px;
  font-weight:600;
  color:#0066FF;
  text-decoration:none;
  position:relative;
  transition: all 0.35s ease;
}

.whatwedo-text a.read-more span{
  transition: transform 0.35s ease;
}

.whatwedo-text a.read-more:hover{
  color:#0a2540;
}

.whatwedo-text a.read-more:hover span{
  transform: translateX(8px);
}


@media (min-width: 768px) and (max-width: 991px){

  .whatwedo-section{
    padding: 100px 0;
  }

  .whatwedo-heading{
    margin-bottom: 70px;
  }

  .whatwedo-heading h2{
    font-size: 36px;
  }

  .whatwedo-heading p{
    font-size: 16px;
  }

  /* GRID → STACK */
  .whatwedo-grid{
    grid-template-columns: 1fr;
    gap: 60px;
  }

  /* CENTER IMAGE */
  .whatwedo-center img{
    max-width: 360px;
    height: auto;              /* 🔥 fixed height remove */
    animation: none;           /* smoother on tab */
  }

  /* CARDS */
  .whatwedo-col{
    gap: 30px;
  }

  .whatwedo-item{
    padding: 26px 26px;
  }

  .whatwedo-text h4{
    font-size: 14px;
  }

  .whatwedo-text p{
    font-size: 13px;
  }

  /* reduce hover lift on tablet */
  .whatwedo-item:hover{
    transform: translateY(-6px) scale(1.01);
  }
}

/* ================= RESPONSIVE ================= */


@media (max-width: 600px){

  .whatwedo-section{
    padding: 70px 0;
  }

  .whatwedo-heading{
    margin-bottom: 60px;
    padding: 0 10px;
  }

  .whatwedo-heading h2{
    font-size: 28px;
  }

  .whatwedo-heading p{
    font-size: 14px;
  }

  /* GRID → SINGLE COLUMN */
  .whatwedo-grid{
    grid-template-columns: 1fr;
    gap: 50px;
  }

  /* CENTER IMAGE */
  .whatwedo-center img{
    width: 100%;
    max-width: 240px;
    height: auto;       /* 🔴 IMPORTANT */
    animation: none;    /* smoother on mobile */
  }

  /* CARDS */
  .whatwedo-col{
    gap: 25px;
  }

  .whatwedo-item{
    padding: 22px 22px;
  }

  .whatwedo-text h4{
    font-size: 14px;
  }

  .whatwedo-text p{
    font-size: 12px;
  }

  /* Disable hover lift on mobile */
  .whatwedo-item:hover{
    transform: none;
    box-shadow: none;
  }
}


/* ================= MEET OUR DOCTORS ================= */

.doctors{
  background:#D6E9F7;
  padding:90px 10%;
  text-align:center;
}

.doctors h2{
  font-size:42px;
  color:#0b2545;
  margin-bottom:70px;
}

/* GRID */
.doctor-grid{
  display:grid;
  grid-template-columns:repeat(3,1fr);
  gap:45px;
}

/* CARD */
.doctor-card{
  background:#fff;
  border-radius:24px;
  padding:85px 30px 45px;
  position:relative;
  box-shadow:0 30px 70px rgba(0,0,0,.15);
  cursor:pointer;
  transition:all .4s ease;
}

.doctor-card:hover{
  transform:translateY(-12px);
}

/* IMAGE */
.doctor-img{
  position:absolute;
  top:-60px;
  left:50%;
  transform:translateX(-50%);
  width:120px;
  height:120px;
  background:#fff;
  border-radius:50%;
  padding:6px;
}

.doctor-img img{
  width:100%;
  height:100%;
  border-radius:50%;
  object-fit:cover;
}

/* INFO */
.doctor-info h3{
  font-size:26px;
  color:#0b2545;
  margin-bottom:6px;
}

.doctor-info span{
  font-size:19px;
  color:#444;
}

/* PLUS */



.plus{
  display:flex;
  gap:10px;
  justify-content:center;
  margin:30px auto 0;
}

.plus i{
  width:40px;
  height:40px;
  background:#0066FF;
  color:#fff;
  border-radius:50%;
  display:flex;
  align-items:center;
  justify-content:center;
  font-size:16px;
  cursor:pointer;
}

.doctors-desc{
  max-width:700px;
  margin: -45px auto 100px;  /* 👈 paragraph keela mattum gap */
  font-size:18px;
  line-height:1.7;
  color:#4a5d73;
}





/* ================= MODAL ================= */

/* ================= MODAL ================= */

.modal{
  display:none;
  position:fixed;
  inset:0;
  background:rgba(0,0,0,0.55);
  z-index:1000;
}

.modal-content{
  background:#fff;
  margin:8% auto;
  padding:30px;
  max-width:820px;   /* width increase */
  border-radius:20px;
  position:relative;
  height: fit-content;
}

/* FLEX LAYOUT */
.modal-flex{
  display:flex;
  gap:30px;
  align-items:center;
}

/* LEFT IMAGE */
.modal-left img{
  width:300px;
  height:300px;
  object-fit:cover;
  border-radius:50%;
  border:6px solid #8EC5FC;

  box-shadow:0 10px 30px rgba(0,0,0,0.15);
}

/* RIGHT CONTENT */
.modal-right{
  flex:1;
}

.modal-right h3{
  color:#0b2545;
  margin-bottom:18px;
  font-size:26px;
}

.modal-heading{
  font-size:15px;
  font-weight:600;
  color:#0066FF;
  margin-bottom:6px;
}

.modal-right p{
  color:#555;
  margin-bottom:16px;
  line-height:1.6;
}



.modal-right h3{
  position:relative;
  padding-bottom:12px;
}

.modal-right h3::after{
  content:'';
  position:absolute;
  left:0;
  bottom:0;
  width:40px;
  height:3px;
  background:#0066FF;
}

/* CLOSE BUTTON */
.close{
  position:absolute;
  top:16px;
  right:22px;
  font-size:30px;
  cursor:pointer;
  color:#333;
}

/* ================= MOBILE ================= */

@media (max-width: 600px){

  .doctors{
    padding: 70px 15px;
  }

  .doctors h2{
    font-size: 28px;
    margin-bottom: 45px;
  }

  .doctors-desc{
    font-size: 14px;
    margin: -25px auto 60px;
    padding: 0 10px;
  }

  /* GRID → 1 COLUMN */
  .doctor-grid{
    grid-template-columns: 1fr;
    gap: 70px;
  }

  .doctor-card{
    padding: 75px 22px 40px;
  }

  .doctor-info h3{
    font-size: 20px;
  }

  .doctor-info span{
    font-size: 15px;
  }

  /* Disable hover lift on mobile */
  .doctor-card:hover{
    transform: none;
  }

  /* MODAL */
  .modal-content{
    width: 92%;
    margin: 15% auto;
    padding: 20px;
  }

  .modal-left img{
    width: 220px;
    height: 220px;
  }

  .modal-right h3{
    font-size: 22px;
  }
}

@media (min-width: 768px) and (max-width: 991px){

  .doctors{
    padding: 80px 6%;
  }

  .doctors h2{
    font-size: 34px;
    margin-bottom: 55px;
  }

  .doctors-desc{
    font-size: 16px;
    margin: -35px auto 80px;
    padding: 0 20px;
  }

  /* GRID → 2 COLUMNS */
  .doctor-grid{
    grid-template-columns: repeat(2, 1fr);
    gap: 60px;
  }

  .doctor-card{
    padding: 80px 26px 42px;
  }

  .doctor-info h3{
    font-size: 22px;
  }

  .doctor-info span{
    font-size: 16px;
  }

  /* Reduce hover effect for tablet */
  .doctor-card:hover{
    transform: translateY(-6px);
  }

  .doctor-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 60px;
  justify-content: center; /* center the grid content */
}

/* Center the 3rd card without stretching */
.doctor-card:nth-child(3) {
  justify-self: center; /* centers the 3rd card in its grid cell */
}
.doctor-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 60px;
}

/* Center the 3rd card without changing its size */
.doctor-card:nth-child(3) {
  grid-column: 1 / -1; /* span full row */
  justify-self: center; /* center it */
  max-width: 300px; /* same width as other cards */
  width: 100%; /* ensures responsiveness */
}


  /* ================= MODAL ================= */

  .modal-content{
    width: 90%;
    margin: 12% auto;
    padding: 25px;
  }

  .modal-flex{
    flex-direction: column;     /* image top */
    text-align: center;
  }

  .modal-left img{
    width: 260px;
    height: 260px;
    margin-bottom: 20px;
  }

  .modal-right h3{
    font-size: 24px;
  }

  .modal-right h3::after{
    left: 50%;
    transform: translateX(-50%);
  }
}










/* ==============================
   WELLNESS SUMMARY SECTION
============================== */
.wellness-summary-section {
  position: relative;
  padding: 100px 20px;
  background: linear-gradient(135deg, #D6E7F9, #D6E7F9);
  overflow: hidden;
}

.wellness-summary-section::before {
  content: '';
  position: absolute;
  width: 500px;
  height: 500px;
  border-radius: 50%;
  background: rgba(0, 153, 255, 0.08);
  top: -100px;
  right: -100px;
  filter: blur(100px);
  animation: floatBubble 16s infinite alternate ease-in-out;
}

@keyframes floatBubble {
  from { transform: translateY(0) translateX(0); }
  to { transform: translateY(-50px) translateX(50px); }
}

/* Container */
.wellness-summary-container {
  max-width: 1350px;
  margin: auto;
  position: relative;
  z-index: 2;
  text-align: center;
}

/* Header */
.wellness-summary-header h2 {
  font-size: 36px;
  color: #003d66;
  margin-bottom: 15px;
}

.wellness-summary-header p {
  font-size: 16.5px;
  color: #555;
  line-height: 1.7;
  max-width: 750px;
  margin: auto;
}

/* Cards Grid */
.wellness-summary-grid {
  display: flex;
  gap: 30px;
  justify-content: center;
  margin-top: 60px;
  flex-wrap: wrap;
}

/* Individual Card */
.wellness-card {
  position: relative;
  background: rgba(255,255,255,0.55);
  backdrop-filter: blur(18px);
  border-radius: 30px 10px 30px 50px;
  width: 370px;
  padding: 30px;
  transition: transform 0.5s ease, box-shadow 0.5s ease;
  box-shadow: 0 15px 35px rgba(0,0,0,0.08);
  overflow: hidden;
}

.wellness-card img {
  width: 100%;
  height: 200px;
  object-fit: cover;
  
  transition: transform 0.5s ease;
}

.wellness-card .card-text {
  margin-top: 15px;
}

.wellness-card h4 {
  font-size: 20px;
  color: #003d66;
  margin-bottom: 8px;
}

.wellness-card p {
  font-size: 14.5px;
  color: #555;
  line-height: 1.5;
}

.wellness-card {
  transition: all 0.6s ease;
  transform-style: preserve-3d;
}

/* Image animation */
.wellness-card img {
  transition: transform 0.6s ease;
}

.wellness-card:hover img {
  transform: translateY(-8px) scale(1.08);
}


/* Responsive */
@media (max-width: 992px) {
  .wellness-summary-grid {
    flex-direction: column;
    align-items: center;
  }

  .wellness-card {
    width: 90%;
  }
}
/* ==============================
   TABLET (768px - 1023px)
============================== */
@media (min-width: 768px) and (max-width: 1023px) {
  .wellness-summary-section {
    padding: 80px 20px;
  }

  .wellness-summary-header h2 {
    font-size: 32px;
  }

  .wellness-summary-header p {
    font-size: 15px;
    max-width: 650px;
  }

  .wellness-summary-grid {
    gap: 25px;
    justify-content: center;
  }

  .wellness-card {
    width: 300px; /* tablet size */
    padding: 25px;
  }

  .wellness-card h4 {
    font-size: 18px;
  }

  .wellness-card p {
    font-size: 14px;
  }
}

/* ==============================
   DESKTOP (1024px and above)
============================== */
@media (min-width: 1024px) {
  .wellness-summary-section {
    padding: 100px 20px;
  }

  .wellness-summary-header h2 {
    font-size: 36px;
  }

  .wellness-summary-header p {
    font-size: 16.5px;
    max-width: 750px;
  }

  .wellness-summary-grid {
    gap: 30px;
    justify-content: center;
  }

  .wellness-card {
    width: 370px; /* desktop size */
    padding: 30px;
  }

  .wellness-card h4 {
    font-size: 20px;
  }

  .wellness-card p {
    font-size: 14.5px;
  }
}



.stats-section{
  background:#D6E9F7;
  padding:90px 8%;
}

.stats-grid{
  display:grid;
  grid-template-columns:repeat(4,1fr);
  gap:40px;
}

.stat-card{
  background:#f3f8fb;
  padding:60px 35px;
  border-radius:22px;
  box-shadow:0 20px 50px rgba(0,0,0,.08);
  transition:all .35s ease;
  cursor:pointer;
}

.stat-card:hover{
  transform:translateY(-10px);
  box-shadow:0 35px 80px rgba(0,0,0,.15);
}

.stat-card h2{
  font-size:64px;
  color:#0b2545; /* navy blue */
  margin-bottom:20px;
}

.stat-card p{
  font-size:18px;
  color:#2e2e2e; /* charcoal */
  line-height:1.6;
}

/* Responsive */
@media(max-width:900px){
  .stats-grid{
    grid-template-columns:1fr 1fr;
  }
}
@media(max-width:500px){
  .stats-grid{
    grid-template-columns:1fr;
  }
}


.stats-heading{
  text-align:center;
  margin-bottom:70px;
}

.stats-heading h2{
  font-size:42px;
  color:#0b2545; /* navy blue */
  margin-bottom:12px;
}

.stats-heading p{
  font-size:18px;
  color:#0066FF; /* charcoal */
  max-width:600px;
  margin:auto;
}

/* Mobile */
@media(max-width:600px){
  .stats-heading h2{
    font-size:32px;
  }
}




.awards-section{
  padding:120px 0;
  background:#D6E7F9;
}

.awards-container{
  max-width:1300px;
  margin:auto;
  padding:0 20px;
}

.awards-title{
  font-size:44px;
  font-weight:800;
  color:#0a2540;
  margin-bottom:70px;
}

/* GRID */
.awards-grid{
  display:grid;
  grid-template-columns:repeat(4,1fr);
  gap:40px;
}

/* CARD */
.award-card{
  background:#fff;
  border-radius:18px;
  padding:40px 32px; 10px; 
  box-shadow:0 15px 40px rgba(0,0,0,0.06);
  transition:all 0.45s ease;
  position:relative;
  overflow:hidden;
  cursor:pointer;
}

/* subtle gradient hover bg */
.award-card::before{
  content:'';
  position:absolute;
  inset:0;
  background:linear-gradient(135deg,#0066FF,#4da3ff);
  opacity:0;
  transition:0.45s ease;
  z-index:0;
}

.award-card:hover::before{
  opacity:0.06;
}

/* ICON */
.award-icon{
  width:72px;
  height:72px;
  background:#eaf2ff;
  border-radius:16px;
  display:flex;
  align-items:center;
  justify-content:center;
  margin-bottom:28px;
  transition:all 0.45s ease;
  position:relative;
  z-index:1;
}

.award-icon img{
  width:38px;
}

/* TEXT */
.award-card h4{
  font-size:20px;
  font-weight:700;
  color:#0a2540;
  margin-bottom:14px;
  transition:color 0.45s ease;
  position:relative;
  z-index:1;
}

.award-card p{
  font-size:15.5px;
  line-height:1.7;
  color:#5a6b7f;
  transition:all 0.45s ease;
  position:relative;
  z-index:1;
}

/* HOVER EFFECTS */
.award-card:hover{
  transform:translateY(-12px);
  box-shadow:0 25px 70px rgba(0,102,255,0.18);
}

.award-card:hover .award-icon{
  background:#0066FF;
  transform:scale(1.1) rotate(-4deg);
}

.award-card:hover h4{
  color:#0066FF;
}

.award-card:hover p{
  color:#2d3e50;
}

/* RESPONSIVE */
@media(max-width:1100px){
  .awards-grid{
    grid-template-columns:repeat(2,1fr);
  }
}

@media(max-width:600px){
  .awards-grid{
    grid-template-columns:1fr;
  }
}

/* IMAGE hover disable */
.award-card:hover .award-icon{
  transform: none;
  box-shadow: none;
}



/* CTA */
.cta{
  background:#0066FF;
  color:#fff;
  text-align:center;
  padding:70px 20px;
}
.cta h2{color:#fff;}

/* RESPONSIVE */
@media(max-width:992px){
  .hero-grid,.about-grid{grid-template-columns:1fr;}
  .services-grid,.blog-grid{grid-template-columns:1fr 1fr;}
}
@media(max-width:576px){
  h2{font-size:28px;}
  .services-grid,.blog-grid{grid-template-columns:1fr;}
}


</style>
</head>

<body>




<section class="about-hero-section">
  <div class="about-hero-container">

    <!-- LEFT IMAGE -->
    <div class="about-hero-image">
      <div class="image-shade"></div>
      <img src="images/aboutdoctors.jpg" alt="Medical Team">
    </div>

    <!-- RIGHT CONTENT -->
    <div class="about-hero-content">
      <span class="about-tag">ABOUT US</span>
      <h2>PrimeHealth</h2>
      <h3>Trusted Medical Excellence</h3>

      <div class="about-point">
        <span class="arrow">➜</span>
        <p>
          PrimeHealth is a team of highly experienced medical professionals,
          delivering compassionate and advanced healthcare services with
          patient-first values.
        </p>
      </div>

      <div class="about-point">
        <span class="arrow">➜</span>
        <p>
          We follow a holistic approach, focusing on prevention, accurate
          diagnosis, and long-term wellness rather than just treating symptoms.
        </p>
      </div>
    </div>
    

  </div>
</section>

<section class="stats-section">
  <div class="stats-heading">
    <h2>Trusted Healthcare Excellence</h2>
    <p>Delivering quality care with experience, compassion, and results</p>
  </div>
  <div class="stats-grid">

    <div class="stat-card">
      <h2 class="counter" data-target="15">0</h2>
      <p>Years providing medical expertise for every patient</p>
    </div>

    <div class="stat-card">
      <h2 class="counter" data-target="5" data-suffix="K+">0</h2>
      <p>Patients treated with compassion and precision</p>
    </div>

    <div class="stat-card">
      <h2 class="counter" data-target="40">0</h2>
      <p>Renowned specialists across multiple disciplines</p>
    </div>

    <div class="stat-card">
      <h2 class="counter" data-target="99" data-suffix="%">0</h2>
      <p>Patient satisfaction through quality and compassion</p>
    </div>

  </div>
</section>

<!-- HERO -->
<section class="hero">
  <div class="container hero-grid">

    <!-- LEFT CONTENT -->
    <div class="hero-content">
      <span class="hero-badge">Trusted Healthcare Partner</span>

      <h1>
        Complete <span>Healthcare</span><br>
        Solutions for Life
      </h1>

      <p>
        Expert doctors, advanced facilities, and secure digital care —
        all designed to keep you and your family healthy.
      </p>

      <div class="hero-actions">
        <a href="services.php" class="btn btn-primary">Explore Services</a>
        <a href="contact.php" class="btn btn-primary btn-secondary">Book Appointment</a>
      </div>
    </div>

    <!-- RIGHT IMAGE -->
    <div class="hero-image">
      <img src="/primehealth/images/hero.jpg" alt="Professional healthcare team">
    </div>

  </div>
</section>



<section class="whatwedo-section">
  <div class="whatwedo-container">

    <!-- TOP HEADING -->
    <div class="whatwedo-heading">
      <h2>WHAT WE DO?</h2>
      <span class="whatwedo-line"></span>
      <p>
        We deliver comprehensive healthcare services using advanced medical
        technology and compassionate care to improve patient outcomes.
      </p>
    </div>

    <!-- CONTENT GRID -->
    <div class="whatwedo-grid">

      <!-- LEFT SERVICES -->
      <div class="whatwedo-col left">

        <div class="whatwedo-item">
          
          <div class="whatwedo-text">
            <h4>Cardiology Care</h4>
            <p>Advanced heart diagnostics, preventive care, and personalized treatment plans.</p>
             <a href="service1.php" class="read-more"> Read more <span>→</span> </a>
            
          </div>
        </div>

        <div class="whatwedo-item">
          
          <div class="whatwedo-text">
            <h4>Pediatric Services</h4>
            <p>Comprehensive healthcare for infants, children, and adolescents.</p>
              <a href="service2.php" class="read-more"> Read more <span>→</span> </a>
            
          </div>
        </div>

        <div class="whatwedo-item">
          
          <div class="whatwedo-text">
            <h4>Gynecology Care</h4>
            <p>Comprehensive women’s health services including prenatal and reproductive care.</p>
              <a href="service3.php" class="read-more"> Read more <span>→</span> </a>
          </div>
        </div>

      </div>

      <!-- CENTER IMAGE -->
      <div class="whatwedo-center">
        <img src="/primehealth/images/doctors1.png" alt="Doctor">
      </div>

      <!-- RIGHT SERVICES -->
      <div class="whatwedo-col right">

        <div class="whatwedo-item">
         
          <div class="whatwedo-text">
            <h4>Emergency Checkups</h4>
            <p>Immediate medical attention with expert emergency care services.</p>
            <a href="service4.php" class="read-more"> Read more <span>→</span> </a> 
          </div>
        </div>

        <div class="whatwedo-item">
         
          <div class="whatwedo-text">
            <h4>Neurology Treatment</h4>
            <p>Specialized care for brain and nervous system disorders.</p>
            <a href="service5.php" class="read-more"> Read more <span>→</span> </a> 
           
          </div>
        </div>


        <div class="whatwedo-item">
          
          <div class="whatwedo-text">
            <h4>General Consultation</h4>
            <p>Primary healthcare consultations for routine checkups and early diagnosis.</p>
            <a href="service6.php" class="read-more"> Read more <span>→</span> </a> 
          </div>
        </div>

      </div>

    </div>
  </div>
</section>



<!-- DOCTORS ---------------------------- -->
  <section class="doctors">
  <h2>Meet Our Experts Doctors</h2>
  <p class="doctors-desc">
    Our team of experienced and compassionate doctors are dedicated<br>
    to providing high-quality medical care for you and your family.
  </p>

  <div class="doctor-grid">

    <div class="doctor-card"
      data-name="Dr. Emily Carter"
      data-prof="General Physician"
      data-special="Family Health, Routine Checkups, Preventive Care"
      data-img="images/doctor1.jpg">

      <div class="doctor-img">
        <img src="/primehealth/images/doctor1.jpg" alt="Dr Emily">
      </div>

      <div class="doctor-info">
        <h3>Dr. Emily Carter</h3>
        <span>General Physician</span>
      </div>

      <div class="plus social-icons">
      <i class="fab fa-facebook-f"></i>
      <i class="fab fa-twitter"></i>
      <i class="fab fa-linkedin-in"></i>
      </div>

   </div>

    <div class="doctor-card"
      data-name="Dr. Daniel Wilson"
      data-prof="Cardiologist"
      data-special="Heart Health, Surgery Consultation, Lifestyle Guidance"
      data-img="images/doctor2.jpg">

      <div class="doctor-img">
        <img src="/primehealth/images/doctor2.jpg" alt="Dr Daniel">
      </div>

      <div class="doctor-info">
        <h3>Dr. Daniel Wilson</h3>
        <span>Cardiologist</span>
      </div>

      <div class="plus social-icons">
      <i class="fab fa-facebook-f"></i>
      <i class="fab fa-twitter"></i>
      <i class="fab fa-linkedin-in"></i>
      </div>

    </div>

    <div class="doctor-card"
      data-name="Dr. Sophia Lee"
      data-prof="Pediatrician"
      data-special="Child Health, Vaccinations, Growth Monitoring"
      data-img="images/doctor3.jpg">

      <div class="doctor-img">
        <img src="/primehealth/images/doctor3.jpg" alt="Dr Sophia">
      </div>

      <div class="doctor-info">
        <h3>Dr. Sophia Lee</h3>
        <span>Pediatrician</span>
      </div>

      <div class="plus social-icons">
      <i class="fab fa-facebook-f"></i>
      <i class="fab fa-twitter"></i>
      <i class="fab fa-linkedin-in"></i>
      </div>

    </div>

  </div>
</section>

   <!-- Popup Modal -->
<div id="doctorModal" class="modal">
  <div class="modal-content">

    <span class="close">&times;</span>

    <div class="modal-flex">

      <!-- LEFT SIDE IMAGE -->
      <div class="modal-left">
        <img id="modalImg" src="" alt="">
      </div>

      <!-- RIGHT SIDE CONTENT -->
      <div class="modal-right">
        <h3 id="modalName"></h3>

        <h4 class="modal-heading">Profession</h4>
        <p id="modalProf"></p>

        <h4 class="modal-heading">Specialities</h4>
        <p id="modalSpecial"></p>
      </div>

    </div>

  </div>
</div>



<section class="wellness-summary-section">
  <div class="wellness-summary-container">

    <!-- HEADER -->
    <div class="wellness-summary-header">
      <h2>Boost Your Health & Wellness</h2>
      <p>Explore simple yet powerful habits like meditation, healthy eating, and proper sleep to transform your mind and body.</p>
    </div>

    <!-- CARDS GRID -->
    <div class="wellness-summary-grid">

      <!-- CARD 1: Meditation -->
      <div class="wellness-card">
        <a href="blog.php" class="card-link">
    <img src="/primehealth/images/meditation.jpg" alt="Meditation">
  </a>

        <div class="card-text">
          <h4>Meditation</h4>
          <p>Calms your mind, reduces stress, and enhances focus and clarity daily.</p>
        </div>
      </div>

      <!-- CARD 2: Healthy Foods -->
      <div class="wellness-card">
        <a href="blog.php" class="card-link">
        <img src="/primehealth/images/healthcare.jpg" alt="Healthy Foods">
        </a>
        <div class="card-text">
          <h4>Healthy Foods</h4>
          <p>Nutritious meals boost immunity, energy, and overall wellness effectively.</p>
          </a>
        </div>
      </div>

      <!-- CARD 3: Sleep -->
      <div class="wellness-card">
         <a href="blog.php" class="card-link">
        <img src="/primehealth/images/sleep.jpg" alt="Sleep & Rest">
        </a>
        <div class="card-text">
          <h4>Sleep & Rest</h4>
          <p>Quality sleep restores energy, supports body repair, and improves mood.</p>
        </div>
      </div>

    </div>
  </div>
</section>





<section class="awards-section">
  <div class="awards-container">

    <h2 class="awards-title">Awards</h2>

    <div class="awards-grid">

      <div class="award-card">
        <div class="award-icon">
          <img src="images/award.jpg" alt="Award">
        </div>
        <h4>Malcolm Baldrige National Quality Award</h4>
        <p>
          This award recognizes healthcare organizations that have demonstrated
          excellence in leadership, strategic planning and customer
          satisfaction.
        </p>
      </div>

      <div class="award-card">
        <div class="award-icon">
          <img src="images/award.jpg" alt="Award">
        </div>
        <h4>HIMSS Davies Award</h4>
        <p>
          This award recognizes healthcare organizations that have used health
          information technology to improve patient outcomes and reduce costs.
        </p>
      </div>

      <div class="award-card">
        <div class="award-icon">
          <img src="images/award.jpg" alt="Award">
        </div>
        <h4>Healthgrades National’s Best Hospital</h4>
        <p>
          This recognition is given to hospitals that have achieved high ratings
          for clinical quality and patient safety across multiple specialties.
        </p>
      </div>

      <div class="award-card">
        <div class="award-icon">
          <img src="images/award.jpg" alt="Award">
        </div>
        <h4>Joint Commission Gold Seal of Approval</h4>
        <p>
          This recognition is given to hospitals that have met rigorous standards
          for patient safety and quality of care.
        </p>
      </div>

    </div>
  </div>
</section>



<!-- CTA -->
<section class="cta">
  <h2>Book Your Appointment Today</h2>
  <a href="contact.php" class="btn">Get Started</a>
</section>

<script>
document.querySelectorAll('.faq-item').forEach(item=>{
  item.onclick=()=>{
    const ans=item.querySelector('.faq-answer');
    ans.style.display=ans.style.display==='block'?'none':'block';
  }
});

const faqItems = document.querySelectorAll('.faq-item');

faqItems.forEach(item => {
  item.addEventListener('click', () => {
    const answer = item.querySelector('.faq-answer');

    // toggle answer
    if(answer.style.display === 'block'){
      answer.style.display = 'none';
      answer.style.maxHeight = '0';
      answer.style.opacity = '0';
    } else {
      answer.style.display = 'block';
      answer.style.maxHeight = answer.scrollHeight + "px";
      answer.style.opacity = '1';
    }
  });
});












document.addEventListener("DOMContentLoaded", function () {

  const modal = document.getElementById("doctorModal");
  const modalImg = document.getElementById("modalImg");
  const modalName = document.getElementById("modalName");
  const modalProf = document.getElementById("modalProf");
  const modalSpecial = document.getElementById("modalSpecial");
  const closeBtn = document.querySelector("#doctorModal .close");

  const doctorCards = document.querySelectorAll(".doctor-card");

  doctorCards.forEach(card => {
    card.addEventListener("click", function (e) {

      // social icons click ignore
      if (e.target.closest(".social-icons")) return;

      modal.style.display = "flex";

      modalImg.src = card.dataset.img;
      modalName.textContent = card.dataset.name;
      modalProf.textContent = card.dataset.prof;
      modalSpecial.textContent = card.dataset.special;
    });
  });

  // close button
  closeBtn.addEventListener("click", function () {
    modal.style.display = "none";
  });

  // click outside modal close
  window.addEventListener("click", function (e) {
    if (e.target === modal) {
      modal.style.display = "none";
    }
  });

});







const counters = document.querySelectorAll('.counter');
const speed = 200;

const startCounting = (counter) => {
  let started = false;

  const updateCount = () => {
    const target = +counter.getAttribute('data-target');
    const suffix = counter.getAttribute('data-suffix') || '+';
    const count = +counter.innerText.replace(/\D/g, '');
    const increment = Math.ceil(target / speed);

    if (count < target) {
      counter.innerText = count + increment;
      setTimeout(updateCount, 20);
    } else {
      counter.innerText = target + suffix;
    }
  };

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting && !started) {
          started = true;
          updateCount();
        }
      });
    },
    { threshold: 0.4 } // section 40% visible aagum pothu start
  );

  observer.observe(counter);
};

counters.forEach(counter => {
  counter.innerText = '0';
  startCounting(counter);
});









document.querySelectorAll(".faq-item").forEach(item => {
    item.addEventListener("click", () => {
      item.classList.toggle("active");
    });
  });
</script>



  






  <!--CONTACTS -->

 <!-- CONTACT SECTION -->
<section class="contact-wrapper">

  <div class="contact-container">

    <!-- LEFT IMAGE -->
    <div class="contact-image">
      <img src="/primehealth/images/doctor.jpg" alt="">
    </div>

    <!-- RIGHT FORM -->
    <div class="contact-form-box">
      <h1>Contact Us</h1>
      <p>If you have any questions or need assistance, please fill out the form below and our team will get back to you promptly.</p>

      <form action="#" method="post">
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" placeholder="Your Name" required>

        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" placeholder="Your Email" required>

        <label for="message">Message</label>
        <textarea id="message" name="message" placeholder="Your Message" required></textarea>

        <button type="submit" class="btn-primary">Send Message</button>
      </form>
    </div>

  </div>

</section>



<?php
include 'footer.php';
?>




</body>
</html>







  