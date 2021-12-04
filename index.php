<?php
session_start();

if ($_SESSION['user']) {
    header('Location: home.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Onboarding</title>
</head>
<body>
<!-- <div class="intro">
<div class="video">
<video class="video_media" src="/images/psb321.mp4" autoplay muted loop></video>
</div>
    </div>-->
    
<main>
    <div class="circle"></div>
        <div class="register-form-container">
            <h1 class="form-title">Авторизация</h1>
            <!-- Форма авторизации -->

            <form action="vendor/signin.php" method="post">
                <label>Логин</label>
                <input type="text" name="login" placeholder="Введите свой логин">
                <label>Пароль</label>
                <input type="password" name="password" placeholder="Введите пароль">
                <button type="submit">Войти</button>
                <?php
                    if ($_SESSION['message']) {
                        echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
                    }
                    unset($_SESSION['message']);
                ?>
            </form>
            <!--<form method='post' id='login-form' class='login-form'>
                <div class="form-feilds">
                    <div class="form-field">
                        <input type="text" placeholder="Логин" name="login">
                    </div>
                    <div class="form-field">
                        <input type='password' placeholder="Пароль" name="password">
                    </div>
                    <div class="form-buttons">
                        <a><button type="submit" class="button" name="submit">Авторизация</button></a>
  	                </div>
                </div>
            </form> -->
        </div>
</main> 
</body>
</html>