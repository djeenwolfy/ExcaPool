<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="css/materialize.css" type="text/css" media="screen,projection"/>
	<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link rel="shortcut icon" href="img/minilogo.png">
	<title>ExcaPool - Контакты</title>
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
		<div class="contacts row">
			<h4>Контакты</h4> 
			<div class="col s12 m6 l4 xl4 contact-card">
				<h5>Адрес</h5>
				<p>Главный офис находится по адресу: <br> 
				<span>Чувашская республика, <br>	
				г.Шумерля, ул.Некрасова д.62</span></p>
				<p>(смотрите карту ниже)</p>
			</div>
			<div class="col s12 m6 l4 xl4 contact-card">
				<h5>Связь</h5>
				<p>Свзяатся с нами можно:</p>
				<p>Телефон: +79993221488</p>
				<p>Viber: +79993221489</p>
				<p>WhatsApp: +79993221490</p>
			</div>

			<div class="col s12 m6 l4 xl4 contact-card">
				<h5>Поддержка</h5>
				<p>В случае каких-либо проблем:</p>	
				<p>Телефон: +79992289669</p>
				<p>E-mail: excapoolsupport@excapool.com</p>
			</div>
		</div>
		<div class="map">
			<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A2f8050d808fcae76b199e02a5455cc3782f075a09d7ac06d2d4665b499ec1d9f&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
		</div>
	</main>

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