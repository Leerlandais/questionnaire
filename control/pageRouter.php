<?php

if(isset($_GET["p"])){
    switch($_GET["p"]){
        case 'home':
            $title = "Questionnaire Project";
            include("../view/mainView.php");
            break; 
        case 'ask' :
            $title = "Question Time";
            include("../view/askView.php");
            break;
        case 'success' :
            $title = "Question Added";
            include("../view/successView.php");
            break;
        case 'show' :
            $title = "Previous Question";
            include("../view/showView.php");
            break;                            
                default:
                $title = "Page 404";
                include("../view/err404.php");
        }
    }else{
        $title = "Questionnaire Project";
    include("../view/mainView.php");
}


