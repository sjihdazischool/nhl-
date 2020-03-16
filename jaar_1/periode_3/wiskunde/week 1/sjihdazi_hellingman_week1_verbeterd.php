<?php
	$lengte;
	$gewicht;
	$score;

	$lengte = 1.8;
	$gewicht = 90;
	$score = $gewicht / ($lengte * $lengte); 
	echo "opdr 1";
	echo "<br>";
	echo "De BIM score van iemand die 180cm lang is en 90 kilo weegt is ".round($score, 2);
	echo "<br>";

	$gewicht = 60;
	$score = 18;
	$lengte = sqrt($gewicht/$score);
	echo "Iemand van 60kg met een BMI score van 18 zou ".round($lengte, 2)."m lang moeten zijn.";
	echo "<br>";

	$lengte = 2;
	$score = 35;
	$gewicht = ($lengte * $lengte) * $score;
	echo "Iemand met een BMI van 35 en een lengte van 200cm zal ongeveer ".$gewicht."kg zijn.";
	echo "<br>";

	$lengte = 1.82;
	$gewicht = 92;
	$score = $gewicht / ($lengte * $lengte); 
	echo "De BIM score van mij, ik ben 182cm lang is en ik weeg 92 kilo. Dus mijn score is: ".round($score, 2);
	echo "<br><br>";

	echo "opdr 2";
	echo "<br>";
	$random_number_array = range(18, 88);
	shuffle($random_number_array );
	$random_number_array = array_slice($random_number_array ,0,20);
	echo "Het gemiddelde cijfer is ".array_sum($random_number_array)/count($random_number_array);
	echo "<br><br>";

	echo "opdr 3";
	echo "<br>";
	function collatz_sequence($x)
	{
	    $num_seq = [$x];
	    if ($x < 1)
	    {
	       return [];
	    }
	    while ($x > 1)
	      {
	       if ($x % 2 == 0)
	       {
	         $x = $x / 2;
	       }
	       else
	       {
	         $x = 3 * $x + 1;
	       }
	    # Added line
	     array_push($num_seq, $x);
	      }
	    return $num_seq;
	}
	echo "<pre>";
	print_r(collatz_sequence(81));
	print_r(collatz_sequence(965));
	print_r(collatz_sequence(451));

?>