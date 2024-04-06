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
    <h1>List of Previous Questions</h1>
    <?php
            foreach ($showQuestions as $showQ) {
                    switch ($showQ['result']) {
                        case 1 :
                            $showQ['result'] = "great answer";        
                                    break;
                                case 2 :
                            $showQ['result'] = "good answer";
                                    break;
                                case 3 :
                            $showQ['result'] = "bad answer";
                                    break;
                                case 4 :
                            $showQ['result'] = "absence";
                                    break;  
                    }
    ?>
        <div class="prevQuest">
            <h4><?=$showQ["quest"]?></h4>
            <h5>Answered by <?=$showQ["nom"]?> on the <?=$showQ["thetime"]?> with a <?=$showQ["result"]?></h5>
            <p><?=$showQ["answer"]?></p>
        </div>
    <?php
    }
    ?>
    <a href="?p=home">Go Back Home</a>
    </div>
    <h6 id="screenwidth"></h6>
    <script src="scripts/script.js"></script>
</body>
</html>