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
    <title>about</title>

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
            <li><a href="map.php">Твой план</a></li>
            <li><a href="teachers.php">Наша команда</a></li>
            <li><a href="contact.php">наши контакты</a></li>
            <li><a href="achievements.php">Достижения</a></li>
        </ul>
    </nav>

</header>
<!-- header section ends -->

<section class="heading">
    <h3>Наставник</h3>
    <p> <a href="home.php">Главная >></a> Твой наставник </p>
</section>

<!-- about section starts  -->

<section class="about">

    <div class="image">
        <img src="images/about-img.png" alt="">
    </div>

    <div class="content">
        <h3>Я Останусь С Тобой, Пока Ты Не закончишь обучение.</h3>
        <p></p>
        <a href="#" class="btn">Подробнее</a>
    </div>

</section>

<!-- about section ends -->


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