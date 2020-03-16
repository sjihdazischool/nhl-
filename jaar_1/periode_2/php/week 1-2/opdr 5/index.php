<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Opdracht</title>
</head>
<body>
    <?php
    $signs = array("001-scorpio.png" => "Scorpio",
        "002-aries.png" => "Aries",
        "003-capricorn.png" => "Capricorn",
        "004-leo.png" => "Leo",
        "005-libra.png" => "Libra",
        "006-gemini.png" => "Gemini",
        "007-taurus.png" => "Taurus",
        "008-sagittarius.png" => "Sagittarius",
        "009-pisces.png" => "Pisces",
        "010-virgo.png" => "Virgo",
        "011-aquarius.png" => "Aquarius",
        "012-cancer.png" => "Cancer");
    ?>

    <?php foreach ($signs as $file => $name): ?>
        <a href="zodiac/<?=$file?>"><img width=64 height=64 src="zodiac/<?=$file?>" alt="<?=$name?>"></a>
        <?=$name?><br>
    <?php endforeach; ?>
</body>
</html>
