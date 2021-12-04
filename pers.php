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
    <link rel="stylesheet" href="css/chief-slider.min.css">
    <script defer src="js/chief-slider.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const slider = new ChiefSlider('.slider', {
                loop: true,
            });
        });
    </script>

    <script defer src="js/chief-slider.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const slider = new ChiefSlider('.slider3', {
                loop: true,
            });
        });

        document.addEventListener('DOMContentLoaded', function () {
            const slider = new ChiefSlider('.slider2', {
                loop: true,
                autoplay:true, interval:7000,
            });
        });

      
      
    </script>
    
    <style>
    *,
    *::before,
    *::after {
      box-sizing: border-box;
    }

    body {
        margin: 0;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';
    }

    .container {
        max-width: 350px;
        margin: 0 auto;
    }

    .slider__wrapper {
        overflow: hidden;
    }

    .slider__item {
        flex: 0 0 100%;
        max-width: 100%;
        height: 250px;
        display: flex;
        justify-content: center;
        align-items: center;
        color: rgba(255, 255, 255, 0.8);
        font-size: 7rem;
    }

    
    .container2 {
        max-width: 350px;
        margin: 0 auto;
    }

    .slider__wrapper2 {
        overflow: hidden;
    }

    .slider__item2 {
        flex: 0 0 100%;
        max-width: 100%;
        height: 250px;
        display: flex;
        justify-content: center;
        align-items: center;
        color: rgba(255, 255, 255, 0.8);
        font-size: 7rem;
    }


    .container3 {
        max-width: 350px;
        margin: 0 auto;
    }

    .slider__wrapper3 {
        overflow: hidden;
    }

    .slider__item3 {
        flex: 0 0 100%;
        max-width: 100%;
        height: 250px;
        display: flex;
        justify-content: center;
        align-items: center;
        color: rgba(255, 255, 255, 0.8);
        font-size: 7rem;
    }
  </style>
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
                    <li><a href="course-3.php">день 7</a></li>
                </ul>
            </li>
            <li><a href="#">Коллеги</a>
                <ul>
                    <li><a href="teachers.php">твоя команда</a></li>
                </ul>
            </li>
            <li><a href="contact.php">наши контакты</a></li>
        </ul>
    </nav>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<div class="container">
    <div class="slider">
        <div class="slider__wrapper">
            <div class="slider__items">
                <div class="slider__item">
                <img src="images/h1.png" width="270" height="200" alt="">
                </div>

                  <div class="slider__item">
                    <img src="images/h2.png" width="270" height="200" alt="">
                </div>
                <div class="slider__item">
                    <img src="images/h3.png" width="270" height="200" alt="">
                
                </div>
                <div class="slider__item">
                    <img src="images/h4.png" width="270" height="200" alt="">
                </div>
                <div class="slider__item">
                    <img src="images/h5.png" width="270" height="200" alt="">
                </div>  
            </div>
        </div>
        <a href="#" class="slider__control" data-slide="prev"></a>
        <a href="#" class="slider__control" data-slide="next"></a>
        <ol class="slider__indicators">
            <li data-slide-to="0"></li>
            <li data-slide-to="1"></li>
            <li data-slide-to="2"></li>
            <li data-slide-to="3"></li>
            <li data-slide-to="4"></li>
        </ol>
    
    </div>

</div>

<div class="container">
    <div class="slider3">
        <div class="slider__wrapper">
            <div class="slider__items">
                <div class="slider__item">
                <img src="images/b1.png" width="270" height="200" alt="">
                </div>

                  <div class="slider__item">
                    <img src="images/b2.png" width="270" height="200" alt="">
                </div>
                <div class="slider__item">
                    <img src="images/b3.png" width="270" height="200" alt="">
                
                </div>
                <div class="slider__item">
                    <img src="images/b4.png" width="270" height="200" alt="">
                </div>
                <div class="slider__item">
                    <img src="images/b5.png" width="270" height="200" alt="">
                </div>  
            </div>
        </div>
        <a href="#" class="slider__control" data-slide="prev"></a>
        <a href="#" class="slider__control" data-slide="next"></a>
        <ol class="slider__indicators">
            <li data-slide-to="0"></li>
            <li data-slide-to="1"></li>
            <li data-slide-to="2"></li>
            <li data-slide-to="3"></li>
            <li data-slide-to="4"></li>
        </ol>
    
    </div>
</div>



<div class="container">
    <div class="slider2">
        <div class="slider__wrapper">
            <div class="slider__items">
                <div class="slider__item">
                <img src="images/l1.png" width="270" height="200" alt="">
                </div>

                  <div class="slider__item">
                    <img src="images/l2.png" width="270" height="200" alt="">
                </div>
                <div class="slider__item">
                    <img src="images/l3.png" width="270" height="200" alt="">
                
                </div>
                <div class="slider__item">
                    <img src="images/l4.png" width="270" height="200" alt="">
                </div>
                <div class="slider__item">
                    <img src="images/l5.png" width="270" height="200" alt="">
                </div>  
            </div>
        </div>
        <a href="#" class="slider__control" data-slide="prev"></a>
        <a href="#" class="slider__control" data-slide="next"></a>
        <ol class="slider__indicators">
            <li data-slide-to="0"></li>
            <li data-slide-to="1"></li>
            <li data-slide-to="2"></li>
            <li data-slide-to="3"></li>
            <li data-slide-to="4"></li>
        </ol>
    
    </div>
</div>
 <div class="content">
       
        <a href="map.php" class="btn">Создать персонажа</a>
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
            <a href="teachers.php"> <i class="fas fa-arrow-right"></i> Коллеги </a>
            <a href="contact.php"> <i class="fas fa-arrow-right"></i> Наши контакты </a>
        </div>

         <div class="box">
            <h3></h3>
            <a href="#"> <i class="fas fa-arrow-right"></i>  </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> </a>
        </div> 

         <div class="box">
            <h3></h3>
            <a href="#"> <i class="fas fa-arrow-right"></i>  </a>
            <a href="#"> <i class="fas fa-arrow-right"></i>  </a>
            <a href="#"> <i class="fas fa-arrow-right"></i>  </a>
            <a href="#"> <i class="fas fa-arrow-right"></i>  </a>
            <a href="#"> <i class="fas fa-arrow-right"></i>  </a>
        </div> 

         <div class="box">
            <h3></h3>
            <a href="#"> <i class="fab fa-facebook-f"></i>  </a>
            <a href="#"> <i class="fab fa-twitter"></i>  </a>
            <a href="#"> <i class="fab fa-instagram"></i>  </a>
            <a href="#"> <i class="fab fa-github"></i>  </a>
        </div> 

    </div>

    <div class="credit"> created by <span>Winstrike</span> | 2021 </div>

</section>

<!-- footer section ends -->

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>