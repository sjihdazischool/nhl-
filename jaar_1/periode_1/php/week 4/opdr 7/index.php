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
	    for($i=1; $i<=10; $i++){
	        for($j=1; $j <= $i; $j++){
                echo "*";
	        }
	        echo "<br />";
	    }
		echo "</p><p>";
		$b = 1;
		while ($b <= 10) {
			$a = 1;
			while ($a <= $b) {
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
			} while ($i <= $j);
		    echo "<br>";
		    $j++;
		} while ($j <= 10);
		echo "</p>";
	?>
	</body>
</html>