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
		for ($i=0; $i < 5; $i++) { 
			for ($x = 1; $x <= 10; $x++) {
			    echo "*";
			}
			echo "<br>";
		}
		echo "</p><p>";
		$b = 1;
		while ($b <= 5) {
			$a = 1;
			while ($a <= 10) {
				echo "*";
				$a++;
			}
			echo "<br>";
			$b++;
		}		
		echo "</p><p>";

		$j = 1;
		do {
			$i = 1;
			do {
			    echo "*";
			    $i++;
			} while ($i <= 10);
		    echo "<br>";
		    $j++;
		} while ($j <= 5);
		echo "</p>";
	?>
	</body>
</html>