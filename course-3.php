<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>course-3</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="home.php" class="logo"> <img src="images/log_psb.png" alt="">  </a>

    <div id="menu-btn" class="fas fa-bars"></div>

    <nav class="navbar">
        <ul>
            <li><a href="home.php">Главная</a></li>
            <li><a href="about.php">Твой наставник</a></li>
            <li><a href="#">Твой план</a>
                <ul>
                    <li><a href="course-1.php">день 1</a></li>
                    <li><a href="course-2.php">день 2</a></li>
                    <li><a href="course-3.php">день 3</a></li>
                    <li><a href="course-3.php">день 4</a></li>
                    <li><a href="course-3.php">день 5</a></li>
                    <li><a href="course-3.php">день 6</a></li>
                    <li><a href="course-7.php">день 7</a></li>

                </ul>
            <li><a href="teachers.php">Наша команда</a></li>
            <li><a href="contact.php">наши контакты</a></li>
            <li><a href="achievements.php">Достижения</a></li>
        </ul>
    </nav>

</header>

<!-- header section ends -->

<section class="heading">
    <h3>course 03</h3>
    <p> <a href="home.php">home >></a> course-3 </p>
</section>

<!-- course-3 section starts  -->

<section class="course-3">

    <div class="box">
        <div class="video">
            <i class="fas fa-play"></i>
            <video src="images/course-vid-1.mp4"></video>
        </div>
        <div class="content">
            <h3>introduction to design</h3>
            <p>by john deo</p>
        </div>
    </div>

    <div class="box">
        <div class="video">
            <i class="fas fa-play"></i>
            <video src="images/course-vid-2.mp4"></video>
        </div>
        <div class="content">
            <h3>introduction to design</h3>
            <p>by john deo</p>
        </div>
    </div>

    <div class="box">
        <div class="video">
            <i class="fas fa-play"></i>
            <video src="images/course-vid-3.mp4"></video>
        </div>
        <div class="content">
            <h3>introduction to design</h3>
            <p>by john deo</p>
        </div>
    </div>

    <div class="box">
        <div class="video">
            <i class="fas fa-play"></i>
            <video src="images/course-vid-4.mp4"></video>
        </div>
        <div class="content">
            <h3>introduction to design</h3>
            <p>by john deo</p>
        </div>
    </div>

    <div class="box">
        <div class="video">
            <i class="fas fa-play"></i>
            <video src="images/course-vid-5.mp4"></video>
        </div>
        <div class="content">
            <h3>introduction to design</h3>
            <p>by john deo</p>
        </div>
    </div>

    <div class="box">
        <div class="video">
            <i class="fas fa-play"></i>
            <video src="images/course-vid-6.mp4"></video>
        </div>
        <div class="content">
            <h3>introduction to design</h3>
            <p>by john deo</p>
        </div>
    </div>
    

</section>

<!-- course-3 section ends -->

<div class="main-video">
    <div id="close-vid" class="fas fa-times"></div>
    <video src="" autoplay controls muted></video>
</div>











<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>explore</h3>
            <a href="home.php"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="about.php"> <i class="fas fa-arrow-right"></i> about </a>
            <a href="course-1.php"> <i class="fas fa-arrow-right"></i> course-1 </a>
            <a href="course-2.php"> <i class="fas fa-arrow-right"></i>course-2 </a>
            <a href="course-3.php"> <i class="fas fa-arrow-right"></i> course-3 </a>
            <a href="teachers.php"> <i class="fas fa-arrow-right"></i> teachers </a>
            <a href="blog.php"> <i class="fas fa-arrow-right"></i> blog </a>
            <a href="contact.php"> <i class="fas fa-arrow-right"></i> contact </a>
        </div>

        <div class="box">
            <h3>categories</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> web design </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> graphic design</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> UI / UX design</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> seo marketing</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> digital marketing</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> email marketing</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> all courses</a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> my account </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> feedback </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> help center </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> certificates </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> newsletter </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
            <a href="#"> <i class="fab fa-github"></i> github </a>
        </div>

    </div>

    <div class="credit"> created by <span>mr. web designer</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>