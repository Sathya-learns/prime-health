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
  <style>


/* ===== CONTACT BANNER ===== */
.contact-banner {
  position: relative;
  width: 100%;
  height: 83vh; /* adjust height if needed */
  background: url("images/canva10.png") no-repeat center center/cover; /* image if you want */
  overflow: hidden;
}

@media (max-width: 600px){
  .contact-banner{
    min-height: 55vh;
    background-position: center top;   /* 🔥 important */
  }
}


/* RESPONSIVE */
@media (max-width: 992px) {
  .contact-banner-content {
    max-width: 90%;
  }
  .contact-title .line-two {
    font-size: 36px;
  }
}

 /* TOP ROW INFO */
.contact-top {
  background: #D6E9F7;
  padding: 30px 5%;
}

.contact-info {
  display: flex;
  justify-content: space-between;
  gap: 20px;
  max-width: 1200px;
  margin: auto;
}

.info-box {
  background: #fff;
  padding: 20px;
  flex: 1;
  text-align: center;
  border-radius: 10px;
  box-shadow: 0 3px 10px rgba(0,0,0,0.1);
}

.info-box h4 {
  color: #0B2C59;
  margin-bottom: 5px;
}
.contact-bg {
  background: #D6E9F7;
  padding: 60px 0;
}


@media (max-width: 600px){

  .contact-top{
    padding: 25px 15px;
  }

  .contact-info{
    flex-direction: column;
    gap: 20px;
  }

  .info-box{
    padding: 18px;
  }

  .info-box h4{
    font-size: 16px;
  }

  .info-box p{
    font-size: 14px;
  }

  .contact-bg{
    padding: 40px 0;
  }
}


  /* CONTACT SECTION */
.contact-wrapper {
  padding: 60px 5%;
  background: #D6E9F7;
}

/* White box full width */
.contact-container {
  display: flex;
  max-width: 1215px;
  background: #fff;
  margin: auto;
  border-radius: 12px;
  overflow: hidden;
  height: 570px;
  box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

/* LEFT SIDE IMAGE (50%) */
.contact-image {
  flex: 1;
}

.contact-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

/* RIGHT SIDE FORM (50%) */
.contact-form-box {
  flex: 1;
  padding: 40px 35px;
}

.contact-form-box h1 {
  color: #0B2C59;
  font-weight: 700;
  margin-bottom: 10px;
}

.contact-form-box p {
  font-size: 15px;
  margin-bottom: 20px;
  line-height: 1.5;
}

.contact-form-box label {
  display: block;
  margin: 10px 0 5px;
  font-weight: 600;
}

.contact-form-box input,
.contact-form-box textarea {
  width: 100%;
  padding: 10px 14px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 6px;
  font-size: 14px;
}

/* Button */
.btn-primary {
  background: #0066FF;
  color: white;
  padding: 12px 28px;
  border-radius: 6px;
  border: none;
  font-weight: 600;
  transition: 0.3s;
  cursor: pointer;
}

.btn-primary:hover {
  background: #0056d8;
}

.btn-primary {
    position: relative;
    overflow: hidden;
    background: #0066FF;
    color: #fff;
    padding: 12px 28px;
    border-radius: 6px;
    border: none;
    font-weight: 600;
    cursor: pointer;
    transition: background 0.3s ease, transform 0.2s ease, box-shadow 0.3s ease;
}

/* Hover lift */
.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 18px rgba(0,0,0,0.15);
    background: #0056d8;
}

/* White diagonal shine */
.btn-primary::after {
    content: '';
    position: absolute;
    top: -50%;
    left: -75%;
    width: 50%;
    height: 200%;
    background: rgba(255,255,255,0.3);
    transform: rotate(25deg);
    transition: all 0.7s ease;
}

.btn-primary:hover::after {
    left: 125%;
}
/* RESPONSIVE */
@media (max-width: 768px) {
  .contact-container {
    flex-direction: column;
  }

  .contact-image {
    height: 250px;
  }
}




.contact-map-section {
  padding: 60px 20px;
  background: #D6E9F7; /* same contact page theme */
}

.contact-map {
  max-width: 1200px;
  margin: auto;
  height: 400px;
  border-radius: 18px;
  overflow: hidden;
  box-shadow: 0 12px 35px rgba(0,0,0,0.1);
}

.contact-map iframe {
  width: 100%;
  height: 100%;
  border: 0;
}
/* 📱 MOBILE RESPONSIVE — THIS GOES BELOW */
@media (max-width: 768px) {
  .contact-map {
    height: 320px;
  }
}


 </style>
</head>
<body>
    <section class="contact-banner">
  
  
</section>


<!-- CONTACT INFO TOP ROW -->
<section class="contact-top">
  <div class="contact-info">
    <div class="info-box">
      <h4>📞 Phone</h4>
      <p>+91 98765 43210</p>
    </div>

    <div class="info-box">
      <h4>📧 Email</h4>
      <p>info@primehealth.com</p>
    </div>

    <div class="info-box">
      <h4>📍 Address</h4>
      <p>Chennai, Tamil Nadu</p>
    </div>
  </div>
</section>

<!-- CONTACT MAP SECTION -->
<section class="contact-map-section">
  <div class="contact-map">
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15554.171740470955!2d80.2707186!3d13.0826802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5265d084870ab7%3A0xafff9caa1e0c6f0a!2sChennai%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1706151123456"
      loading="lazy"
      allowfullscreen>
    </iframe>
  </div>
</section>


   <!-- CONTACT SECTION -->
<section class="contact-wrapper" id="book-appointment">


  <div class="contact-container">

    <!-- LEFT IMAGE -->
    <div class="contact-image">
      <img src="images/doctor.jpg" alt="">
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
include 'footer.php'; // include footer
?>
</body>
</html>



