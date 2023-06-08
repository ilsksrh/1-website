<?php
session_start();
if (isset($_COOKIE['username'])) {
  $username = $_COOKIE['username'];
} else {
  header("Location: login.php");
  exit();
}
?>
<!DocType html>
<html lang="en">
<head>
  <!-- -->
  <meta name = "viewport" content = "width=device-width, initial-scale = 1.0">
  <title>Best EduNy</title>
  <link rel="stylesheet" href = "styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/1320f1c566.js" crossorigin="anonymous"></script>
</head>
<body>

<section class = "sub-header">
  <nav>
    <a href = "cabinet.php"><img src = "../FinalProjectWork/images/logo.png" alt=""></a>
    <div class = "nav-links">
      <ul>
        <li> <a href = "cabinet.php"> HOME </a></li>
        <li> <a href = "about.php"> ABOUT </a></li>
        <li> <a href = "course.php"> COURSES </a></li>
        <li> <a href = "blog.php"> BLOG </a></li>
        <li> <a href = "price.php"> PRICE </a></li>
        <li> <a href = "contact.php"> CONTACT</a></li>
        <li><a href = "#"><i class="fa-sharp fa-solid fa-circle-chevron-down"></i> <?php echo $username ?></a>
          <div class="sub-menu">
            <ul>
              <li><a href="#">My Cart</a></li>
              <li><a href="results_page.php">Results</a></li>
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </nav>
  <h1>About Us</h1>
</section>
<!-------------------- about us content -------------------->

<section class ="about-us">
  <div class = "row">
    <div class="about-col">
      <h1>We are the world's largest university</h1>
      <p>Every individual has the potential to create change, whether in their life, their community, or the world.
        The transformative power of education is what unlocks that potential. Yet, access to high-quality education has been a privilege of the few.
        Back in 2012, we realized it was a time for a seismic shift in learning. From the tried and true to the leading edge. From 'for some' to 'for all.'
        By opening the classroom through online learning, EduFord empowers millions of learners to unlock their potential and become change makers.</p>
      <a href ="" class = "hero-btn red-btn"> EXPLORE NOW</a>
    </div>
    <div class="about-col">
      <video src="../FinalProjectWork/images/NU.mp4" controls loop></video>
    </div>
  </div>
</section>

<!--- footer --->
<section class = "footer">
  <h4> About Us </h4>
  <p> Our mission is to provide quality education and empower individuals to achieve their full potential.</p>
  <div class = "icons">
    <a href = "https://www.facebook.com/"><i class="fa-brands fa-facebook"> </i></a>
    <a href = "https://www.instagram.com/"><i class="fa-brands fa-instagram"> </i></a>
    <a href = "https://www.twitter.com/"><i class="fa-brands fa-twitter"> </i></a>
    <a href = "https://www.linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a>
  </div>
</section>
</body>
</html>
