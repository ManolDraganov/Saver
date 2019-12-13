<?php
	require "header.php";
	require './includes/dbh.inc.php';	
?>
 <section class="cool">
 	<form action="" method="post">
 		<section id="sports">
 			<h1>Sports Мода</h1>
			<div class="flash-sale">
 			
 				<a href="https://sports.mymall.bg/categories/Промоции/" target="_blank">Лимитирани Оферти в MyMall !</a>
 				<button type="submit" name="but" value="1">Добави</button>
 				</br>
 			
 				<a href="https://bg.sportsdirect.com/flash-sale" target="_blank">Лимитирани Оферти в Sport Direct !</a> 
 				<button  type="submit" name="but" value="2">Добави</button>
 				</br>

			</div>
 			<div id="sports-men">

 				<h2>Мъже</h2>

 				<a href="https://www.sportdepot.bg/muje-obleklo/outlet-2_35" target="_blank">Мъжко облекло в Sport Depot</a>
 				<button type="submit" name="but" value="3">Добави</button>
 				</br>

 				<a href="https://sports.mymall.bg/categories/OUTLET/%D0%9F%D0%BE%D0%B4%D1%85%D0%BE%D0%B4%D1%8F%D1%89/%D0%9C%D1%8A%D0%B6%D0%BA%D0%B8-%D0%B3%D0%BE%D1%80%D0%BD%D0%B8%D1%89%D0%B0" target="_blank">Мъжки горнища в MyMall</a>
 				<button type="submit" name="but" value="4">Добави</button>
 				</br>

 				<a href="https://sports.mymall.bg/categories/OUTLET/%D0%9F%D0%BE%D0%B4%D1%85%D0%BE%D0%B4%D1%8F%D1%89/%D0%9C%D1%8A%D0%B6%D0%BA%D0%B8-%D0%BF%D0%B0%D0%BD%D1%82%D0%B0%D0%BB%D0%BE%D0%BD%D0%B8" target="_blank">Мъжки долнища в MyMall</a>
 				<button type="submit" name="but" value="5">Добави</button>
 				</br>

 				<a href="https://www.sportvision.bg/drehi/mens/promocii/" target="_blank">Мъжко облекло в Sport Vision</a>
 				<button type="submit" name="but" value="6">Добави</button>
 				</br>

 				<a href="https://bg.sportsdirect.com/outlet/mens-tops-outlet" target="_blank">Мъжко облекло в SportsDirect</a>
 				<button type="submit" name="but" value="7">Добави</button>
 				</br>

 				<a href="https://www.dress4less.bg/sales/mazhe/drehi/" target="_blank">Мъжко облекло в Dress4less</a>
 				<button type="submit" name="but" value="8">Добави</button>
 				</br>
 			
 			</div>

 			<div id="sports-women">

 				<h2>Жени</h2>

 				<a href="https://www.sportdepot.bg/jeni-obleklo/outlet-1_35" target="_blank">Дамско облекло в Sport Depot</a>
 				<button type="submit" name="but" value="9">Добави</button>
 				</br>

 				<a href="https://sports.mymall.bg/categories/OUTLET/%D0%9F%D0%BE%D0%B4%D1%85%D0%BE%D0%B4%D1%8F%D1%89/%D0%94%D0%B0%D0%BC%D1%81%D0%BA%D0%B8-%D0%B3%D0%BE%D1%80%D0%BD%D0%B8%D1%89%D0%B0" target="_blank">Дамски горнища в MyMall</a>
 				<button type="submit" name="but" value="10">Добави</button>
 				</br>

 				<a href="https://sports.mymall.bg/categories/OUTLET/%D0%9F%D0%BE%D0%B4%D1%85%D0%BE%D0%B4%D1%8F%D1%89/%D0%94%D0%B0%D0%BC%D1%81%D0%BA%D0%B8-%D0%BF%D0%B0%D0%BD%D1%82%D0%B0%D0%BB%D0%BE%D0%BD%D0%B8" target="_blank">Дамски долнища в MyMall</a>
 				<button type="submit" name="but" value="11">Добави</button>
 				</br>

 				<a href="https://www.sportvision.bg/drehi/womens/promocii/" target="_blank">Дамско облекло в Sport Vision</a>
 				<button type="submit" name="but" value="12">Добави</button>
 				</br>

 				<a href="https://bg.sportsdirect.com/outlet/ladies-tops-outlet" target="_blank">Дамско облекло в SportsDirect</a>
 				<button type="submit" name="but" value="13">Добави</button>
 				</br>

 				<a href="https://www.dress4less.bg/sales/zheni/drehi/" target="_blank">Дамско облекло в Dress4less</a>
 				<button type="submit" name="but" value="14">Добави</button>
 				</br>
 				
 			</div>

 			<div id="sports-kids">
 				
 				<h2>Деца</h2>

 				<a href="https://www.sportdepot.bg/deca-obleklo/outlet-3_35" target="_blank">Детско облекло в Sport Depot</a>
 				<button type="submit" name="but" value="15">Добави</button>
 				</br>

 				<a href="https://sports.mymall.bg/categories/OUTLET/%D0%9F%D0%BE%D0%B4%D1%85%D0%BE%D0%B4%D1%8F%D1%89/%D0%94%D0%B5%D1%82%D1%81%D0%BA%D0%B8-%D0%B3%D0%BE%D1%80%D0%BD%D0%B8%D1%89%D0%B0" target="_blank">Детски горнища в MyMall</a>
 				<button type="submit" name="but" value="16">Добави</button>
 				</br>

 				<a href="https://sports.mymall.bg/categories/OUTLET/%D0%9F%D0%BE%D0%B4%D1%85%D0%BE%D0%B4%D1%8F%D1%89/%D0%94%D0%B5%D1%82%D1%81%D0%BA%D0%B8-%D0%BF%D0%B0%D0%BD%D1%82%D0%B0%D0%BB%D0%BE%D0%BD%D0%B8" target="_blank">Детски долнища в MyMall</a>
 				<button type="submit" name="but" value="17">Добави</button>
 				</br>

 				<a href="https://www.sportvision.bg/drehi/detsa/promocii/" target="_blank">Детско облекло в Sport Vision</a>
 				<button type="submit" name="but" value="18">Добави</button>
 				</br>

 				<a href="https://bg.sportsdirect.com/outlet/kids-tops-outlet" target="_blank">Детско облекло в SportsDirect</a>
 				<button type="submit" name="but" value="19">Добави</button>
 				</br>

 				<a href="https://www.dress4less.bg/sales/detsa/drehi/" target="_blank">Детско облекло в Dress4less</a>
 				<button type="submit" name="but" value="20">Добави</button>
 				</br>

 			</div>

 			<div id="sports-shoes">
 				
 				<h2>Обувки</h2>

 				<a href="https://www.sportdepot.bg/muje-obuvki/outlet-2_77" target="_blank">Мъжки обувки в Sport Depot</a>
 				<button type="submit" name="but" value="21">Добави</button>
 				</br>

 				<a href="https://sports.mymall.bg/categories/OUTLET/%D0%9F%D0%BE%D0%B4%D1%85%D0%BE%D0%B4%D1%8F%D1%89/%D0%9C%D1%8A%D0%B6%D0%BA%D0%B8-%D0%BE%D0%B1%D1%83%D0%B2%D0%BA%D0%B8" target="_blank">Мъжки обувки в MyMall</a>
 				<button type="submit" name="but" value="22">Добави</button>
 				</br>

 				<a href="https://www.sportvision.bg/obuvki/mens/promocii/" target="_blank">Мъжки обувки в Sport Vision</a>
 				<button type="submit" name="but" value="23">Добави</button>
 				</br>

 				<a href="https://bg.sportsdirect.com/outlet/mens-footwear-outlet" target="_blank">Мъжки обувки в SportsDirect</a>
 				<button type="submit" name="but" value="24">Добави</button>
 				</br>

 				<a href="https://www.dress4less.bg/sales/mazhe/obuvki/" target="_blank">Мъжки обувки в Dress4less</a>
 				<button type="submit" name="but" value="25">Добави</button>
 				</br>

 				<a href="https://www.obuvki.bg/sport/m-zhki/filtr:promocii.html" target="_blank">Мъжки обувки в obuvki.bg</a>
 				<button type="submit" name="but" value="26">Добави</button>
 				</br>

 				<a href="https://www.sportdepot.bg/jeni-obuvki/outlet-1_77" target="_blank">Дамски обувки в Sport Depot</a>
 				<button type="submit" name="but" value="27">Добави</button>
 				</br>

 				<a href="https://sports.mymall.bg/categories/OUTLET/%D0%9F%D0%BE%D0%B4%D1%85%D0%BE%D0%B4%D1%8F%D1%89/%D0%94%D0%B0%D0%BC%D1%81%D0%BA%D0%B8-%D0%BE%D0%B1%D1%83%D0%B2%D0%BA%D0%B8" target="_blank">Дамски обувки в MyMall</a>
 				<button type="submit" name="but" value="28">Добави</button>
 				</br>

 				<a href="https://www.sportvision.bg/obuvki/womens/promocii/" target="_blank">Дамски обувки в Sport Vision</a>
 				<button type="submit" name="but" value="29">Добави</button>
 				</br>

 				<a href="https://bg.sportsdirect.com/outlet/ladies-footwear-outlet" target="_blank">Дамски обувки в SportsDirect</a>
 				<button type="submit" name="but" value="30">Добави</button>
 				</br>

 				<a href="https://www.dress4less.bg/sales/zheni/obuvki/" target="_blank">Дамски обувки в Dress4less</a>
 				<button type="submit" name="but" value="31">Добави</button>
 				</br>

 				<a href="https://www.obuvki.bg/sport/damski/filtr:promocii.html" target="_blank">Дамски обувки в obuvki.bg</a>
 				<button type="submit" name="but" value="32">Добави</button>
 				</br>

 				<a href="https://www.sportdepot.bg/deca-obuvki/outlet-3_77" target="_blank">Детски обувки в Sport Depot</a>
 				<button type="submit" name="but" value="33">Добави</button>
 				</br>

 				<a href="https://sports.mymall.bg/categories/OUTLET/%D0%9F%D0%BE%D0%B4%D1%85%D0%BE%D0%B4%D1%8F%D1%89/%D0%94%D0%B5%D1%82%D1%81%D0%BA%D0%B8-%D0%BE%D0%B1%D1%83%D0%B2%D0%BA%D0%B8" target="_blank">Детски обувки в MyMall</a>
 				<button type="submit" name="but" value="34">Добави</button>
 				</br>

 				<a href="https://www.sportvision.bg/obuvki/detsa/promocii/" target="_blank">Детски обувки в Sport Vision</a>
 				<button type="submit" name="but" value="35">Добави</button>
 				</br>

 				<a href="https://bg.sportsdirect.com/outlet/kids-tops-outlet" target="_blank">Детски обувки в SportsDirect</a>
 				<button type="submit" name="but" value="36">Добави</button>
 				</br>

 				<a href="https://www.dress4less.bg/sales/detsa/obuvki/" target="_blank">Детски обувки в Dress4less</a>
 				<button type="submit" name="but" value="37">Добави</button>
 				</br>

 				<a href="https://www.obuvki.bg/sport/detski/filtr:promocii.html" target="_blank">Детски обувки в obuvki.bg</a>
 				<button type="submit" name="but" value="38">Добави</button>
 				</br>

 			</div>
 		</section>

 		<section id="casual">
 			<h1>Casual Мода</h1>
 			<div class="flash-sale">

 				<a href="https://www2.hm.com/bg_bg/maje/deals/black-friday-deal.html" target="_blank">Лимитирани Оферти на Мъжка мода в H&M !</a>
 				<button type="submit" name="but" value="39">Добави</button>
 				</br>

 				<a href="https://www2.hm.com/bg_bg/jeni/deals/black-friday-deal.html" target="_blank">Лимитирани Оферти на Дамска мода в H&M !</a>
 				<button type="submit" name="but" value="40">Добави</button>
 				</br>

 				<a href="https://www2.hm.com/bg_bg/deca/deals/black-friday-deal.html" target="_blank">Лимитирани Оферти на Детска мода в H&M !</a>
 				<button type="submit" name="but" value="41">Добави</button>
 				</br>
 				
 			</div>

 			<div id="casual-men">

 				<h2>Мъже</h2>

 				<a href="https://www2.hm.com/bg_bg/sale/shopbyproductmen/view-all.html" target="_blank">Мъжко облекло в H&M</a>
 				<button type="submit" name="but" value="42">Добави</button>
 				</br>

 				<a href="https://www.fashiondays.bg/s/outlet-discount-menu-mmse-m" target="_blank">Мъжко облекло във Fashion Days </a>
 				<button type="submit" name="but" value="43">Добави</button>
 				</br>

 				<a href="https://www.bershka.com/bg/%D0%BC%D1%8A%D0%B6%D0%B5/promo-%D0%B4%D0%BE--30%25/%D0%B4%D1%80%D0%B5%D1%85%D0%B8-c1010203525.html" target="_blank">Мъжко облекло в Bershka</a>
 				<button type="submit" name="but" value="44">Добави</button>
 				</br>

 				<a href="https://www.zara.com/bg/bg/mazhko-specialni-tseni-l806.html?v1=1282747" target="_blank">Мъжка мода в Zara</a>
 				<button type="submit" name="but" value="45">Добави</button>
 				</br>
 				
 			</div>

 			<div id="casual-women">

 				<h2>Жени</h2>

 				<a href="https://www2.hm.com/bg_bg/sale/shopbyproductladies/view-all.html" target="_blank">Дамско облекло в H&M</a>
 				<button type="submit" name="but" value="46">Добави</button>
 				</br>

 				<a href="https://www.fashiondays.bg/s/outlet-discount-menu-mmse-w" target="_blank">Дамско облекло в Fashion Days</a>
 				<button type="submit" name="but" value="47">Добави</button>
 				</br>

 				<a href="https://www.bershka.com/bg/%D0%B6%D0%B5%D0%BD%D0%B8/promo-%D0%B4%D0%BE--40%25/%D0%B4%D1%80%D0%B5%D1%85%D0%B8-c1010311004.html" target="_blank">Дамско облекло в Bershka</a>
 				<button type="submit" name="but" value="48">Добави</button>
 				</br>

 				<a href="https://www.zara.com/bg/bg/damsko-specialni-tseni-l1314.html?v1=1281579" target="_blank">Дамска мода в Zara</a>
 				<button type="submit" name="but" value="49">Добави</button>
 				</br>
 				
 			</div>

 			<div id="casual-kids">

 				<h2>Деца</h2>

 				<a href="https://www2.hm.com/bg_bg/sale/shopbyproductkids/view-all.html" target="_blank">Детско облекло в H&M</a>
 				<button type="submit" name="but" value="50">Добави</button>
 				</br>

 				<a href="https://www.fashiondays.bg/s/outlet-menu-mmse-g" target="_blank">Детска мода за момичета във Fashion Days</a>
 				<button type="submit" name="but" value="51">Добави</button>
 				</br>

 				<a href="https://www.fashiondays.bg/s/outlet-menu-mmse-b" target="_blank">Детска мода за момчета във Fashion Days</a>
 				<button type="submit" name="but" value="52">Добави</button>
 				</br>
 				
 			</div>

 			<div id="casual-shoes">

 				<h2>Обувки</h2>
 				
 				<a href="https://www2.hm.com/bg_bg/sale/shopbyproductmen/shoes.html" target="_blank">Мъжки обувки в H&M</a>
 				<button type="submit" name="but" value="53">Добави</button>
 				</br>

 				<a href="https://www.bershka.com/bg/%D0%BC%D1%8A%D0%B6%D0%B5/promo-%D0%B4%D0%BE--30%25/%D0%BE%D0%B1%D1%83%D0%B2%D0%BA%D0%B8-c1010203526.html" target="_blank">Мъжки обувки в Bershka</a>
 				<button type="submit" name="but" value="54">Добави</button>
 				</br>

 				<a href="https://www2.hm.com/bg_bg/sale/shopbyproductladies/shoes.html" target="_blank">Дамски обувки в H&M</a>
 				<button type="submit" name="but" value="55">Добави</button>
 				</br>

 				<a href="https://www.bershka.com/bg/%D0%B6%D0%B5%D0%BD%D0%B8/promo-%D0%B4%D0%BE--40%25/%D0%BE%D0%B1%D1%83%D0%B2%D0%BA%D0%B8-c1010311005.html" target="_blank">Дамски обувки в Bershka</a>
 				<button type="submit" name="but" value="56">Добави</button>
 				</br>

 				<a href="https://www2.hm.com/bg_bg/sale/shopbyproductkids/view-all.html?sort=stock&productTypes=%D0%BE%D0%B1%D1%83%D0%B2%D0%BA%D0%B8&image-size=small&image=stillLife&offset=0&page-size=36" target="_blank">Детски обувки в H&M</a>
 				<button type="submit" name="but" value="57">Добави</button>
 				</br>

 				<a href="https://www.zara.com/bg/bg/detsko-momcheta-obuvki-specialni-tseni-l258.html?v1=1080009" target="_blank">Обувки за Момчета в Zara</a>
 				<button type="submit" name="but" value="58">Добави</button>
 				</br>

 				<a href="https://www.zara.com/bg/bg/detsko-momicheta-obuvki-specialni-tseni-l422.html?v1=1077496" target="_blank">Обувки за Момичета в Zara</a>
 				<button type="submit" name="but" value="59">Добави</button>
 				</br>

 			</div>
 		</section>

 		<section id="high-end">
 			<h1>High-end Мода</h1>
 			<div id="high-end-men">

 				<h2>Мъже</h2>
 				
 				<a href="https://www.endclothing.com/eu/sale/sale-clothing?brand=A%20Bathing%20Ape~Alexander%20McQueen~Alexander%20Wang~Givenchy~Gosha%20Rubchinskiy~Off-White~Raf%20Simons~Stone%20Island~Valentino~Versace~Y-3" target="_blank">Мъжко облекло в End Clothing</a>
 				<button type="submit" name="but" value="60">Добави</button>
 				</br>

 				<a href="https://www.farfetch.com/bg/shopping/men/sale/clothing-2/items.aspx?view=180" target="_blank">Мъжко облекло във Farfetch</a>
 				<button type="submit" name="but" value="61">Добави</button>
 				</br>

 				<a href="https://www.selfridges.com/DE/en/cat/mens/on_sale/" target="_blank">Мъжка мода в Selfridges</a>
 				<button type="submit" name="but" value="62">Добави</button>
 				</br>

 			</div>

 			<div id="high-end-women">

 				<h2>Жени</h2>
 				
 				<a href="https://www.farfetch.com/bg/shopping/women/sale/clothing-1/items.aspx" target="_blank">Дамско облекло във Farfetch</a>
 				<button type="submit" name="but" value="63">Добави</button>
 				</br>

 				<a href="https://www.selfridges.com/DE/en/cat/womens/on_sale/" target="_blank">Дамска мода в Selfridges</a>
 				<button type="submit" name="but" value="64">Добави</button>
 				</br>

 			</div>

 			<div id="high-end-kids">

 				<h2>Деца</h2>

 				<a href="https://www.farfetch.com/bg/shopping/kids/sale/boys-clothing-3/items.aspx" target="_blank">Детско облекло за Момчета във Farfetch</a>
 				<button type="submit" name="but" value="65">Добави</button>
 				</br>

 				<a href="https://www.farfetch.com/bg/shopping/kids/sale/girls-clothing-4/items.aspx?view=180" target="_blank">Детско облекло за Момичета във Farfetch</a>
 				<button type="submit" name="but" value="66">Добави</button>
 				</br>

 			</div>

 			<div id="high-end-shoes">

 				<h2>Обувки</h2>

 				<a href="https://www.endclothing.com/eu/sale/sale-footwear?department=Luxury%20Sneakers&gender=Mens" target="_blank">Мъжки обувки в End Clothing</a>
 				<button type="submit" name="but" value="67">Добави</button>
 				</br>

 				<a href="https://www.farfetch.com/bg/shopping/men/sale/shoes-2/items.aspx?view=180&scale=282&attributes:6=11" target="_blank">Мъжки обувки във Farfetch</a>
 				<button type="submit" name="but" value="68">Добави</button>
 				</br>

 				<a href="https://www.endclothing.com/eu/sale/sale-footwear?department=Luxury%20Sneakers&gender=Womens" target="_blank">Дамски обувки в End Clothing</a>
 				<button type="submit" name="but" value="69">Добави</button>
 				</br>

 				<a href="https://www.farfetch.com/bg/shopping/women/sale/shoes-1/items.aspx?view=180&scale=274&attributes:17=59" target="_blank">Дамски обувки във Farfetch</a>
 				<button type="submit" name="but" value="70">Добави</button>
 				</br>

 				<a href="https://www.farfetch.com/bg/shopping/kids/sale/boys-shoes-3/items.aspx?view=180&scale=249" target="_blank">Детски обувки за Момчета във Farfetch</a>
 				<button type="submit" name="but" value="71">Добави</button>
 				</br>

 				<a href="https://www.farfetch.com/bg/shopping/kids/sale/girls-shoes-4/items.aspx" target="_blank">Детски обувки за Момичета във Farfetch</a>
 				<button type="submit" name="but" value="72">Добави</button>
 				</br>

 			</div>
 		</section>
 	</form>
 </section>
