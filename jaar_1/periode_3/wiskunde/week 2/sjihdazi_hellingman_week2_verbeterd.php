<?php
	$auto_place = 1;
	$bus_place = 3;
	$max_place = 75;

	//checkt of alle criteria kloppen
	function check($bus_place,$auto_place,$max_place){
		$check = 0;
		$echo = false;

		if ($bus_place > 30) {
			echo "er mogen niet meer dan 10 bussen zijn";
			echo "<br>";
		}
		else{
			$check ++;
		}

		if ($bus_place / $auto_place <= 1 / 3 && $bus_place / $auto_place >= 1 / 8){
			echo "verhouding auto's en bussen is niet goed";
			echo "<br>";
		}
		else{
			$check ++;
		}

		if ($bus_place + $auto_place > $max_place) {
			echo "te veel voertuigen";
			echo "<br>";
		}
		else{
			$check ++;
		}

		if ($check == 3) {
			$echo = true;
		}

		if ($echo == true) {
			//berekent de prijs van alle parkeerplaatsen
			$auto_prijs = $auto_place * 3;
			$bus_prijs = $bus_place / 3 * 10;
			$total = $auto_prijs + $bus_prijs;

			return array($total, $bus_prijs, $auto_prijs);
		}
	}

	//geautomatiseerde manier om alle mogenlijke opties te berekenen.
	$maxwinst = -1;
	for ($bus = 0; $bus <= 10; $bus++) { 
		$autos = 75 - $bus * 3;
		$winst = $bus * 10 + $autos * 3;
		if ($bus / $autos >= 1 / 8 && $bus / $autos <= 1 / 3) {
			if ($winst > $maxwinst) {
				$maxwinst = $winst;
				$maxbus = $bus;
				$maxauto = $autos;
			}
		}
	}

	
	list($total, $bus_prijs, $auto_prijs) = check(15,40,75);
	echo "opdr 1";
	echo "<br>";
	echo "De dagopbrengst van 40 auto's en 5 bussen is ";
	echo $total.",-";
	echo "<br><br>";

	list($total, $bus_prijs, $auto_prijs) = check(30,45,75);
	echo "opdr 2";
	echo "<br>";
	echo "De opbrengst van 10 bussen is ";
	echo $bus_prijs.",- ";
	echo "Een auto brengt 3,- per dag op dus dan moet je 200,- / 3,- doen, en dan kom je uit op 67 auto's maar dit kan niet omdat de criteria dit niet toelaten.";
	echo "<br><br>";

	list($total, $bus_prijs, $auto_prijs) = check(30,45,75);
	echo "opdr 3";
	echo "<br>";
	echo "Er mogen max 10 autobussen staan opde parkeerplaats. Dus het max aan opbrengst zou 10 autobussen zijn en de rest helemaal vol met auto's en dat zou dan ";
	echo $total.",- opbrengen.";
	echo "<br><br>";
?>