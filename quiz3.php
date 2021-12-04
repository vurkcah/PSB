<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/app.css">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' />
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="HandheldFriendly" content="true"/>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" 
		integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
		<title>Тест</title>
	</head>
	<body>
		<div style="background-image: url('images/psb_fon.jpg');" class="wrapper">
			<main class="main">
				<div class="quiz__head">
					<div class="head__content" id="head">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut ducimus odit accusamus, illum quas magni provident odio praesentium commodi sint, porro harum, minus cupiditate architecto culpa aut ex dolore officia.</div>
				</div>
				<div class="quiz__body" id="body">
					<div class="buttons">
						<div class="buttons__content" id="buttons">
							<button class="buttonn1">Default button</button><br>
							<button class="buttonn1 buttonn1_wrong">Wrong answer</button><br>
							<button class="buttonn1 buttonn1_correct">Correct answer</button><br>
							<button class="buttonn1 buttonn1_passive">Unclicked button</button><br>
						</div>
					</div>

					<div class="quiz__footer">
						<div class="footer__content" id="pages">0/0</div>
					</div>
				</div>
				
			</main>
		</div>

		<div id="myimgg" class="alert alert-success"><img src="images/st.png"><br>Разблокировано достижение «Стажёр»</div>

		<script type="text/javascript" src="js/app3.js"></script>
	</body>
</html>