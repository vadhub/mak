<?php include "dbconnection.php";
?>
<!doctype html>
<html>
	<head>
		<title>СТУДИЯ КРАСОТЫ МаК</title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="icon" href="pictures/favicon.ico" type="image/x-icon">

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/style1.css">
		<link href="css/jquery.fancybox.min.css" rel="stylesheet">

		<script type="text/javascript" src="data/data.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
		<script src="http://yandex.st/jquery/1.10.2/jquery.min.js"></script>
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/jquery.fancybox.min.js"></script>
		<script src="js/gridify.js"></script>

		<script src="my.script.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  <div class="container-fluid p-0">
				<div class="col-sm-10 col-lg-3">
	      	<a href="index.php" class="navbar-brand ml-5"><img src="pictures/mak1.jpg" alt="logo"></a>
				</div>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Переключатель навигации">
		      <span class="navbar-toggler-icon"></span>
		    </button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
		      <ul class="navbar-nav ml-5">
		        <li class="nav-item p-2">
		          <a class="nav-link active" aria-current="page" href="index.php">Главная</a>
		        </li>
		        <li class="nav-item p-2">
		          <a class="nav-link" href="price.php">Прайс</a>
		        </li>
						<li class="nav-item dropdown p-2">
		          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><b class="caret m-auto">Наши работы</b></a>
		          <ul class="dropdown-menu">
		            <li><a class="dropdown-item" href="manik.php">Маникюрный зал</a></li>
		            <li><a class="dropdown-item" href="brovi.php">Брови и ресницы</a></li>
		            <li><a class="dropdown-item" href="hair.php">Женские стрижки и окрашивание</a></li>
		            <li><a class="dropdown-item" href="cosmetics.php">Косметология</a></li>
								<li><a class="dropdown-item" href="makeup.php">Макияж</a></li>
								<li><a class="dropdown-item" href="mens_hair.php">Мужские стрижки</a></li>
		          </ul>
		        </li>
		        <li class="nav-item p-2">
		          <a class="nav-link" href="choose_decign.php">Подбор дизайна</a>
		        </li>
		        <li class="nav-item p-2">
		          <a class="nav-link" href="Kontakts.php">Контакты и отзывы</a>
		        </li>
						<li class="nav-item p-2">
		          <a class="nav-link" href="registration.php">Онлайн запись</a>
		        </li>
		      </ul>
		    </div>
		  </div>
		</nav>
