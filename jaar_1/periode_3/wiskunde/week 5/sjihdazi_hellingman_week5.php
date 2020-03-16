<?php
	function rechteHoek($graden)
	{
	    if ($graden > 90 && $graden < 180) {
	        $hoek = "Stompe hoek<br>";
	    } elseif ($graden > 0 && $graden < 90) {
	        $hoek = "Scherpe hoek<br>";
	    } elseif ($graden == 90) {
	        $hoek = "Rechte hoek<br>";
	    } else {
	        echo "error";
	    }
	    return $hoek;
	}

	function opdracht1()
	{
		$bc = 4;
		$ab = 7;
		$hoekb = 36;

		$cd = sin(deg2rad($hoekb)) * $bc;
		$bd = $cd / tan(deg2rad($hoekb));
		$ad = $ab - $bd;

		$ac = pow($ad, 2) + pow($cd, 2);
		$ac = round(sqrt($ac), 2);

		$hoeka = round(rad2deg(asin($cd / $ac)));
		$hoekc = 180 - ($hoeka + $hoekb);

		$oppervlakte = round(0.5 * $ab * $cd, 2)."m2";

		echo 
		"zijde ab = ".$ab."<br> 
		zijde bc = ".$bc."<br> 
		zijde ac = ".$ac."<br><br>";

		echo 
		"hoek a = ".$hoeka." graden<br>
		hoek b = ".$hoekb." graden<br> 
		hoek c = ".$hoekc." graden<br><br>";

		echo 
		"hoek a is een ".rechteHoek($hoeka).
		"hoek b is een ".rechteHoek($hoekb).
		"hoek c is een ".rechteHoek($hoekc);

		echo "De oppervlakte van de driehoek is".$oppervlakte."<br><br>";
	}

	function opdracht2()
	{
		$hoekb = 36;
		$hoeka = 132;
		$hoekc = 180 - ($hoeka + $hoekb);

		$ac = 6;

		$cd = sin(deg2rad($hoeka)) * $ac;
		$ad = pow($ac, 2) - pow($cd, 2);
		$ad = sqrt($ad);
		$bc = $cd / sin(deg2rad($hoekb));
		$ab = (cos(deg2rad($hoekb)) * $bc) + (cos(deg2rad($hoeka)) * $ac);

		$oppervlakte = round(0.5 * $ab * $cd, 2)."m2";

		echo 
		"zijde ab = ".round($ab,2)."<br> 
		zijde bc = ".round($bc,2)."<br> 
		zijde ac = ".$ac."<br><br>";
		
		echo 
		"hoek a = ".$hoeka." graden<br>
		hoek b = ".$hoekb." graden<br> 
		hoek c = ".$hoekc." graden<br><br>";

		echo 
		"hoek a is een ".rechteHoek($hoeka).
		"hoek b is een ".rechteHoek($hoekb).
		"hoek c is een ".rechteHoek($hoekc);

		echo "De oppervlakte van de driehoek is".$oppervlakte."<br><br>";
	}

	opdracht1();
	opdracht2();
?>