<?php
	require "header.php";	
?>

	<main>
		<?php

			if (isset($_SESSION['userUid'])) { 
				echo '<p align="center">Здравейте ', $_SESSION['userUid'], '!</p>';
				echo '
					<!DOCTYPE html>
					<html>
					<head>
						<link rel="stylesheet" type="text/css" href="style.css">
						<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


					</head>
					<body>

						<nav class="navbar">
  							<div class="clothes">
    							<button class="clothesbtn">Мода 
      								<i class="fa fa-caret-down"></i>
    							</button>

    							<div class="clothes-content">

    								<div class="header1">
        								<h2>Всички</h2>
      								</div> 

      								<div class="row1">

        								<div class="column1">
          									<h3><a href="clothes.php#sports">Sports Мода</a></h3>
          									<a href="clothes.php#sports-men">Мъжко</a>
         									<a href="clothes.php#sports-women">Дамско</a>
          									<a href="clothes.php#sports-kids">Детско</a>
          									<a href="clothes.php#sports-shoes">Обувки</a>
        								</div>

        								<div class="column1">
          									<h3><a href="clothes.php#casual">Casual Мода</a></h3>
          									<a href="clothes.php#casual-men">Мъжко</a>
          									<a href="clothes.php#casual-women">Дамско</a>
          									<a href="clothes.php#casual-kids">Детско</a>
          									<a href="clothes.php#casual-shoes">Обувки</a>
        								</div>

        								<div class="column1">
          									<h3><a href="clothes.php#high-end">High-end Мода</a></h3>
          									<a href="clothes.php#high-end-men">Мъжко</a>
          									<a href="clothes.php#high-end-women">Дамско</a>
          									<a href="clothes.php#high-end-kids">Детско</a>
          									<a href="clothes.php#high-end-shoes">Обувки</a>
        								</div>

      								</div>

    							</div>

 							 </div>

 							 <div class="sport">
  								<button class="sportbtn">Спортна Екипировка
  									<i class="fa fa-caret-down"></i>
  								</button>

    							<div class="sport-content">

      								<div class="header2">
        								<h2>Всички</h2>
      								</div>

      								<div class="row2">

        								<div class="column2">
          									<h3>Футбол</h3>
          									<a href="#">Екипи и Бутонки</a>
          									<a href="#">Топки</a>
          									<a href="#">Ръкавици</a>
          									<a href="#">За тренировка</a>
        								</div>

        								<div class="column2">
          									<h3>Баскетбол</h3>
         								 	<a href="#">Екипи и Обувки</a>
          									<a href="#">Топки</a>
          									<a href="#">За тренировка</a>
       									</div>

       									<div class="column2">
          									<h3>Волейбол</h3>
          									<a href="#">Екипи и Обувки</a>
          									<a href="#">Топки</a>
          									<a href="#">За тренировка</a>
        								</div>

      								</div>

    							</div>

  							</div>

  							<div class="tech">
    							<button class="techbtn">Техника 
      								<i class="fa fa-caret-down"></i>
    							</button>

    							<div class="tech-content">

      								<div class="header3">
        								<h2>Всички</h2>
      								</div>  

      								<div class="row3">

        								<div class="column3">
          									<h3>Бяла Техника</h3>
          									<a href="#">Хладилници</a>
          									<a href="#">Перални</a>
          									<a href="#">Готварски печки и Микровълнови</a>
        								</div>

        								<div class="column3">
          									<h3>Черна Техника</h3>
          									<a href="#">Лаптопи и Настолни Компютри</a>
          									<a href="#">Мобилни Устройства</a>
          									<a href="#">Гейминг</a>
          									<a href="#">Телевизори и Монитори</a>
        								</div>

        								<div class="column3">
          									<h3>Кабели и Други</h3>
          									<a href="#">Зарядни</a>
          									<a href="#">Преносима памет</a>
          									<a href="#">Разклонители</a>
        								</div>

      								</div>

    							</div>

  							</div>

  							<div class="cosmetics">
    							<button class="cosmeticsbtn">Козметика 
      								<i class="fa fa-caret-down"></i>
    							</button>

    							<div class="cosmetics-content">

    								<div class="header4">
        								<h2>Всички</h2>
      								</div>

      								<div class="row4">

        								<div class="column4">
          									<h3>Грим</h3>
          									<a href="#">Лице</a>
          									<a href="#">Устни</a>
          									<a href="#">Очи</a>
        								</div>

        								<div class="column4">
          									<h3>Лична хигиена</h3>
          									<a href="#">Грижа за косата</a>
          									<a href="#">Сапуни</a>
          									<a href="#">Орална хигиена</a>
        								</div>

        								<div class="column4">
          									<h3>Парфюми</h3>
          									<a href="#">Мъжки</a>
          									<a href="#">Дамски</a>
        								</div>

      								</div>

    							</div>

  							</div>

  							<div class="home">
    							<button class="homebtn">За Дома и Градината 
      								<i class="fa fa-caret-down"></i>
    							</button>

    							<div class="home-content">

    								<div class="header5">
        								<h2>Всички</h2>
      								</div>

      								<div class="row5">

        								<div class="column5">
          									<h3>Мебели</h3>
          									<a href="#">Хол</a>
          									<a href="#">Кухня</a>
          									<a href="#">Спалня</a>
          									<a href="#">Детска</a>
        								</div>

        								<div class="column5">
          									<h3>За Двора</h3>
          									<a href="#">Градински столове</a>
          									<a href="#">Барбекю</a>
        								</div>

        								<div class="column5">
          									<h3>Декорация</h3>
          									<a href="#">Изкуствени цветя</a>
          									<a href="#">Градински фигури</a>
          									<a href="#">Лампи</a>
        								</div>

      								</div>

    							</div>

  							</div>

  							<div class="hobby">							
    							<button class="hobbybtn">Хоби 
      								<i class="fa fa-caret-down"></i>
    							</button>

    							<div class="hobby-content">

    								<div class="header6">
        								<h2>Всички</h2>
      								</div>   

      								<div class="row6">

        								<div class="column6">
          									<h3>Лов</h3>
          									<a href="#">Оръжия</a>
          									<a href="#">Екипировка</a>
          									<a href="#">Аксесоари</a>
        								</div>

        								<div class="column6">
          									<h3>Риболов</h3>
          									<a href="#">Въдици</a>
          									<a href="#">Екипировка</a>
          									<a href="#">Стръв</a>
        								</div>

        								<div class="column6">
          									<h3>Туризъм</h3>
          									<a href="#">Агенции</a>
        								</div>

      								</div>

    							</div>

  							</div>

  							<div class="others">
    							<button class="othersbtn">Други 
      								<i class="fa fa-caret-down"></i>
    							</button>

    							<div class="others-content">

    								<div class="header7">
        								<h2>Всички</h2>
      								</div>

      								<div class="row7">

        								<div class="column7">
          									<h3>Играчки</h3>
          									<a href="#">Плюшени играчки</a>
          									<a href="#">Кукли</a>
          									<a href="#">Екшън фигури</a>
        								</div>

        								<div class="column7">
          									<h3>Авточасти</h3>
          									<a href="#">Окачване</a>
          									<a href="#">Двигател</a>
          									<a href="#">Гуми</a>
        								</div>

        								<div class="column7">
          									<h3>Образование</h3>
          									<a href="#">Книги</a>
          									<a href="#">Учебници и уч. тетр.</a>
          									<a href="#">Раници</a>
        								</div>

      								</div>

    							</div>

  							</div>

  							<div id="mySidenav" class="sidenav">
  								<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  								<a class ="a" href="my-saves.php">Моите запазени сайтове</a>
  								<a class ="a" href="#">Services</a>
  							</div>

							<div id="main">
  								<span style="font-size:30px;cursor:pointer; " onclick="openNav()">&#9776;</span>
							</div>

							<script>
								function openNav() {
  									document.getElementById("mySidenav").style.width = "250px";
  									document.getElementById("main").style.marginRight = "250px";
								}

								function closeNav() {
  									document.getElementById("mySidenav").style.width = "0";
  									document.getElementById("main").style.marginRight= "3px";
								}
							</script>
						</nav>

					<section>

						<figure class= "parallax">

  							<mark class="mark centered">
    							<h1>Спести от пазаруване!</h1>
  							</mark>

  							<nav class= "shortcut">
  								<a href="#sec-1"> Какво е Saver?</a>
  								</br>
  								<a href="#sec-2"> Защо ми е нужен?</a>
  								</br>
  								<a href="#sec-3"> Често Задавани Въпроси (FAQ)</a>
  							</nav>

						</figure>

          </section>
          <div class="text">

 						<mark>
    						<h1 id = "sec-1">Какво е Saver?</h1>
  					</mark>

  						<p>Saver е уебсайт, създаден специално за теб!</p>
  						<p> Желал ли си някога да знаеш за всяка една промоция на любимата ти марка, стока или магазин? Ако да, то тогава вече можеш да следиш всички тези неща от едно място - <b>Saver</b>!</p>

          </div>
					<section>

						<figure class="parallax">

							<mark class="mark centered1">
    							<h1 id = "sec-2">Защо ми е нужен <p class="Saver">Saver?</p></h1>
							</mark>

						</figure>

  						<p class="text">Някои хора вярват на мотото, че "Който казва, че парите не могат да купят щастие, просто не знае къде да пазарува.". Но идеята да спестим някой лев от пазаруване винаги е добре дошла! Поради това и фактът, че броят на хората онлайн нарастна значително в последните 20 години, все повече и повече фирми решават да се фокусират на техните дигитални кампании за маркетинг. Но за да привлекат вниманието на всичките тези потенциални онлайн клиенти, компаниите започнаха да издават специални отстъпки и оферти, достъпни ексклузивно онлайн. Звучи страхотно, нали? За съжаление, не всеки човек е способен да седи по цял ден в интернет, ровейки се във всичките тези сайтове и чакайки перфектната оферта да падне в ръцете му. Но всеки може да има Saver! Тук имате възможността да следите всичките ви любими марки и онлайн магазини от едно място. И ако нова промоция се появи - ще сте готови за нея.</p>

					</section>

					<figure class="parallax">
						<h1 class="centered2"><span class="flashing">Какво чакаш още? </span><mark class="mark">Започни да използваш <span class="Saver">SAVER <span class="flashing">СЕГА</span></span>!</mark></h1>
					</figure>

					<section>

  						<mark>
    						<h1 id = "sec-3" class="text">FAQ</h1>
  						</mark>

  						<button class="accordion">Как мога да използвам Saver?</button>

						<div class="panel">
  							<p>След като си се регистрирал, може да използваш сайта на воля.</p>
						</div>

						<button class="accordion">Безплатен ли е Saver?</button>

						<div class="panel">

  							<p>Yes, <strong>Saver е безплатен</strong> и винаги ще бъде такъв!</p>

						</div>

						<button class="accordion">Нещо се обърка?</button>

						<div class="panel">
  							<p>Свържи се с мен, като натиснеш <strong><a href="contact.php">Contact</a></strong> бутона.</p>
						</div>

						<button class="accordion">Къде се запазват моите любими линкове?</button>

						<div class="panel">

  						<p>Кликни върху "<strong>Hamburger</strong>" <strong>менюто</strong> и отиди на <strong><a href="my-saves.php">Моите запазени сайтове</a></strong>.</p>

						</div>

						<button class="accordion">Кой е админ на Saver?</button>

						<div class="panel">
  							<p>Натисни върху <strong><a href="aboutme.php">About me<a></strong> за да разбереш информация за мен :).</p>
						</div>

						<script>
							var acc = document.getElementsByClassName("accordion");
							var i;

							for (i = 0; i <= acc.length; i++) {
  								acc[i].addEventListener("click", function() {
    								this.classList.toggle("active");
    								var panel = this.nextElementSibling;
    								if (panel.style.maxHeight) {
      									panel.style.maxHeight = null;
    								} 
    								else {
      									panel.style.maxHeight = panel.scrollHeight + "px";
    								} 
  								});
							}
						</script>

					</section>
          <br>
          <br>
          <br>
				</body>
			</html>';				
			}
			else {
				echo '<p style="color: #f00; text-align: center; padding-top:100px; "><strong> You are logged out!</strong></p>';							
			}

		?>
		
	</main>

<?php
	require "footer.php";
?>