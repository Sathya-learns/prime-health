<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PrimeHealth</title>

  <style>
    /* ===== PRIMEHEALTH FOOTER ===== */
   
/* FOOTER STYLES */
.ph-footer {
  background: #144A85;
  color: #ffffff;
  padding: 40px 20px;
  font-family: 'Poppins', sans-serif;
}

.ph-container {
  max-width: 1200px;
  margin: auto;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  gap: 30px;
}

.ph-footer-section {
  flex: 1;
  min-width: 200px;
}

.ph-footer-section h2,
.ph-footer-section h3 {
  color: #00B894;
  margin-bottom: 12px;
}

.ph-footer-section p,
.ph-footer-section li,
.ph-footer-section a {
  color: #ffffff;
  text-decoration: none;
  margin: 4px 0;
}

.ph-footer-section ul {
  list-style: none;
  padding: 0;
}

.ph-footer-section ul li a:hover {
  color: #007BFF;
}

.ph-bottom {
  text-align: center;
  margin-top: 30px;
  padding-top: 15px;
  border-top: 1px solid rgba(255,255,255,0.2);
}



/* Responsive */
@media(max-width:768px){
  .ph-container {
    flex-direction: column;
    text-align: center;
    gap: 20px;
  }
}
.ph-social a {
  color: #ffffff;
  font-size: 20px;
  margin-right: 12px;
  transition: 0.3s;
}

.ph-social a:hover {
  color: #00B894;
}



  </style>

  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</head>
<body>

  <!-- Your page content here -->

  <!-- FOOTER -->
  <footer class="ph-footer">
  <div class="ph-container">

    <!-- Logo & Description -->
    <div class="ph-footer-section">
      <h2>PrimeHealth</h2>
      <p>Your trusted partner for better health and wellness.</p>
    </div>

    <!-- Quick Links -->
    <div class="ph-footer-section">
      <h3>Quick Links</h3>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="blog.php"> Blog</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="faq.php">Faq</a></li>
      </ul>
    </div>


    <!-- Contact Info -->
    <div class="ph-footer-section">
      <h3>Contact</h3>
      <p>Email: info@primehealth.com</p>
      <p>Phone: +91 98765 43210</p>
    </div>

    <!-- Social Media -->
    <div class="ph-footer-section ph-social">
      <h3>Follow Us</h3>
      <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
      <a href="#" target="_blank"><i class="fab fa-whatsapp"></i></a>
      <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
      <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
    </div>
  </div>

  <!-- Bottom Copy -->
  <div class="ph-bottom">
    <p style="color: #ffffff;">© 2025 PrimeHealth. All rights reserved.</p>
  </div>
  <!-- Scroll to Top Button -->
<div id="scrollTopBtn" style="
  background:#4FC3F7;
  color:#fff;
  width:45px;
  height:45px;
  border-radius:50%;
  display:flex;
  justify-content:center;
  align-items:center;
  cursor:pointer;
  font-size:22px;
  position:fixed;
  right:20px;
  bottom:20px;
  box-shadow:0 3px 10px rgba(0,0,0,0.2);
">
  ↑
</div>
  
</footer>
<script>
  const btn = document.getElementById("scrollTopBtn");

  // Show only when user reaches footer
  window.addEventListener("scroll", function () {
    const footer = document.querySelector(".ph-footer");
    const footerTop = footer.offsetTop;

    if (window.scrollY + window.innerHeight >= footerTop) {
      btn.style.display = "flex";   // show
    } else {
      btn.style.display = "none";   // hide on other pages or before footer
    }
  });

  // On click → scroll to top + hide permanently
  btn.addEventListener("click", function () {
    window.scrollTo({
      top: 0,
      behavior: "smooth"
    });

    setTimeout(() => {
      btn.style.display = "none";   // hide forever
    }, 600);
  });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="doctors.js"></script>

</body>
</html>

