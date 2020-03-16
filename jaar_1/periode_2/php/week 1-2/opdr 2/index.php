<!DOCTYPE html>

<html>
<head>
 <title></title>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<?php
	/*
		echo's om mijn naam ardes en geboortedatum weer te geven
	*/
	$boxes = array(
		"smallbox" => array('length' => 12,  'width' => 10, 'heigth' => 2.5),
		"mediumbox" => array('length' => 30,  'width' => 20, 'heigth' => 4),
		"largebox" => array('length' => 60,  'width' => 40, 'heigth' => 11.5)
	);

	foreach ($boxes as $box => $volume) {
		echo "<p>Doos ".$box." afmeting lengte: ".$volume['length']."cm breedtte: ".$volume['width']."cm hoogte: ".$volume['heigth']."cm. Het volume is: ".$volume['length']*$volume['width']*$volume['heigth']."cm3.</p>";
	}
?>
</body>
</html>