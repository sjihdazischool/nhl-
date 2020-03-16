<?php
	$model_aprijs = 12;
	$model_bprijs = 10;

	$lijn1_max = 25 * 60;
	$lijn2_max = 22 * 60;

	$lijn1_a = 15;
	$lijn1_b = 10;
	$lijn2_a = 10;
	$lijn2_b = 12;

 	$a_max = 80;
 	$a = 0;
	$maxw = -1;

	while ($a < $a_max) {
	    $a++;
	    $b = 0;
	    $lijn1_over = $lijn1_max - ($lijn1_a * $a);
		$lijn2_over = $lijn2_max - ($lijn2_a * $a);
    	while ($lijn1_over  > 0 AND $lijn2_over > 0) {
	        $b++;
	        $lijn1_over = $lijn1_over - $lijn1_b;
	        $lijn2_over = $lijn2_over - $lijn2_b;

	        if ($lijn1_over >= 0 AND $lijn2_over >= 0) {
	            $winst = ($a * $model_aprijs) + ($b * $model_bprijs);
	            if ($winst > $maxw) {
	                $maxw = $winst;
	                $maxa = $a;
	                $maxb = $b;
	            }
	        }
	    }
	}

	echo "model a aantal:".$maxa."<br>";
	echo "model b aantal:".$maxb."<br>";
	echo "totale winst:".$maxw."<br>";

?>