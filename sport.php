<?php
	require "header.php";
	require './includes/dbh.inc.php';	
?>
<section>
	<form action="" method="post">
		<section id="football">
			<h1>Футбол</h1>
			<div id="football-teamwear">
				
				<a href="https://www.sportdepot.bg/outlet/sportna_ekipirovka-98/futbol?genderId=0&sportId=26&orderBy=default&showBy=80" target="_blank">Футболна екипировка в Sport Depot</a>
 				<button type="submit" name="but" value="99">Добави</button>
 				</br>

 				<a href="https://www.sportdepot.bg/muje-obleklo/outlet-2_35" target="_blank">Мъжко облекло в Sport Depot</a>
 				<button type="submit" name="but" value="3">Добави</button>
 				</br>

 				<a href="https://www.sportdepot.bg/muje-obleklo/outlet-2_35" target="_blank">Мъжко облекло в Sport Depot</a>
 				<button type="submit" name="but" value="3">Добави</button>
 				</br>

 				<a href="https://www.sportdepot.bg/muje-obleklo/outlet-2_35" target="_blank">Мъжко облекло в Sport Depot</a>
 				<button type="submit" name="but" value="3">Добави</button>
 				</br>

			</div>
			
			<div id="footballs">

				<a href="https://www.sportdepot.bg/muje-obleklo/outlet-2_35" target="_blank">Мъжко облекло в Sport Depot</a>
 				<button type="submit" name="but" value="3">Добави</button>
 				</br>

 				<a href="https://www.sportdepot.bg/muje-obleklo/outlet-2_35" target="_blank">Мъжко облекло в Sport Depot</a>
 				<button type="submit" name="but" value="3">Добави</button>
 				</br>

 				<a href="https://www.sportdepot.bg/muje-obleklo/outlet-2_35" target="_blank">Мъжко облекло в Sport Depot</a>
 				<button type="submit" name="but" value="3">Добави</button>
 				</br>
				
			</div>

			<div id="gloves">

				<a href="https://www.sportdepot.bg/muje-obleklo/outlet-2_35" target="_blank">Мъжко облекло в Sport Depot</a>
 				<button type="submit" name="but" value="3">Добави</button>
 				</br>

 				<a href="https://www.sportdepot.bg/muje-obleklo/outlet-2_35" target="_blank">Мъжко облекло в Sport Depot</a>
 				<button type="submit" name="but" value="3">Добави</button>
 				</br>

 				<a href="https://www.sportdepot.bg/muje-obleklo/outlet-2_35" target="_blank">Мъжко облекло в Sport Depot</a>
 				<button type="submit" name="but" value="3">Добави</button>
 				</br>
				
			</div>

			<div id="football-training">

				<a href="https://www.sportdepot.bg/muje-obleklo/outlet-2_35" target="_blank">Мъжко облекло в Sport Depot</a>
 				<button type="submit" name="but" value="3">Добави</button>
 				</br>

 				<a href="https://www.sportdepot.bg/muje-obleklo/outlet-2_35" target="_blank">Мъжко облекло в Sport Depot</a>
 				<button type="submit" name="but" value="3">Добави</button>
 				</br>
				
			</div>
		</section>

		<section id="basketball">
			<h1>Баскетбол</h1>
			<div id="basketball-teamwear">

				<a href="https://www.sportdepot.bg/muje-obleklo/outlet-2_35" target="_blank">Мъжко облекло в Sport Depot</a>
 				<button type="submit" name="but" value="3">Добави</button>
 				</br>

 				<a href="https://www.sportdepot.bg/muje-obleklo/outlet-2_35" target="_blank">Мъжко облекло в Sport Depot</a>
 				<button type="submit" name="but" value="3">Добави</button>
 				</br>

 				<a href="https://www.sportdepot.bg/muje-obleklo/outlet-2_35" target="_blank">Мъжко облекло в Sport Depot</a>
 				<button type="submit" name="but" value="3">Добави</button>
 				</br>

 				<a href="https://www.sportdepot.bg/muje-obleklo/outlet-2_35" target="_blank">Мъжко облекло в Sport Depot</a>
 				<button type="submit" name="but" value="3">Добави</button>
 				</br>

 				<a href="https://www.sportdepot.bg/muje-obleklo/outlet-2_35" target="_blank">Мъжко облекло в Sport Depot</a>
 				<button type="submit" name="but" value="3">Добави</button>
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