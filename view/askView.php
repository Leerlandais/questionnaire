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
    if (!isset($askPlayer)) {
    echo "problems, problems, problems";
    }else{
    foreach ($askPlayer as $ask) { 
        ?>
    <h1>Question pour <?=$ask["play_name"]?></h1>
   <div class="questForm">
    <form action="?p=success" method="POST" id="askForm">
    <h3>Question pour <?=$ask["play_name"]?></h3>
    <input type="text" name="playerInp" id="playerInp" class="hidden" value="<?=$ask["play_id"]?>">
        <label for="questInp">Question : </label>
            <textarea name="questInp" id="questInp" cols="50" rows="5"></textarea>
        <label for="ansInp">Answer : </label>
            <textarea name="answerInp" id="answerInp" cols="50" rows="5"></textarea>
            <div class="radioArea">
            <label for="greatInp">Superbe</label><input type="radio" name="greatInp" id="greatInp" class="radioInp">
           <label for="goodInp">Bonne</label><input type="radio" name="goodInp" id="goodInp" class="radioInp">
           <label for="badInp">Mauvaise</label><input type="radio" name="badInp" id="badInp" class="radioInp">
           <label for="absentInp">Absent</label><input type="radio" name="absentInp" id="absentInp" class="radioInp">
           </div>
           <button type="submit">Envoi</button>
    </form>
    <a href="?p=home">Retour</a>
   </div>
    
    <?php
    }
}
    ?>
    </div><!-- end of global -->
    <h6 id="screenwidth" style="display: none;"></h6>
    <script src="scripts/script.js"></script>
</body>
</html>