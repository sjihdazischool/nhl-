<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Find the mistakes</title>
	</head>
	<body>
		<?php
			/*
			Sjihdazi Hellingman
			04-09-2018
			*/
			$fahrenheit1 = 1;
			$fahrenheit2 = 15.5;
			$celcius1 = ($fahrenheit1 - 32) *  5 / 9;
			$celcius2 = ($fahrenheit2 - 32) *  5 / 9;
			echo "<p>".$fahrenheit1." ℉ is ".round($celcius1)." ℃</p>";
			echo "<p>".$fahrenheit2." ℉ is ".round($celcius2)." ℃ </p>";
		?>
	</body>
</html>