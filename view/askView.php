<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
</head>
<body>
    <?php 
    if (!is_array($askRandom)) {
    echo $askRandom;
    }else{
    foreach ($askRandom as $ask) { 
        ?>
    <h1>Question for <?=$ask["play_name"]?></h1>
    <?php
    }
}
    ?>
</body>
</html>