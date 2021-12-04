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
    <meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="HandheldFriendly" content="true"/>
    <title>home</title>

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

<!-- home section starts  -->



    <div class="image4">
        <img src="images/bg.png" alt="">
    </div> 




<!-- home section ends -->

<!-- categories section starts  -->



<!-- categories section ends -->


<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Навигация</h3>
            <a href="home.php"> <i class="fas fa-arrow-right"></i> Главная </a>
            <a href="about.php"> <i class="fas fa-arrow-right"></i> Твой наставник </a>
            <a href="teachers.php"> <i class="fas fa-arrow-right"></i> Наша команда </a>
            <a href="contact.php"> <i class="fas fa-arrow-right"></i> Наши контакты </a>
            <a href="achievements.php"> <i class="fas fa-arrow-right"></i> Достижения </a>
        </div>

         <div class="box">
            <h3></h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> Что тебе доступно в банке </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Что требуется от тебя </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Правила героев ПСБ </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Возможности банка</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Знакомство с активностями </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> обучение и развитие</a>
            <a href="#"> <i class="fas fa-arrow-right"></i>Социальный пакет </a>
        </div> 

         <div class="box">
            <h3></h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> Стурктура и функции БИТ </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Инструменты работы </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Активности и специальные проекты </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Правила поддержки </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Обящательные мероприятия </a>
        </div> 

         <div class="box">
            <h3></h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> Facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> Twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> Instagram </a>
            <a href="#"> <i class="fab fa-github"></i> github </a>
        </div> 

    </div>

    <div class="credit"> created by <span>Winstrike</span> | 2021 </div>

</section>

<!-- footer section ends -->

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>