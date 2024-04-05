<?php

require_once "../config.php";

require_once "../control/dbConnection.php";

require_once "../model/questModel.php";

$players = getAllPlayerInfo($db);
$askRandom = getRandomPlayer($db);



require_once "../control/pageRouter.php";