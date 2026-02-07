<?php
include 'header.php'; // This includes your navbar
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>FAQ Page 1</title>
  <link rel="stylesheet" href="faq-common.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>




  /* ===== FAQ BANNER FULL IMAGE ===== */
/* ===== FAQ BANNER FULL IMAGE ===== */
.faq-banner {
  position: relative;
  width: 100%;
  height: 83vh;
  overflow: hidden;
}

/* FULL IMAGE */
.faq-banner-image {
  position: absolute;
  inset: 0;
  background: url("images/canva9.png") no-repeat center center/cover;
  z-index: 1;
}

/* NAVY BLUE TRANSPARENT OVERLAY */
.faq-banner-overlay {
  position: absolute;
  inset: 0;
  background: rgba(0, 40, 120, 0.4); /* light navy overlay */
  z-index: 2;
}


/* RESPONSIVE */
@media (max-width: 992px) {
  .faq-banner-content {
    max-width: 90%;
    top: 45%;
    text-align: center;
  }
  .faq-title .line-two {
    font-size: 36px;
  }
}


/* ================= FAQ SECTION ================= */

.faq-section {
  background: #D6E9F7;
  padding: 80px 0 140px; /* footer gap FIXED */
}

.faq-container {
  max-width: 1200px;
  margin: auto;
  display: flex;
  gap: 60px;
  align-items: flex-start; /* ❗ image jump FIX */
  padding: 0 20px;
}

/* ---------------- LEFT CONTENT ---------------- */

.faq-left {
  flex: 1;
  max-width: 560px; /* ❗ left side limit only */
}

.faq-left h2 {
  font-size: 36px;
  color: #0B2C59;
  margin-bottom: 15px;
}

.faq-left p {
  color: #444;
  margin-bottom: 35px;
  line-height: 1.7;
}

/* ---------------- ACCORDION ---------------- */

.faq-item {
  margin-bottom: 18px;
}

.faq-question {
  width: 100%;
  background: #0066FF;
  color: #fff;
  border: none;
  padding: 18px 25px;
  border-radius: 50px;
  font-size: 16px;
  font-weight: 500;
  display: flex;
  justify-content: space-between;
  align-items: center;
  cursor: pointer;
}

.faq-question span {
  font-size: 22px;
}

.faq-answer {
  display: none;
  background: #ffffff;
  color: #444;
  padding: 20px 25px;
  border-radius: 20px;
  margin-top: 10px;
  line-height: 1.6;
}

/* ---------------- RIGHT IMAGE ---------------- */

.faq-right {
  flex: 1;
  text-align: center;
}

.faq-right img {
  width: 100%;
  height: 390px;
  max-width: 550px; /* ❗ desktop image size */
  border-radius: 20px;
}

/* ---------------- SWAP LEFT/RIGHT ---------------- */
.faq-container.swap-left-right {
  flex-direction: row-reverse; /* image left, content right */
}

/* For mobile, same stacking works automatically */


/* ================= MOBILE RESPONSIVE ================= */

@media (max-width: 768px) {

  .faq-section {
    padding: 60px 0 120px;
  }

  .faq-container {
    flex-direction: column;
    align-items: center;
    gap: 40px;
  }

  /* IMAGE FIRST & BIGGER */
  .faq-right img {
    max-width: 340px; /* ❗ mobile image bigger */
    margin: 0 auto;
  }

  .faq-left {
    max-width: 100%;
    text-align: center;
  }

  .faq-left h2 {
    font-size: 26px;
  }

  .faq-left p {
    font-size: 15px;
  }

  .faq-question {
    font-size: 15px;
    padding: 15px 20px;
  }

  .faq-answer {
    font-size: 14px;
    text-align: left;
  }
}

/* ================= SMALL MOBILE ================= */

@media (max-width: 480px) {

  .faq-right img {
    max-width: 300px;
  }

  .faq-left h2 {
    font-size: 24px;
  }

  .faq-question {
    font-size: 14px;
  }
}

/* ---------------- FLEX FIX FOR IMAGE LEFT ---------------- */
.faq-left,
.faq-right {
  flex: 1;
  max-width: 560px;
  text-align: left;
}

.faq-left img,
.faq-right img {
  width: 100%;
  height: 390px;
  max-width: 550px;
  border-radius: 20px;
  object-fit: cover;
}

/* SWAP LEFT/RIGHT FOR IMAGE LEFT */
.faq-container.swap-left-right {
  flex-direction: row; /* image left, content right */
}

.faq-container.swap-left-right .faq-left img {
  margin-right: 0;
}

.faq-container.swap-left-right .faq-right {
  max-width: 560px;
}

/* ALIGN CONTENT */
.faq-content-right h2 {
  font-size: 36px;
  color: #0B2C59;
  margin-bottom: 15px;
}

.faq-content-right p {
  color: #444;
  margin-bottom: 35px;
  line-height: 1.7;
}

/* ---------------- ACCORDION HOVER EFFECT ---------------- */
.faq-question:hover {
  background: #0052CC; /* slightly darker blue on hover */
  transform: translateY(-2px); /* subtle lift effect */
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15); /* soft shadow */
  transition: all 0.3s ease;
}

