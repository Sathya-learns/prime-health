<?php
include 'header.php'; // include navbar
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Blog Details</title>
  <link rel="stylesheet" href="blog-details.css">

  <!-- Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>

body {
  margin: 0;
  font-family: 'Segoe UI', sans-serif;
  background: #D6E9F7;
}

/* SECTION */
.blog-details-section {
  max-width: 1200px;
  margin: auto;
  padding: 70px 20px;
}

/* TITLE */
.blog-details-title {
  font-size: 44px;
  font-weight: 700;
  color: #24445c;
  line-height: 1.3;
  margin-bottom: 35px;
}

/* CATEGORY BUTTONS */
.blog-category-buttons {
  display: flex;
  flex-wrap: wrap;
  gap: 15px;
  margin-bottom: 30px;
}

.blog-category-buttons a {
  padding: 10px 26px;
  border-radius: 30px;
  border: 1.8px solid #0066FF;
  color: #24445c;
  font-size: 15px;
  text-decoration: none;
  transition: all 0.35s ease;
}

.blog-category-buttons a:hover {
  background: #0066FF;
  color: #ffffff;
}

/* SHARE */
.blog-share {
  display: flex;
  align-items: center;
  gap: 15px;
  margin-bottom: 40px;
}

.blog-share span {
  font-size: 15px;
  color: #666;
}

.blog-share a {
  width: 42px;
  height: 42px;
  border-radius: 50%;
  border: 1.5px solid #0066FF;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #0066FF;
  transition: all 0.35s ease;
}

.blog-share a:hover {
  background: #0066FF;
  color: #fff;
}

/* BIG IMAGE */
.blog-details-image img {
  width: 100%;
  height: 520px;
  object-fit: cover;
  border-radius: 26px;
  box-shadow: 0 25px 60px rgba(0,0,0,0.15);
}



.blog-detail-wrapper {
  background: #D6E9F7;
  padding: 80px 20px;
}

.blog-detail-container {
  max-width: 1400px;
  margin: auto;
  display: grid;
  grid-template-columns: 2.3fr 1fr;
  gap: 50px;
}

/* LEFT CONTENT */
.blog-content-left {
  background: #D6E9F7;
  padding: 50px;

 
}

.blog-main-title {
  font-size: 36px;
  color: #003d66;
  margin-bottom: 20px;
}

.blog-content-left p {
  font-size: 16px;
  line-height: 1.8;
  color: #444;
  margin-bottom: 18px;
}

.blog-content-left h3 {
  margin: 30px 0 15px;
  color: #003d66;
}

.anxiety-list {
  list-style: none;
  padding-left: 0;
}

.anxiety-list li {
  margin-bottom: 22px;
  line-height: 1.7;
}

/* RIGHT SIDEBAR */
.blog-sidebar {
  display: flex;
  flex-direction: column;
  gap: 30px;
}

/* CATEGORY CARD */
.sidebar-card {
  background: #fff;
  padding: 30px;
  border-radius: 18px;
  box-shadow: 0 0 0 rgba(0,0,0,0);
  transition: box-shadow 0.4s ease;
  
}

.sidebar-card:hover {
  box-shadow: 0 0 25px rgba(0,102,255,0.25);
}

.sidebar-card h4 {
  margin-bottom: 20px;
  font-size: 20px;
  color: #003d66;
}

.category-list {
  list-style: none;
  padding: 0;
}

.category-list li {
  display: flex;
  align-items: center;
  gap: 12px;
  font-size: 15px;
  color: #333;
  margin-bottom: 15px;
}

.cat-icon {
  font-size: 20px;
}

/* IMAGE CARDS */
.sidebar-images {
  display: grid;
  grid-template-columns: 1fr;
  gap: 20px;
}

.image-card {
  background: #fff;
  border-radius: 18px;
  overflow: hidden;
  transition: transform 0.4s ease, box-shadow 0.4s ease;
}

.image-card img {
  width: 100%;
  height: 160px;
  object-fit: cover;
}

