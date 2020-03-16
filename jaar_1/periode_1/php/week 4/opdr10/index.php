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
		$answer = 0;    
		for ($i = 1; $i <= 100; $i++){
	        $answer = $i + $answer;
	        if ($i == 100) {
	           echo $i." = ".$answer;
	        }
	        else {
	           echo $i." + ";
	        }       
	    };
	?>
	</body>
</html>