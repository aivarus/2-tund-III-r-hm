<?php
				$first_name = "Aivar";
				$last_name = "Russki";

				echo $first_name." ".$last_name;
?>
<br>
<?php

				$age = 10;
				
				//testin loogikat, juhul kui vanus on väiksem 
				//kui 18, kirjuta ""alaealine" , muul juhul "täisealine"
				
				//if'i sisse loogikatehe
				if($age < 18) {
					//tõene
					echo "alaealine" ;
				
				} else { 
					//väär
					echo "täisealine" ;
				}
				
?>
<br>
<?php
				
				// Vastavalt vanusele trükime niimitu korda välja sõna "palju"
				
				for($i = 0; $i < $age; $i = $i + 1) {
					
					// tegevus mis kordub
					echo "palju".$i." ";
					
				}
				
				echo "õnne!";
				

?>
<br>
<?php
				
				//trüki välja kuupäev kujul: nädalapäev, kp kuu aasta
				echo date("l, j, F, y")
	
?>	