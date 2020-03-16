<?php
//a
$autos = 40;
$bussen= 5;
$plaatsen = 75;

$vrijeplaatsen = $plaatsen - ($bussen * 3) - $autos;

if ($vrijeplaatsen < 0 ) {
	echo "gaat niet passen";
}
elseif ($bussen > 10) {
	echo "teveel bussen";
}
else{
	$opbrengst = ($autos * 3) + ($bussen * 10);
	echo "a<br> " . $opbrengst . "<br>";
}


//b
$geld = 300;
$bussen = 10;
$buswinst = $bussen * 10;

$overig = $geld - $buswinst;
$aantalautos = $overig / 3;
echo "b<br> " . $aantalautos . "<br>";

//c
$autos = 45;
$bussen= 10;
$plaatsen = 75;

$vrijeplaatsen = $plaatsen - ($bussen * 3) - $autos;

if ($vrijeplaatsen < 0 ) {
	echo "gaat niet passen";
}
elseif ($bussen > 10) {
	echo "teveel bussen";
}
else{
	$opbrengst = ($autos * 3) + ($bussen * 10);
	echo "c<br> " . $opbrengst . ",- maximale opbrengst<br>";
	echo $autos . " autos<br>";
	echo $bussen . " bussen<br>";
}

?>