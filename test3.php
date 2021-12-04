<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		<meta charset="utf-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' />
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="HandheldFriendly" content="true"/>
		<link rel="stylesheet" type="text/css" href="css/site.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>

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
		<div class="wrapper" align="center" >
			<iframe src="quiz3.php" width="720" height="720" class="quiz-frame"></iframe>
		</div>

		<section class="footer">

			<div class="box-container">
		
			  
		
			<div class="credit"> created by <span>Winstrike</span> | 2021 </div>
		
		</section>

	</body>
</html>