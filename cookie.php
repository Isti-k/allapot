<?php
    if(!isset($_COOKIE["latogatas"])){
        $_COOKIE["latogatas"] = 1;
        $szamlalo=1;
    }
    else if(isset($_COOKIE["felhasznalo"])){
        $szamlalo = $_COOKIE["latogatas"]+1;
    }
    else{
        $szamlalo = $_COOKIE["latogatas"];
    }
    setcookie("felhasznalo", "Szandi", time()+5);
    setcookie("latogatas", $szamlalo, time()+50);
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_COOKIE["felhasznalo"]) && isset($_COOKIE["latogatas"])){
            echo "Üdvözlünk ".$_COOKIE["felhasznalo"]."!";
            echo "<br>Ez a ".$_COOKIE["latogatas"].". látogatásod.";
        }else{
            echo "Üdvözlünk vendég!";
        }
    ?>
</body>
</html>