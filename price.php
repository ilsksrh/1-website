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
  <h1>Pricing</h1>
</section>
<!--------------------course content -------------------->
<section class ="price">
  <h1> Choose Your Plan </h1>
  <div class = "container">
    <div class = "price-row">
      <div class = "price-col">
        <p>Starter</p>
        <h3>5$<span>/ month</span> </h3>
        <ul>
          <li>Basic Web Builder</li>
          <li>Limited Access</li>
          <li>No SSL Certificates</li>
          <li>Limited Support</li>
        </ul>
        <button> Add to Cart</button>
      </div>
      <div class = "price-col">
        <p>Advanced</p>
        <h3>10$<span>/ month</span> </h3>
        <ul>
          <li>Convenient Web Builder</li>
          <li>Open Access</li>
          <li>Free SSL Certificates</li>
          <li>Limited Support</li>
        </ul>
        <button> Add to Cart</button>
      </div>
      <div class = "price-col">
        <p>Premium</p>
        <h3>15$<span>/ month</span> </h3>
        <ul>
          <li>Advanced Web Builder</li>
          <li>Open Access</li>
          <li>Free SSL Certificates</li>
          <li>Unlimited Support</li>
        </ul>
        <button> Add to Cart</button>
      </div>
    </div>
    <div class="discount">
        <section class = "cta-test">
          <h1> Try to get a 20% discount by passing the test! <br> Make Zero Mistakes </h1>
          <a href="quiz.php" class="hero-btn"> Let's try </a>
        </section>
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
