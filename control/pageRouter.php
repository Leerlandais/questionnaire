<?php

if(isset($_GET["p"])){
    switch($_GET["p"]){
        case 'home':
            $title = "Questionnaire Project";
            include("../view/mainView.php");
            break;            
                default:
                $title = "Page 404";
                include("../view/err404.php");
        }
    }else{
        $title = "Questionnaire Project";
    include("../view/mainView.php");
}
