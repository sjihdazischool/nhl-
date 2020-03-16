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
		$datum = 14062016;
		$dag = $datum / 1000000 % 100;
		$maand = $datum / 10000 % 100;
		$jaar = $datum % 10000;

		echo "<p>Dag: ".$dag."<p/>";
		echo "<p>Maand: ".$maand."<p/>";
		echo "<p>Jaar: ".$jaar."<p/>";
	?>
	</body>
</html>