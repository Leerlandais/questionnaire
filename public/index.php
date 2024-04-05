<?php

require_once "../config.php";

require_once "../control/dbConnection.php";

require_once "../model/questModel.php";

$players = getPlayerNames($db);



require_once "../control/pageRouter.php";