<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title></title>
	</head>
	<body>
	<?php
		/*
		Sjihdazi Hellingman
		10-09-2018
		*/
		echo "</p><p>";
	    for($i=10; $i>=1; $i--){
	        for($j=1; $j <= $i; $j++){
                echo "*";
	        }
	        echo "<br />";
	    }
		echo "</p><p>";
		$b = 10;
		while ($b >= 1) {
			$a = 1;
			while ($a <= $b) {
				echo "*";
				$a++;
			}
			echo "<br>";
			$b--;
		}		
		echo "</p><p>";
		$j = 10;
		do {
			$i = 1;
			do {
			    echo "*";
			    $i++;
			} while ($i <= $j);
		    echo "<br>";
		    $j--;
		} while ($j >= 1);
		echo "</p>";
	?>
	</body>
</html>