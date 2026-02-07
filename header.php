<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Prime health</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- NAVBAR CSS -->
    <style>


     





        /* Navbar Container */
        .navbar {
            width: 100%;
            height: 125px;
            padding: 0px 40px;
            background: #ffffff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0px 2px 10px rgba(0,0,0,0.05);
            font-family: 'Poppins', sans-serif;
        }

        
        /* Logo */
        .logo-area {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo-area img {
            height: 140px;
            
        }

        .logo-text {
            font-size: 26px;
            font-weight: 700;
            color: #0B2C59;
        }

        /* Nav Links - Laptop & Tab */
        .nav-links {
            list-style: none;
            display: flex;
            gap: 30px;
            margin-right: -200px;
        }

        .nav-links li a {
            text-decoration: none;
            font-size: 20px;
            font-weight: 500;
            color: #0B2C59;
            transition: 0.3s;
        }

        .nav-links li a:hover {
            color: #007BFF;
        }

        /* Primary Button */
.primary-btn {
    background: #0066ff;
    color: #fff;
    padding: 10px 24px;
    border-radius: 8px;
    font-weight: 600;
    text-decoration: none;
    position: relative;
    overflow: hidden;
    transition: 0.3s ease;
    position: relative;
    overflow: hidden;

    margin-top: -9px;
}

/* Neon Glow + Slight Scale on Hover */
.primary-btn:hover {
    transform: scale(1.08);
    box-shadow: 0 0 18px rgba(0, 153, 255, 0.8);
}

/* Glowing Glass Moving Effect */
.primary-btn::before {
    content: "";
    position: absolute;
    top: 0;
    left: -150%;
    width: 120%;
    height: 100%;
    background: rgba(255, 255, 255, 0.35);
    backdrop-filter: blur(6px);
    border-radius: 8px;
    transform: skewX(-25deg);
    transition: 0.7s ease;
}





/* Move the Glass Across */
.primary-btn:hover::before {
    left: 150%;
}
/* Offset for fixed navbar height */
:target::before {
  content: "";
  display: block;
  height: 135px; /* change to your navbar height */
  margin-top: -135px; 
  visibility: hidden;
}

/* Smooth scroll */
html {
  scroll-behavior: smooth;
}


        /* Hamburger Hidden by Default */
        .hamburger {
            display: none;
            font-size: 28px;
            cursor: pointer;
            color: #0B2C59;
        }

        #menu-toggle {
            display: none;
        }

        /* MOBILE RESPONSIVE */
        @media(max-width: 900px) {

            /* Hide desktop menu on mobile */
            .nav-links,
            .primary-btn {
                display: none;
            }

            /* Show hamburger icon on mobile */
            .hamburger {
                display: block;
            }

            /* Show menu when hamburger clicked */
            #menu-toggle:checked ~ .nav-links,
            #menu-toggle:checked ~ .primary-btn {
                display: block;
            }

            .nav-links {
                position: absolute;
                top: 75px;
                left: 0;
                width: 100%;
                background: #FFFFFF;
                padding: 20px 0;
                flex-direction: column;
                text-align: center;
                gap: 20px;
                box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
            }

            .primary-btn {
                margin: 20px auto;
                display: block;
                text-align: center;
                width: 80%;
            }
        }


        /* Hamburger hidden on desktop */
.hamburger {
  display: none;
  font-size: 28px;
  cursor: pointer;
  color: #0B2C59;
}

#menu-toggle {
  display: none;
}

/* ==========================
   MOBILE & TABLET
========================== */
@media (max-width: 992px) {

  /* Hide desktop items */
  .nav-links,
  .primary-btn {
    display: none;
  }

  /* Show hamburger */
  .hamburger {
    display: block;
  }

  /* Dropdown menu */
  .nav-links {
    position: absolute;
    top: 100%;
    left: 0;
    width: 100%;
    background: #ffffff;
    flex-direction: column;
    align-items: center;
    gap: 20px;
    padding: 25px 0;
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    z-index: 1000;
  }

  /* Show when clicked */
  #menu-toggle:checked ~ .nav-links {
    display: flex;
  }

  /* Button inside menu */
  #menu-toggle:checked ~ .primary-btn {
    display: block;
    position: absolute;
    top: calc(100% + 230px);
    left: 50%;
    transform: translateX(-50%);
    width: 80%;
    text-align: center;
  }
}

@media (max-width: 992px) {

  /* Hide desktop menu */
  .nav-links {
    display: none;
    position: absolute;
    top: 125px;
    left: 0;
    width: 100%;
    background: #ffffff;
    flex-direction: column;
    align-items: center;
    gap: 20px;
    padding: 25px 0;
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
  }

  /* Show menu */
  #menu-toggle:checked ~ .nav-links {
    display: flex;
  }

  /* Button inside menu */
  .nav-links .primary-btn {
    width: 80%;
    text-align: center;
    margin-top: 15px;
  }

  /* Hamburger */
  .hamburger {
    display: block;
    font-size: 28px;
    cursor: pointer;
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
  max-width: 1190px;
  background: #fff;
  margin: auto;
  border-radius: 12px;
  overflow: hidden;
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





    </style>

</head>

<body>





    <!-- NAVBAR START -->
    <nav class="navbar">
    <div class="logo-area">
        <img src="images/logo.png" alt="Prime Health Logo">
    </div>

    <!-- Mobile Menu Toggle -->
    <input type="checkbox" id="menu-toggle">
    <label for="menu-toggle" class="hamburger">
        <i class="fas fa-bars"></i>
    </label>

    <!-- Desktop / Tablet Menu -->
    <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="faq.php">Faq</a></li>
        
       
    </ul>

    <a href="contact.php#book-appointment" class="primary-btn">Book Appointment</a>


</nav>
<!-- NAVBAR END -->