<?php
	require "footer.php";
?>






<?php

if (isset($_POST) && !empty($_POST)) //proverqvame dali ima post metod i dali ima neshto v nego
		{
			$userid=$_SESSION['userId'];  //promenliva sus st-st id-to na choveka
			$sel="SELECT * FROM users WHERE idUsers='".$userid."'";  //izbira se ot DB zapisa kudeto id = userid
			$res2=$conn->query($sel);  //izpulnqva se vruzkata
			//print_r($res2); 
			if($res2 -> num_rows >0) //proverqvame dali ima takuv zapis
			{
				$row=$res2->fetch_assoc(); //vzimame vs informaciq ot zapisa samo s tova id

				$sites=$row['sites'];  //promenliva sus st-st samo informaciqta ot kolonata sites v zapisa samo s tova id
			}

			$sel="UPDATE users SET sites='".$sites."' '".$_POST['but']." 'WHERE idUsers='".$userid."'";  //update-vame informaciqta v DB taka che v kolonata sites da se zapishe informaciq za saita za koito se izpulnqva post metoda ot butona + sledvashtiq post metod za butona s ime but (vs tova samo za tova id)
	
			$res= $conn->query($sel) or die("Connection lost"); //proverqvame dali ima vruzka
		}


?>

<?php
	require "footer.php";
?>