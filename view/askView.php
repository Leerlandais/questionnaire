<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
</head>
<body>
    <div class="global">
    <?php 
    if (!is_array($askRandom)) {
    echo $askRandom;
    }else{
    foreach ($askRandom as $ask) { 
        ?>
    <h1>Question for <?=$ask["play_name"]?></h1>
   <div class="questForm">
    <form action="?p=home" method="POST">
    <h3>Question for <?=$ask["play_name"]?></h3>
    <input type="text" name="playerInp" id="playerInp" class="hidden" value="<?=$ask["play_id"]?>">
        <label for="questInp">Question : </label>
            <textarea name="questInp" id="questInp" cols="20" rows="5"></textarea>
        <label for="ansInp">Answer : </label>
            <textarea name="answerInp" id="answerInp" cols="20" rows="5"></textarea>
           <input type="radio" name="greatInp" id="greatInp">Great
           <input type="radio" name="goodInp" id="goodInp">Good
           <input type="radio" name="badInp" id="badInp">Bad
           <input type="radio" name="absentInp" id="absentInp">Absent
           <button type="submit">Send</button>
    </form>
   </div>
    
    <?php
    }
}
    ?>
    </div><!-- end of global -->
</body>
</html>