.image-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 0 30px rgba(0,102,255,0.3);
}

/* RESPONSIVE */
@media (max-width: 900px) {
  .blog-detail-container {
    grid-template-columns: 1fr;
  }

  .blog-content-left {
    padding: 30px;
  }
}

.blog-layout {
  max-width: 1300px;
  margin: auto;
  padding: 80px 20px;
  display: grid;
  grid-template-columns: 2.7fr 1fr;
  gap: 50px;
}

/* LEFT CONTENT */
.blog-left h1 {
  font-size: 38px;
  color: #0B2C59;
  margin-bottom: 15px;
}

.blog-left h2 {
  font-size: 26px;
  margin-top: 40px;
  color: #1E6FD9;
}

.blog-left p {
  font-size: 17px;
  line-height: 1.8;
  color: #444;
  margin-top: 15px;
}

/* RIGHT SIDE */
.blog-right {
  position: sticky;
  top: 100px;
  margin-top: 150px; 
}

.info-box {
  background: #F4F8FF;
  padding: 30px;
  border-radius: 14px;
  margin-bottom: 25px;
}

/* HOVER EFFECT */
.info-box:hover {
  transform: translateY(-6px);
  box-shadow: 0 18px 40px rgba(11, 44, 89, 0.18);
  background: #ffffff;
  border-color: #1E6FD9;
}

/* Heading hover subtle highlight */
.info-box:hover h3 {
  color: #1E6FD9;
}
.info-box h3 {
  color: #0B2C59;
  margin-bottom: 10px;
}

.info-box p,
.info-box li {
  font-size: 15px;
  color: #555;
  line-height: 1.6;
}

.info-box ul {
  padding-left: 18px;
}

/* RESPONSIVE */
@media (max-width: 992px) {
  .blog-layout {
    grid-template-columns: 1fr;
  }

  .blog-right {
    position: static;
  }
}


</style>
</head>
<body>

<section class="blog-details-section">

  <!-- HEADING -->
  <h1 class="blog-details-title">
    The Importance of Mental Health: Understanding and Managing Anxiety Disorders
  </h1>

  <!-- CATEGORY BUTTONS -->
  <div class="blog-category-buttons">
    <a href="service4.php">Emergency</a>
    <a href="service1.php">Cardiology</a>
    <a href="service5.php">Neurology</a>
    <a href="service3.php">Gynecology</a>
    <a href="service2.php">Pediatric</a>
    <a href="service6.php">General</a>
  </div>

  <!-- SOCIAL SHARE -->
  <div class="blog-share">
    <span>Share:</span>
    <a href="#"><i class="fab fa-facebook-f"></i></a>
    <a href="#"><i class="fab fa-linkedin-in"></i></a>
    <a href="#"><i class="fab fa-twitter"></i></a>
  </div>

  <!-- BIG IMAGE -->
  <div class="blog-details-image">
    <img src="images/meditation.jpg" alt="Mental Health Blog">
  </div>

</section>

