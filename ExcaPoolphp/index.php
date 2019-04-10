<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="css/materialize.css" type="text/css" media="screen,projection"/>
	<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link rel="shortcut icon" href="img/minilogo.png">
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<title>ExcaPool - Главная</title>
</head>
<body class="Site">
	<!-- Начало header -->
	<header>
		<nav> <!-- Навигация и лого -->
			<div  class="nav-wrapper  blue lighten-1">
				<a href="http://gr2.uxp.ru" class="brand-logo" id="mainLogo">ExcaPool</a>
				<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>

				<ul class="right hide-on-med-and-down" id="mainMenu">
					<li><a href="http://gr2.uxp.ru">Главная</a></li>
					<li><a href="Catalog.php">Каталог</a></li>
					<li><a href="Price.php">Калькулятор цен</a></li>
					<li><a href="About.php">О нас</a></li>
					<li><a href="Contacts.php">Контакты</a></li>
				</ul>
			</div>
		</nav>
		<!-- Навигация на мобильных устройствах -->
		<ul class="sidenav" id="mobile-demo">
			<li><a href="http://gr2.uxp.ru">Главная</a></li>
			<li><a href="Catalog.php">Каталог</a></li>
			<li><a href="Price.php">Калькулятор цен</a></li>
			<li><a href="About.php">О нас</a></li>
			<li><a href="Contacts.php">Контакты</a></li>
		</ul>
	</header>
	<!-- Конец header -->
	
	<main class="Site-content">
		<br>
		<div class="slider">
			<ul class="slides">
				<li>
					<img src="img/first.png" class="slider-images"> 
					<div class="caption center-align">
						<h3>ExcaPool</h3>
						<h5 class="light grey-text text-lighten-3">установка бассейнов любой сложности</h5>
					</div>
				</li>
				<li>
					<img src="img/second.png" class="slider-images"> 
					<div class="caption left-align">
						<h3>Большой выбор</h3>
						<h5 class="light grey-text text-lighten-3">В нашем каталоге много интересных вариантов бассейнов</h5>
					</div>
				</li>
				<li>
					<img src="img/third.png" class="slider-images"> 
					<div class="caption right-align">
						<h3>Сделаем качественно и с гарантией</h3>
						<h5 class="light grey-text text-lighten-3">Опыт более 10 лет и множетво довольных клиентов</h5>
					</div>
				</li>
			</ul>
		</div>
	</main>

	<!-- Футер -->
	<footer class="page-footer blue darken-2" id="rootFooter">
		<mainfooter></mainfooter>
		<subfooter></subfooter>
	</footer>
	<script src="script/vue.js"></script>  
	<script src="script/jquery-3.3.1.min.js"></script>      
	<script src="script/materialize.js"></script> 
	<script src="script/script.js"></script>  
</body>
</html>