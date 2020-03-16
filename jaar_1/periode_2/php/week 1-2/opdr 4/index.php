<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Opdracht</title>
</head>
<body>

<form action="" method="post">
    <p><b>Add 12 zodiac signs in random order</b></p>
    <textarea rows=5 cols=50 name="signs">Cancer,Scorpio,Sagittarius,Capricorn,Libra,Virgo,Leo,Aquarius,Pisces,Aries,Taurus,Gemini
    </textarea>
    <br>
    <input type="submit" name="submit"/>
</form>

<?php

if(isset($_POST["submit"])){
    $signs = explode(",",$_POST["signs"]);
    sort($signs);

    echo "<p>You entered</p>";
    foreach ($signs as $sign){
        echo $sign."<br>";
    }
}
?>

</body>
</html>
