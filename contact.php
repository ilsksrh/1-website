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
<html>
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
  <h1>Contact Us</h1>
</section>
<!-------------------------Contact Us_------------------>
<section class="location">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46524.27530021406!2d76.83529283801221!3d43.214371821967404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3883685804a93795%3A0x38849e5598fa1531!2z0J3QsNGA0YXQvtC3!5e0!3m2!1skk!2skz!4v1678361609935!5m2!1skk!2skz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
<section class = "contact-us">
  <div class="row">
    <div class = "contact-col">
      <div>
        <i class ="fa fa-home"></i>
        <span>
					<h5>NARXOZ University</h5>
					<p>Almaty, Kazakhstan</p>
				</span>
      </div>
      <div>
        <i class ="fa fa-phone"></i>
        <span>
					<h5>+77072002004</h5>
					<p>Monday to Saturday, 10AM to 6PM</p>
				</span>
      </div>
      <div>
        <i class ="fa fa-envelope-o"></i>
        <span>
					<h5>sara.ilesbek@narxoz.kz</h5>
					<p>Email us your query</p>
				</span>
      </div>
    </div>
    <div class = "contact-col">
      <form id="contact-form">
        <input type="text" placeholder = "Enter your subject" required >
        <textarea rows="8" placeholder="Message" required></textarea>
        <button type = "submit" class = "hero-btn red-btn" id ="post">Send Message</button>
      </form>
    </div>
  </div>
  <div class = "popup" style = "display: none;" id="popup">
    <img src="../FinalProjectWork/images/tick1.png" alt="">
    <h2>Thank You!</h2>
    <p>We received your message! <br>
      We will answer as soon as possible.</p>
    <button type="button" class="ok-btn" id = "ok-btn">OK</button>
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
<script>
  const sendMessage= document.getElementById('post');
  const popupWindow = document.getElementById('popup');
  const okButton = document.getElementById('ok-btn');
  sendMessage.addEventListener('click', function(event) {
    event.preventDefault();
    popupWindow.classList.add("open-popup");
    popupWindow.style.display="block";

  });
  okButton.addEventListener('click', function() {
    popupWindow.style.display='none';
    location.reload();
  });
</script>
</body>
</html>
