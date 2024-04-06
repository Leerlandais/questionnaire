<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title><?=$title?></title>
</head>
<body>
    <div class="global">
    <?php 
    if (!is_array($askPlayer)) {
    echo $askPlayer;
    }else{
    foreach ($askPlayer as $ask) { 
        ?>
    <h1>Question pour <?=$ask["play_name"]?></h1>
   <div class="questForm">
    <form action="?p=success" method="POST" id="askForm">
    <h3>Question pour <?=$ask["play_name"]?></h3>
    <input type="text" name="playerInp" id="playerInp" class="hidden" value="<?=$ask["play_id"]?>">
        <label for="questInp">Question : </label>
            <textarea name="questInp" id="questInp" cols="20" rows="5"></textarea>
        <label for="ansInp">Answer : </label>
            <textarea name="answerInp" id="answerInp" cols="20" rows="5"></textarea>
            <div class="radioArea">
           <input type="radio" name="greatInp" id="greatInp" class="radioInp">Superbe
           <input type="radio" name="goodInp" id="goodInp" class="radioInp">Bonne
           <input type="radio" name="badInp" id="badInp" class="radioInp">Mauvaise
           <input type="radio" name="absentInp" id="absentInp" class="radioInp">Absent
           </div>
           <button type="submit">Envoi</button>
    </form>
   </div>
    
    <?php
    }
}
    ?>
    </div><!-- end of global -->
    <script src="scripts/script.js"></script>
</body>
</html>