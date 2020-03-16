<?php
    function berekenBoomhoogte($afstand, $ooghoogte)
    {
    	 $boomhoogte = ($afstand / 2) + $ooghoogte;
    	 echo "<p>De boom is " . $boomhoogte . "m hoog.</p>";
    }
    //de lengtes zijn in meter ingevuld
    berekenBoomhoogte(10, 1.82);

/*
	De stokken d en c staan als een T op elkaar, dat betekend dat c twee keer zo lang is als d. Hier maken we een rechthoekige driehoek van.
	Met die informatie kan je dezelfde berekening doen voor de driehoek van de boom, daar tel je dan de ooghoogte bij op en je hebt de hoogte van de boom.
*/
?>