/* Optional: active/open effect when clicked */
.faq-item.active .faq-question {
  background: #0041A8; /* even darker when open */
}


/* ================= BLOG HERO ================= */

.blog-hero-section{
  padding: 100px 0;
  background: #D6E9F7;
}

.blog-hero-container{
  max-width: 1230px;
  margin: auto;
  position: relative;
  border-radius: 28px;
  overflow: hidden;
}

/* IMAGE */
.blog-hero-container img{
  width: 100%;
  height: 500px;
  object-fit: cover;
  display: block;
}

/* OVERLAY GRADIENT */
.blog-hero-container::after{
  content:'';
  position:absolute;
  inset:0;
  background: linear-gradient(
    90deg,
    rgba(0,0,0,0.15) 0%,
    rgba(120,190,255,0.45)
  );
}

/* TEXT OVER IMAGE */
.blog-hero-overlay{
  position:absolute;
  top:50%;
  right:80px;
  transform: translateY(-50%);
  z-index:2;
  color: #OB2C59;
  max-width: 520px;
}

.blog-hero-overlay h2{
  font-size: 44px;
  line-height: 1.25;
  margin-bottom: 18px;
}

.blog-hero-overlay p{
  font-size: 18px;
  line-height: 1.6;
  opacity: 0.95;
}



/* ================= RESPONSIVE ================= */

@media (max-width: 767px) {

  .blog-hero-section {
    padding: 50px 15px;
  }

  .blog-hero-container img {
    height: 320px;
  }

  .blog-hero-overlay {
    position: absolute;
    top: 50%;
    right: 50%;
    transform: translate(50%, -50%);
    text-align: center;
    max-width: 90%;
  }

  .blog-hero-overlay h2 {
    font-size: 26px;
    line-height: 1.3;
  }

  .blog-hero-overlay p {
    font-size: 15px;
  }
}






  </style>

</head>
<body>



<section class="faq-banner">
  <!-- FULL IMAGE -->
  <div class="faq-banner-image">
    <div class="faq-banner-overlay"></div>
  </div>

  
</section>



<section class="faq-section">
  <div class="faq-container">

    <!-- LEFT FAQ -->
    <div class="faq-left">

      <h2>Frequently Asked Questions</h2>
      <p>
        Save time and find instant solutions without the hassle.
        From detailed guidance to quick tips, everything you need
        is just a click away.
      </p>

      <div class="faq-item">
        <button class="faq-question">
          What is Telemedicine?
          <span>+</span>
        </button>
        <div class="faq-answer">
          Telemedicine allows patients to consult doctors online
          using video calls, chat, or phone calls.
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question">
          How do I schedule an online consultation?
          <span>+</span>
        </button>
        <div class="faq-answer">
          You can book an appointment through our website by
          selecting a doctor and preferred time slot.
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question">
          Do you accept insurance?
          <span>+</span>
        </button>
        <div class="faq-answer">
          Yes, we accept selected insurance providers.
          Please contact support for confirmation.
        </div>
      </div>

    </div>

    <!-- RIGHT IMAGE -->
    <div class="faq-right">
      <img src="images/faq.jpg" alt="FAQ Image">
    </div>

  </div>
</section>

<section class="faq-section">
  <div class="faq-container">

    <!-- LEFT IMAGE -->
    <div class="faq-left faq-image-left">
      <img src="images/faq2.jpg" alt="FAQ Image Left">
    </div>

    <!-- RIGHT FAQ -->
    <div class="faq-right faq-content-right">
      <h2>Common Questions Answered</h2>
      <p>
        Get clear answers to your most common queries. From procedures to policies, everything
        is explained simply and quickly.
      </p>

      <div class="faq-item">
        <button class="faq-question">
          What is a Health Checkup Package?
          <span>+</span>
        </button>
        <div class="faq-answer">
          A health checkup package is a combination of medical tests designed to evaluate your overall health.
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question">
          How long does an online consultation last?
          <span>+</span>
        </button>
        <div class="faq-answer">
          Typically, online consultations last between 15 to 30 minutes depending on the case.
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question">
          Can I get a prescription online?
          <span>+</span>
        </button>
        <div class="faq-answer">
          Yes, after a consultation, your doctor can provide a digital prescription that is valid at pharmacies.
        </div>
      </div>

    </div>
  </div>
</section>
<section class="blog-hero-section">
  <div class="blog-hero-container">

    <img src="images/portrait.jpg" alt="Health Blog">

    <div class="blog-hero-overlay">
      <h2>Don’t Let Your Health<br>Take a Backseat!</h2>
      <p>
        Schedule an appointment with one of our
        experienced medical professionals today!
      </p>
    </div>

  </div>
</section>





      

   



<script>
  const questions = document.querySelectorAll(".faq-question");

  questions.forEach(q => {
    q.addEventListener("click", () => {
      const answer = q.nextElementSibling;
      const icon = q.querySelector("span");

      if (answer.style.display === "block") {
        answer.style.display = "none";
        icon.textContent = "+";
      } else {
        answer.style.display = "block";
        icon.textContent = "−";
      }
    });
  });





 



</script>








<?php
include 'footer.php'; // include footer
?>


</body>
</html>
