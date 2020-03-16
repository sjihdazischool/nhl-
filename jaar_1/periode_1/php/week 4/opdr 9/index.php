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
		echo "<p>";
		for ($i=1; $i <= 10; $i++) { 
		    for($k=6; $k<=8; $k++){
		       echo $k * $i."&#160;&#160;";
		    }
		    echo "<br>";
		}

		echo "</p><p>";
		$b = 1;
		while ($b <= 10) {
			$a = 6;
			while ($a <= 8) {
				echo $a * $b."&#160;&#160;";
				$a++;
			}
			echo "<br>";
			$b++;
		}		
		echo "</p><p>";
		$j = 1;
		do {
			$i = 6;
			do {
			    echo $i * $j."&#160;&#160;";
			    $i++;
			} while ($i <= 8);
		    echo "<br>";
		    $j++;
		} while ($j <= 10);
		echo "</p>";
	?>
	</body>
</html>