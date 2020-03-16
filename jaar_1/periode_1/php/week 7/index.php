<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
 echo "b7.5<br><br>";
    for ($regel = 0; $regel <= 10; $regel++) {
        echo "*";
    }
    echo "<br><br>b7.6<br><br>";
    for ($regel = 0; $regel <= 10; $regel++) {
        for ($ster = 0; $ster < 10; $ster++) {
            echo "*";
        }
        echo "<br>";
    }
    echo "<br><br>b7.7<br><br>";
    for ($regel = 0; $regel <= 10; $regel++) {
        for ($ster = 0; $ster < $regel; $ster++) {
            echo "*";
        }
        echo "<br>";
    }
    echo "<br><br>b7.8<br><br>";
    for ($regel = 0; $regel < 10; $regel++) {
        for ($ster = 10; $ster > $regel; $ster--) {
            echo "*";
        }
        echo "<br>";
    }
    echo "<br><br>b7.9.1<br><br>";
    for ($regel = 0; $regel <= 9; $regel++) {
        for ($spatie = 9; $spatie >= $regel; $spatie--) {
            echo " &nbsp;";
        }
        for ($ster = 0; $ster <= $regel; $ster++) {
            echo "*";
        }
        echo "</br>";
    }
    echo "<br><br>b7.9.2<br><br>";
    for ($regel = 1; $regel <= 5; $regel++) {
        for ($spatieL = 2; $spatieL <= $regel; $spatieL++) {
            echo '&nbsp;&nbsp; ';
        }
        for ($sterL = 5; $sterL >= $regel; $sterL--) {
            echo '* ';
        }
        echo '<br>';
    }
    echo "<br><br>b7.9.3<br><br>";
    for ($regel = 1; $regel <= 5; $regel++) {
        for ($spatieL = 2; $spatieL <= $regel; $spatieL++) {
            echo '&nbsp;&nbsp; ';
        }
        for ($sterL = 5; $sterL >= $regel; $sterL--) {
            echo '* ';
        }
        for ($sterR = 4; $sterR >= $regel; $sterR--) {
            echo '* ';
        }
        echo '<br>';
    }
    echo "<br><br>b7.9.4<br><br>";
    for ($regel = 0; $regel <= 5; $regel++) {
        for ($spatieL = 6; $spatieL >= $regel; $spatieL--) {
            echo '&nbsp;&nbsp; ';
        }
        for ($sterL = 0; $sterL <= $regel; $sterL++) {
            echo '* ';
        }
        for ($sterR = 0; $sterR < $regel; $sterR++) {
            echo "* ";
        }
        echo '<br>';
    }
    echo "<br><br>b7.9.5<br><br>";
    for ($regel = 0; $regel <= 10; $regel++) {
        for ($ster = 0; $ster < $regel; $ster++) {
            echo "* ";
        }
        echo "<br>";
    }
    for ($regel = 0; $regel <= 10; $regel++) {
        for ($ster = 9; $ster > $regel; $ster--) {
            echo "* ";
        }
        echo "<br>";
    }
    echo "<br><br>b7.9.6<br><br>";
    for ($regel = 0; $regel <= 9; $regel++) {
        for ($spatie = 9; $spatie >= $regel; $spatie--) {
            echo " &nbsp;";
        }
        for ($ster = 0; $ster <= $regel; $ster++) {
            echo "*";
        }
        echo "</br>";
    }
    for ($regel2 = 2; $regel2 <= 10; $regel2++) {
        for ($spatie2 = 0; $spatie2 < $regel2; $spatie2++) {
            echo " &nbsp;";
        }
        for ($ster2 = 10; $ster2 >= $regel2; $ster2--) {
            echo "*";
        }
        echo "</br>";
    }
    echo "<br><br>b7.9.7<br><br>";
    for ($regel = 0; $regel < 10; $regel++) {
        for ($ster = 5; $ster > $regel; $ster--) {
            echo "* * ";
        }
        echo "<br>";
    }
    echo "<br><br>b7.9.8<br><br>";
    for ($regel = 1; $regel <= 5; $regel++) {
        for ($ster = 1; $ster <= $regel; $ster++) {
            echo "*" . "&nbsp" . "&nbsp";
        }
        echo "<br>";
    }
    for ($regel = 1; $regel <= 5; $regel++) {
        for ($ster = 1; $ster <= $regel; $ster++) {
            echo "*" . "&nbsp" . "&nbsp";
        }
        echo "<br>";
    }
    echo "<br><br>b7.9.10<br><br>";
    echo "mist";
    echo "<br><br>b7.9.11<br><br>";
    for ($regel = 1; $regel <= 5; $regel++) {
        for ($ster = 1; $ster <= $regel; $ster++) {
            echo "*" . "&nbsp" . "&nbsp";
        }
        echo "<br>";
    }
    for ($regel = 1; $regel <= 5; $regel++) {
        for ($ster = 1; $ster <= $regel; $ster++) {
            echo "*" . "&nbsp" . "&nbsp";
        }
        echo "<br>";
    }
    echo "<br><br>b7.9.12<br><br>";
    echo "mist";
    echo "<br><br>b7.9.13<br><br>";
    $l = 7;
    $k = 0;
    for ($regel = 0; $regel < 8; $regel++) {
        for ($plusL = 0; $plusL < $k; $plusL = $plusL + 1) {
            echo '+ ';
        }
        $k++;
        echo "- ";
        for ($PlusR = 0; $PlusR < $l; $PlusR = $PlusR + 1) {
            echo '+ ';
        }
        $l = $l - 1;
        echo("<br/>");
    }
    echo "<br><br>b7.9.14<br><br>";
    for ($regel = 0; $regel <= 10; $regel++) {
        for ($ster = 1; $ster <= $regel; $ster++) {
            echo " * ";
        }
        for ($min = 10; $ster <= $min; $min--) {
            echo " - ";
        }
        echo "<br />";
    }
    echo "<br><br>b7.9.15<br><br>";
    for ($regel = 1; $regel <= 9; $regel++) {
        for ($spatieL = 2; $spatieL <= $regel; $spatieL++) {
            echo '-&nbsp;&nbsp;';
        }
        for ($plusL = 8; $plusL >= $regel; $plusL--) {
            echo '+ ';
        }
        for ($plusR = 7; $plusR >= $regel; $plusR--) {
            echo '+ ';
        }
        for ($spatieR = 2; $spatieR <= $regel; $spatieR++) {
            if ($spatieR >= 9) {
            } else {
                echo '&nbsp;-&nbsp;';
            }
        }
        echo '<br>';
    }
    echo "<br><br>b7.9.16<br><br>";
    for ($regel = 1; $regel <= 8; $regel++) {
        for ($minL = 7; $minL >= $regel; $minL--) {
            echo " - ";
        }
        for ($plusL = 2; $plusL <= $regel; $plusL++) {
            echo "+";
        }
        for ($plusR = 3; $plusR <= $regel; $plusR++) {
            echo "+";
        }
        for ($minR = 8; $plusR <= $minR; $minR--) {
            echo " - ";
        }
        echo "<br />";
    }
    echo "<br><br>b7.9.17<br><br>";
    for ($regel = 1; $regel < 8; $regel++) {
        for ($j = 8; $j > $regel; $j--) {
            echo " - ";
        }
        for ($j = 0; $j < $regel; $j++) {
            echo "+";
        }
        echo "<br />";
    }
    for ($regel = 8; $regel > 0; $regel--) {
        for ($j = 8; $j > $regel; $j--) {
            echo " - ";
        }
        for ($j = 0; $j < $regel; $j++) {
            echo "+";
        }
        echo "<br />";
    }
    echo "<br><br>b7.9.18<br><br>";
    for ($regel = 1; $regel <= 15; $regel++) {
        for ($y = 1; $y <= ($regel > 8 ? 16 - $regel : $regel); $y++) {
            echo "+";
        }
        for ($yy = 7; $yy >= ($regel > 8 ? 16 - $regel : $regel); $yy--) {
            echo "-";
        }
        echo "</br>";
    }
    echo "<br><br>b7.9.19 <h1>moet nog worden gefixt</h1><br><br>";
    for ($regel = 1; $regel <= 6; $regel++) {
        for ($getal = $regel; $getal >= 1; $getal--) {
            echo "$getal";
        }
        echo"<br>";
    }
    echo "<br><br>b7.9.20<br><br>";
    for ($regel = 6; $regel >= 1; $regel--) {
        for ($getal = 1; $getal <= $regel; $getal++) {
            echo "$getal";
        }
        echo "</br>";
    }
    echo "<br><br>b7.9.21<br><br>";
    for ($regel = 1; $regel <= 6; $regel++) {
        for ($spatie = 6; $spatie >= $regel; $spatie--) {
            echo"&nbsp;&nbsp;";
        }
        for ($getal = $regel; $getal >= 1; $getal--) {
            echo"$getal";
        }
        echo"<br>";
    }
    echo "<br><br>b7.9.22<br><br>";
    for ($regel = 7; $regel >= 1; $regel--) {
        for ($spatieI = 6; $spatieI >= $regel; $spatieI--) {
            echo ("&nbsp;&nbsp;&nbsp;&nbsp;");
        }
        for ($getalI = 1; $getalI < $regel; $getalI++) {
            echo $getalI . "&nbsp;&nbsp;";
        }
        echo ("<br/>");
    }
    echo "<br><br>b7.9.23 <h1> moet gefixt worden, getallen horizontaal</h1><br><br>";
    for ($regel = 6; $regel >= 1; $regel--) {
        for ($spatieI = 5; $spatieI >= $regel; $spatieI--) {
            echo ("&nbsp;&nbsp;&nbsp;&nbsp;");
        }
        for ($getalI = $regel; $getalI >= 1; $getalI--) {
            echo $getalI . "&nbsp;&nbsp;";
        }
        echo ("<br/>");
    }
    echo "<br><br>b7.9.24<br><br>";
    for ($regel = 0; $regel < 10; $regel++) {
        for ($x = 0; $x < 10; $x++) {
            $val = ($x + $regel) % 10;
            echo "$val ";
        }
        echo "<br>";
    }
	?>
</body>
</html>