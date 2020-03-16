<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title></title>
	</head>
	<body>
		<h1>Week 2</h1>
	<?php
		/*
		Sjihdazi Hellingman
		10-09-2018
		*/
		$d = dir(".");

		echo "<ul>";
		while ($entry = $d->read())
		{
		    if (is_dir($entry) && ($entry != '.') && ($entry != '..'))
	        echo "<li><a href='{$entry}'>{$entry}</a></li>";
		}
		echo "</ul>";

		$d->close();
	?>
	</body>
</html>