<section class="blog-detail-wrapper">

  <div class="blog-detail-container">

    <!-- LEFT CONTENT -->
    <div class="blog-content-left">

      <h2 class="blog-main-title">What is Anxiety Disorders</h2>

      <p>
        Anxiety disorders are a type of mental health disorder characterized by feelings of worry,
        anxiety, or fear that are strong enough to interfere with one's daily activities.
      </p>

      <p>
        These feelings may be brought on by certain situations, often relating to stress or trauma,
        but can also occur without any apparent reason.
      </p>

      <h3>There are several types of anxiety disorders, including:</h3>

      <ul class="anxiety-list">
        <li>
          <strong>Generalized Anxiety Disorder (GAD):</strong><br>
          Chronic anxiety, exaggerated worry, and tension even when there is little or nothing to provoke it.
        </li>

        <li>
          <strong>Panic Disorder:</strong><br>
          Repeated episodes of sudden intense anxiety and fear that peak within minutes.
        </li>

        <li>
          <strong>Phobia-related disorders:</strong><br>
          Intense fear or aversion to specific situations or objects.
        </li>

        <li>
          <strong>Social Anxiety Disorder (Social Phobia):</strong><br>
          Fear or embarrassment in social performance-based situations.
        </li>

        <li>
          <strong>Obsessive-Compulsive Disorder (OCD):</strong><br>
          Recurrent unwanted thoughts and repetitive behaviors.
        </li>

        <li>
          <strong>Post-Traumatic Stress Disorder (PTSD):</strong><br>
          Develops after exposure to a terrifying event.
        </li>
      </ul>

    </div>

    <!-- RIGHT SIDE -->
    <aside class="blog-sidebar">

      <!-- POPULAR CATEGORIES -->
      <div class="sidebar-card">
        <h4>Popular Categories</h4>

        <ul class="category-list">
          <li>
            <span class="cat-icon">📘</span>
            Health Tips and Tricks
          </li>
          <li>
            <span class="cat-icon">📊</span>
            Trends and Analysis
          </li>
          <li>
            <span class="cat-icon">⏱️</span>
            Time Management
          </li>
        </ul>
      </div>

      <!-- IMAGE CARDS -->
      <div class="sidebar-images">

        <div class="image-card">
          <img src="images/side1.jpg" alt="">
        </div>

        <div class="image-card">
          <img src="images/side2.jpg" alt="">
        </div>

        <div class="image-card">
          <img src="images/side3.jpg" alt="">
        </div>

      </div>

    </aside>

  </div>
</section>


<section class="blog-layout">

  <!-- LEFT CONTENT -->
  <div class="blog-left">

    <h1>How to Manage Anxiety Disorders: Techniques and Strategies</h1>

    <p>
      Anxiety disorders can be overwhelming and interfere with daily life, but there are ways to manage these feelings.
      From self-care strategies to professional help, below are methods to effectively cope with anxiety disorders.
    </p>

    <h2>1. Professional Treatment</h2>

    <p>
      If you are dealing with an anxiety disorder, seeking professional help is crucial. Mental health professionals
      can provide a diagnosis and suggest appropriate treatment options. These typically include:
    </p>

    <h2>2. Self-Care Techniques</h2>

    <p>
      In addition to professional treatment, there are several self-care strategies that you can adopt to help manage anxiety:
    </p>

    <p><strong>Mindful meditation and relaxation techniques:</strong>
      Deep breathing exercises, progressive muscle relaxation, and mindfulness meditation can reduce symptoms of anxiety
      by promoting relaxation and reducing feelings of fear and worry.
    </p>

    <p><strong>Healthy lifestyle:</strong>
      Regular physical exercise, a healthy diet, adequate sleep, and reducing caffeine and alcohol can also help manage
      anxiety symptoms.
    </p>

    <p><strong>Maintaining a positive outlook:</strong>
      While it may seem challenging, it's beneficial to focus on positive aspects of your life. Gratitude exercises or
      maintaining a journal to record positive experiences can assist in cultivating an optimistic outlook.
    </p>

    <p><strong>Avoiding avoidance:</strong>
      It's common for people with anxiety to avoid situations or objects that trigger their anxiety. However, avoiding
      these triggers can reinforce the fear. Safe exposure to these triggers under the guidance of a therapist can help
      in managing and eventually reducing anxiety.
    </p>

  </div>

  <!-- RIGHT SIDE (OPTIONAL – STANDARD HEALTHCARE CONTENT) -->
  <aside class="blog-right">

    <div class="info-box">
      <h3>Need Help?</h3>
      <p>
        If anxiety is affecting your daily life, professional guidance can help you regain balance and confidence.
      </p>
    </div>

    <div class="info-box">
      <h3>Related Services</h3>
      <ul>
        <li>Psychiatric Consultation</li>
        <li>Behavioral Therapy</li>
        <li>Stress Management</li>
        <li>Mindfulness Programs</li>
      </ul>
    </div>

  </aside>

</section>

<?php
include 'footer.php'; // include footer
?>


</body>
</html>
