<?php
	for ($i=1; $i <= 10 ; $i++) { 
		$j = 1;
		for ($j=1; $j <= 10 ; $j++) { 
			if ($j<=$i) {
				echo "*";
			}
			else {
				echo " &nbsp";
			}
		}
		
		for ($k=10; $k >= $i ; $k--) { 
			echo " &nbsp";
		}
		for ($l=1; $l <= $i ; $l++) { 
			echo "*";
		}
		echo "<br>";
	}
?>