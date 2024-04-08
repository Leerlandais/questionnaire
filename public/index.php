<?php

require_once "../config.php";

require_once "../control/dbConnection.php";

require_once "../model/questModel.php";

$players = getAllPlayerInfo($db);
$getPlayerNames = getPlayer($db);
$showQuestions = getAllQuestions($db);
$getTotals = getQuestionTotals($db);

if (isset($_GET["player"])) {
    $askPlayer = getPlayer($db, '='.$_GET["player"]);
}

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
        $questInp = "absent";
    } 
    
    $addQuestion = addNewQuestion ($db, $playerInp, $questInp, $answerInp, $answerType);
}else if (isset($_POST['absentInp'])) {
    $answerType = 4;
    $answerInp = "";
    $questInp = "";
    $addQuestion = addNewQuestion ($db, $playerInp, $questInp, $answerInp, $answerType);
} 

if (isset($_GET["showtype"])) {
    switch($_GET["showtype"]) {
        case "all" :
            $ansType = "9";
            break;
            case "great" :
                $ansType = "1";
                break;
                case "good" :
                    $ansType = "2";
                    break;
                    case "bad" :
                        $ansType = "3";
                        break;
                        case "abs" :
                            $ansType = "4";
                            break;                                                
                        }
                        

    $getAnsByType = getAnswerType($db, $ansType);
}






require_once "../control/pageRouter.php";