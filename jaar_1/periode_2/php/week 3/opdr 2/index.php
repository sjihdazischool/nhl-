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
		
		function checkNumber($number){
			if($number > 100){
				echo $number." is greater than 100";
			}
			else{
				echo $number." is less than or equal to 100";
			}
		}     
		return checkNumber(75);
	?>
	</body>
</html>