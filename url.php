<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL</title>
</head>
<body>
    <?php
        $szamlalo = 0;
        if(isset($_GET["szamlalo"])){
            $szamlalo = $_GET["szamlalo"];
        }
        echo $szamlalo;
        echo "<br>";
        $szamlalo++;
    ?>
    <a href="url.php?szamlalo=<?php echo $szamlalo?>">Növel</a>
</body>
</html>
