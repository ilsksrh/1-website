<?php
session_start();

if (isset($_COOKIE['username'])) {
    $username = $_COOKIE['username'];
    $file = fopen("users.txt", "r");
    while (($line = fgets($file)) !== false) {
        $fields = explode(",", trim($line));
        if ($fields[0] == $username) {
            $fullname = $fields[2] . ' ' . $fields[3];
            break;
        }
    }
    fclose($file);
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
<section class = "header">
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
    <div class = "text-box">
        <h1>Hello, <?php echo $fullname?>. Welcome to your cabinet!</h1>
        <p>Enhance your knowledge and achieve your career goals with our flexible and interactive online courses taught by expert instructors.
            Start learning today from anywhere at your own pace!</p>
        <a href = "course.php" class = "hero-btn"> What do you want to learn today? </a>

    </div>
</section>
<!--- course part ---->
<section class ="course">
    <h1> Explore 4,000+ Free Online Courses </h1>
    <p> We offer a diverse range of courses, including language learning, coding, leadership development, and more. </p>
    <div class = "row">
        <div class = "course-col">
            <h3> Language learning </h3>
            <p> Our language learning courses are designed to help you master a new language in a fun and interactive way. With expert instructors and flexible scheduling, you can learn a new language from anywhere, at any time. </p>
            <i class="fa-solid fa-angle-right"></i>
        </div>
        <div class = "course-col">
            <h3> Coding </h3>
            <p> Coding provide a comprehensive learning experience for both beginners and experienced coders. With expert instructors and hands-on practice, you can develop the skills you need to succeed in the fast-paced world of technology. </p>
            <i class="fa-solid fa-angle-right"></i>
        </div>
        <div class = "course-col">
            <h3> Math learning </h3>
            <p> Our math learning courses provide a solid foundation in math fundamentals and advanced topics. With expert instructors and interactive learning tools, you can improve your math skills and achieve your academic and career goals. </p>
            <i class="fa-solid fa-angle-right"></i>

        </div>
    </div>
</section>

<section class="reviews">
    <h1> What Our Users says</h1>
    <p> Discover why our users love our product through their glowing testimonials </p>
    <div class = "row">
        <div class = "rev-col">
            <img src="../FinalProjectWork/images/s1.png" alt="">
            <div>
                <p> I was skeptical about the quality and effectiveness of virtual learning. But after enrolling, I was blown away by the interactive and engaging content, as well as the support from knowledgeable instructors. Thanks to these courses, I have gained valuable skills and knowledge that have opened up new opportunities in my career. </p>
                <h3> Christine Berkley </h3>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
            </div>
        </div>
        <div class = "rev-col">
            <img src="../FinalProjectWork/images/s2.jpg" alt="">
            <div>
                <p> Taking these online courses was like a virtual roller coaster ride, but without the nausea. The instructors were like theme park attendants, guiding us through the twists and turns of complex topics. And just like a roller coaster, I came out of the course feeling exhilarated and a little dizzy. <br> 10/10 would ride again! </p>
                <h3> David Byer </h3>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half-stroke"></i>
            </div>
        </div>
    </div>
</section>

<section class = "cta">
    <h1> Enroll For Our Various Online Courses <br> Anywhere From The World </h1>
    <a href="contactUs.html" class="hero-btn"> CONTACT US </a>
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