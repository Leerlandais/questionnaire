<?php

require_once "../config.php";

require_once "../control/dbConnection.php";

require_once "../model/questModel.php";

$players = getAllPlayerInfo($db);
$askRandom = getRandomPlayer($db);

if (isset($_POST["questInp"])) {
    
    $playerInp = $_POST["playerInp"];
    if (isset($_POST['greatInp'])) {
        $answerType = 1;
        $answerInp = $_POST["answerInp"];
        $questInp = $_POST["questInp"];
    }else if (isset($_POST['goodInp'])) {
        $answerType = 2;
        $answerInp = $_POST["answerInp"];
        $questInp = $_POST["questInp"];
    }else if (isset($_POST['badInp'])) {
        $answerType = 3;
        $answerInp = $_POST["answerInp"];
        $questInp = $_POST["questInp"];
    }else if (isset($_POST['absentInp'])) {
        $answerType = 4;
        $answerInp = "";
        $questInp = "";
    } 
    
    $addQuestion = addNewQuestion ($db, $playerInp, $questInp, $answerInp, $answerType);
}





require_once "../control/pageRouter.php";