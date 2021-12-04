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
    <title>blog</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/pers.css">
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


<!-- blog section starts  -->

<section class="products" id="products">

   

    <div class="swiper product-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/product-1.png" alt="">
                <h3>апельсин</h3>
                <div class="price"> 100 руб/кг </div>
                <a href="#ensadd:438f5146273924" class="btn btn-ens-action" > добавить в корзину</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/product-2.png" alt="">
                <h3>Лук</h3>
                <div class="price">60 руб/кг </div>
                <a href="#ensadd:438f5146273928" class="btn btn-ens-action">добавить в корзину</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/product-3.png" alt="">
                <h3>Свинина</h3>
                <div class="price"> 250 руб/кг </div>
              
                <a href="#ensadd:438f5146273930" class="btn btn-ens-action">добавить в корзину</a>
            </div>
            <div class="swiper-slide box">
                <img src="image/product-4.png" alt="">
                <h3>Капуста</h3>
                <div class="price"> 50 руб/кг </div>
              
                <a href="#ensadd:438f5146273931" class="btn btn-ens-action">добавить в корзину</a>
            </div>
            <div class="swiper-slide box">
                <img src="image/product-tvorog.png" alt="">
                <h3>Творог</h3>
                <div class="price"> 90 руб/кг </div>
                <a href="#ensadd:438f5146273940" class="btn btn-ens-action">добавить в корзину</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/product-yaico.png" alt="">
                <h3>Яйца</h3>
                <div class="price"> 70 руб/10шт. </div>
              
                <a href="#ensadd:438f5146273941" class="btn btn-ens-action">добавить в корзину</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/product-svekla.png" alt="">
                <h3>Свекла</h3>
                <div class="price"> 40 руб/кг </div>
              
                <a href="#ensadd:438f5146273942" class="btn btn-ens-action">добавить в корзину</a>
            </div>
           

        </div>

    </div>

    <div class="swiper product-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/product-5.png" alt="">
                <h3>Картофель</h3>
                <div class="price">70 руб/кг </div>
                <a href="#ensadd:438f5146273933" class="btn  btn-ens-action ">добавить в корзину</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/product-6.png" alt="">
                <h3>Авокадо</h3>
                <div class="price"> 100 руб/кг </div>
                <a href="#ensadd:438f5146273936" class="btn btn-ens-action">добавить в корзину</a>
            </div>
            <div class="swiper-slide box">
                <img src="image/product-med.png" alt="">
                <h3>Мёд</h3>
                <div class="price"> 600 руб/3л. </div>
                <a href="#ensadd:438f5146273937" class="btn btn-ens-action ">добавить в корзину</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/product-apple.png" alt="">
                <h3>Яблоки</h3>
                <div class="price">120 руб/кг </div>
               
                <a href="#ensadd:438f5146273938" class="btn btn-ens-action">добавить в корзину</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/product-milk.png" alt="">
                <h3>Молоко</h3>
                <div class="price"> 80 руб/Л</div>
               
                <a href="#ensadd:438f5146273939" class="btn btn-ens-action">добавить в корзину</a>
            </div>


            <div class="swiper-slide box">
                <img src="image/product-7.png" alt="">
                <h3>Морковь</h3>
                <div class="price"> 35 руб/кг </div>
               
                <a href="#ensadd:438f5146273935" class="btn btn-ens-action">добавить в корзину</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/pngwing.com.png" alt="">
                <h3>Лимон</h3>
                <div class="price"> 15 руб/кг </div>
               
                <a href="#ensadd:438f5146273934" class="btn btn-ens-action">добавить в корзину</a>
            </div>
            <div class="swiper-slide box">
                <img src="image/product-pelmen.png" alt="">
                <h3>Пельмени</h3>
                <div class="price"> 260 руб/кг </div>
              
                <a href="#ensadd:438f5146273943" class="btn btn-ens-action">добавить в корзину</a>
            </div>
            <div class="swiper-slide box">
                <img src="image/product-pomidor.png" alt="">
                <h3>Помидоры</h3>
                <div class="price"> 65 руб/кг </div>
                <a href="#ensadd:438f5146273944" class="btn btn-ens-action">добавить в корзину</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/product-cucumber.png" alt="">
                <h3>Огурцы</h3>
                <div class="price"> 50 руб/кг </div>
              
                <a href="#ensadd:438f5146273945" class="btn btn-ens-action">добавить в корзину</a>
            </div>

        </div>

    </div>


</section>












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
<script src="js/pers.js"></script>

<script src="js/script.js"></script>

</body>
</html>