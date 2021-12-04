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
    <title>contact</title>

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
    <h3>contact us</h3>
    <p> <a href="home.php">home >></a> contact </p>
</section>

<section class="contact">

    <div class="icons-container">

        <div class="icons">
            <i class="fas fa-phone"></i>
            <h3>Наш номер</h3>
            <p>+7 919 235 56 76</p>
            <p>+7 923 567 65 12</p>
        </div>

        <div class="icons">
            <i class="fas fa-envelope"></i>
            <h3>Наш email</h3>
            <p>PSB@gmail.com</p>
        </div>

        <div class="icons">
            <i class="fas fa-map-marker-alt"></i>
            <h3>Наш адрес</h3>
            <p>Г. Курск 50-лет октября 183</p>
        </div>

    </div>

    <div class="row">

        <form action="">
            <h3>Связаться с наставником</h3>
            <input type="text" placeholder="your name" class="box">
            <input type="number" placeholder="your number" class="box">
            <input type="email" placeholder="your email" class="box">
            <textarea name="" placeholder="your message" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" class="btn">
        </form>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1235.1786847398168!2d36.199910828209845!3d51.744788443223484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x412f035f2b732d53%3A0x8fa56f350cb6500d!2z0K7Qs9C-LdC30LDQv9Cw0LTQvdGL0Lkg0JPQvtGB0YPQtNCw0YDRgdGC0LLQtdC90L3Ri9C5INCj0L3QuNCy0LXRgNGB0LjRgtC10YIgKNC90LjQttC90LjQuSDQutC-0YDQv9GD0YEp!5e0!3m2!1sru!2sru!4v1638520850022!5m2!1sru!2sru" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

    </div>

</section>














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