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
    <title>course-1</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/pers.css">


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
    <h3>День 7</h3>
    <p> <a href="home.php">Главная >></a> День 7 </p>
</section>

<!-- course-1 section starts  -->

<section class="course-1">
    <h1 class="info"> Пульс<span>Адаптации</span> </h1>

    <div class="box">
        <img src="images/1_6_meeting_mentor.png" alt="">
        <h3>Встреча с наставником</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque, earum.</p>
        <a href="day1_1.php" class="btn">Выполнить</a>
    </div>

    <div class="box">
        <img src="images/servey.png" alt="">
        <h3>Опрос по удовлетворенности работой</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque, earum.</p>
        <a href="test7.php" class="btn">Выполнить</a>
    </div>
    <div class="box1">
    </div>
    <div class="box1">
    </div>

    <div class="box1">
    </div>

    <div class="box1">
    </div>

    <div class="box1">
    </div>
    <div class="box1">
    </div>

    <div class="box1">
    </div>

    <div class="box1">
    </div>

       <div class="box1">
    </div>
    <div class="box1">
    </div>

</section>

<!-- course-1 section ends -->
<section class="footer">

    <div class="box-container">

      

    <div class="credit"> created by <span>Winstrike</span> | 2021 </div>

</section>

<!-- footer section ends -->

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>