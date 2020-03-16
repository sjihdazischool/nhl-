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

		$cijfer = 6;
		
		if($cijfer == 1 || $cijfer == 2 || $cijfer == 3){
			echo "Zeer slecht";
		}
		elseif($cijfer == 4 || $cijfer == 5){
			echo "Onvoldoende";
		}
		elseif($cijfer == 6 || $cijfer == 7){
			echo "Voldoende";
		}
		elseif($cijfer == 8){
			echo "Goed";
		}
		elseif($cijfer == 9){
			echo "Zeer goed";
		}
		elseif($cijfer == 10){
			echo "Uitmuntend";
		}
		else{
			echo "Cijfer ongeldig";
		}

		switch(true){                                
			case  $cijfer == 1 || $cijfer == 2 || $cijfer == 3: 
				echo "<p>Zeer slecht</p>";                     
				break;                    
			case  $cijfer == 4 || $cijfer == 5: 
				echo "<p>Onvoldoende</p>";                     
				break;                                  
			case  $cijfer == 6 || $cijfer == 7: 
				echo "<p>Voldoende</p>";                     
				break;                                  
			case  $cijfer == 8: 
				echo "<p>Goed</p>";                     
				break;                                  
			case  $cijfer == 9: echo 
				"<p>Zeer goed</p>";                     
				break;                                  
			case  $cijfer == 10: echo 
				"<p>Uitmuntend</p>";                     
				break;                                  
			default: echo 
				"Ongeldig cijfer"; 
				break;                
		}
	?>
	</body>
</html>