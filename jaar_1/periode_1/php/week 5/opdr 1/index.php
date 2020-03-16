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

		$result = "";

		if (!empty($_POST["text"])) {
		    $result = $_POST["text"];  
    		$woordenArray = explode(" ", $result);
			foreach ($woordenArray  as $woord) {
				if (strlen($woord) >= 4) {
					echo substr($woord, -1);
					echo substr($woord, 1 , -1);
					echo substr($woord, 0 , 1)."<br>";
				}
				else{
					echo $woord."<br>";
				}
				
			}  
		}else{  
		    echo "Typ text in de textarea voor op de knop te klikken.";
		}
			?>
	<form method="post">
		<textarea name="text"></textarea>
		<button name="button">verzend</button>
	</form>
	</body>
</html>