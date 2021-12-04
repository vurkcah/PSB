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
    <title>teachers</title>

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
    <h3>our teachers</h3>
    <p> <a href="home.php">home >></a> teachers </p>
</section>

<!-- teachers section starts  -->

<section class="teachers">

    <div class="box">
        <div class="image">
            <img src="images/teacher-1.png" alt="">
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="content">
            <h3>john deo</h3>
            <span>web designer</span>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/teacher-2.png" alt="">
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="content">
            <h3>john deo</h3>
            <span>web designer</span>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/teacher-3.png" alt="">
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="content">
            <h3>john deo</h3>
            <span>web designer</span>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/teacher-4.png" alt="">
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="content">
            <h3>john deo</h3>
            <span>web designer</span>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/teacher-5.png" alt="">
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="content">
            <h3>john deo</h3>
            <span>web designer</span>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/teacher-6.png" alt="">
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="content">
            <h3>john deo</h3>
            <span>web designer</span>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/teacher-7.png" alt="">
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="content">
            <h3>john deo</h3>
            <span>web designer</span>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/teacher-8.png" alt="">
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="content">
            <h3>john deo</h3>
            <span>web designer</span>
        </div>
    </div>

</section>

<!-- teachers section ends -->












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