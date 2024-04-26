<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejtett</title>
</head>
<body>
    <?php
        $szamlalo = 0;
        if(isset($_GET["szamlalo"])){
            $szamlalo = $_GET["szamlalo"];
        }
        echo "<br>";
        $szamlalo++;
        echo $szamlalo;
    ?>
    <form action="" method="get">
        <input type="text" name="szamlalo" value="<?php echo $szamlalo?>">
        <input type="submit" value="Növel">
    </form>
</body>
</html>
