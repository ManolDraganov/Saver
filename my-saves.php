<?php
	require "header.php";	
	require './includes/dbh.inc.php';	
?>
<?php


			$userid=$_SESSION['userId']; //promenliva sus st-st imeto na choveka
			$sel="SELECT * FROM users WHERE idUsers='".$userid."'"; //izbira se vs ot DB kudeto id=userid
			$res2=$conn->query($sel);  //izpulnqva se vruzkata

			if($res2 -> num_rows >0)  //proverqvame dali ima takuv zapis
			{
				$row=$res2->fetch_assoc();  //izkarva se vs informaciq ot zapisa samo s tova id

				$sites=$row['sites'];  //promenliva sus st-st samo informaciqta ot kolonata sites v zapisa samo na tova id
			}

				if (!empty($sites) && $sites!=' ' && $sites!='')  {//proverka dali ima neshto v kolonata sites za tozi zapis
					$ids=explode (' ', $sites);  // explode() premahva intervala i informaciqta v $sites q predstavq kato niz
					$length=count($ids);  //provenliva koqto  prebroqva elementite v niza $ids

					$gone[0]=0; //  masivche 
					echo "<form method='post' action=''>";
					for ($i=0;$i<$length-1;$i++)  //cikul s proverka broq na elementite v niza -1 (shtot posledniq e interval)
					{	
			
							$key=0;
							for($y=0;$y<count($gone);$y++)  //cikul s proverka proq broq na elementite v masiva $gone
							{
								if($ids[$i]==$gone[$y]) // proverka ako nqkoi ot elementite v niza se povtarq 
									{$key=1;
								 	break;}  //chupim

								}
								$gone[$i]=$ids[$i];  // element ot niza priema st-st na element ot masiva

								if($key==0)  //ako nqma povtoreniq

								{

									$sel= "SELECT * FROM site WHERE id='".$ids[$i]."'";
									$res=$conn->query($sel);

									if($res -> num_rows >0)
									{
										$row=$res->fetch_assoc();
										
										echo "<a href='".$row['link']."'>".$row['name']."</a>";

										echo "<button type='submit' name='but1' value='".$ids[$i]."'>Премахни</button> </br>";
									}

							}
						}
						echo "</form>";
}
else {
	echo "<a style='color: #f00; text-align:center;' ><strong>Нямаш запазени сайтове!</strong</a>";
}
			



require "footer.php";

	if(isset($_POST) && !empty($_POST) && isset($length))
	{
		$iddel=$_POST['but1'];
		$sqld="SELECT * FROM users WHERE idUsers='".$userid."'";
		$find=$conn->query($sqld);
		if($find->num_rows>0)
		{
			$refresh="UPDATE users SET sites=''WHERE idUsers='".$userid."'";
			$abv=$conn->query($refresh);

			for($z=0;$z<$length-1;$z++)
			{


				$findagain="SELECT * FROM users WHERE idUSERs='".$userid."'";
				$aa=$conn->query($findagain);
				$row=$aa->fetch_assoc(); 
				$sites=$row['sites'];	





				$delete="UPDATE users SET sites='".$sites."' '".$ids[$z]." 'WHERE idUsers='".$userid."'";
				if($ids[$z]!=$iddel)
				{
					$res=$conn->query($delete);
				}
			}
		}
	}

?>