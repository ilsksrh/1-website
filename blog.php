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
<html lang="">
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
  <h1> Our Certificate & Online Programs For 2023 </h1>
</section>
<!-----------------blog page content------------------->
<section class = "blog-content">
  <div class ="row">
    <div class = "blog-left" >
      <img src = "../FinalProjectWork/images/certificate.jpg" alt="">
      <h2> Our Certificate & Online Programs For 2023 </h2>
      <p>Welcome to our Certificate and Online Programs for 2023! We are excited to offer a variety of courses designed to enhance your skills, knowledge, and career prospects. Our certificate programs are tailored to meet the demands of today's job market, providing you with industry-relevant skills that are highly valued by employers.</p>
      <p>Our online programs are designed to be flexible, allowing you to learn at your own pace and on your own schedule. You'll have access to a range of resources, including interactive course materials, online forums, and expert support, ensuring that you have all the tools you need to succeed. We offer programs in a variety of fields, including business, technology, healthcare, education, and more. Whether you're looking to advance your career, switch to a new field, or simply acquire new skills and knowledge, our programs are designed to meet your needs.
        Upon completion of our programs, you will receive a certificate that demonstrates your mastery of the subject. This will be a valuable addition to your resume, indicating to potential employers that you have the skills and knowledge they are looking for.
        We are committed to providing you with the highest quality education and support, and we look forward to helping you achieve your educational and career goals in 2023 and beyond!</p>
      <div class = "comment-box">
        <h3>Leave a Comment</h3>
        <form class = "comment-form">
          <label>
            <input type="text" placeholder="Enter Name">
          </label>
          <label>
            <input type="email" placeholder="Enter Email">
          </label>
          <label>
            <textarea placeholder="Your comment"></textarea>
          </label>
          <button type="submit" class="hero-btn red-btn">POST COMMENT </button>
        </form>
      </div>
    </div>
    <div class = "blog-right">
      <h3> Schedule information for courses </h3>
      <table>
        <thead>
        <tr>
          <th>Course Title</th>
          <th>Start Date</th>
          <th>Days of Week</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td><a href="course.php">Introduction to Web Development</a></td>
          <td>March 15, 2023</td>
          <td>Tuesdays and Thursdays</td>
        </tr>
        <tr>
          <td><a href="">Business Writing Essentials</a></td>
          <td>April 1, 2023</td>
          <td>Fridays</td>
        </tr>
        <tr>
          <td><a href="">Digital Marketing Fundamentals</a></td>
          <td>May 2, 2023</td>
          <td>Mondays and Wednesdays</td>
        </tr>
        <tr>
          <td><a href="">Project Management Basics</a></td>
          <td>June 5, 2023</td>
          <td>Mondays</td>
        </tr>
        </tbody>
      </table>
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
