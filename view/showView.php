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
        <h1>Liste des questions précédentes</h1>
        <a href="?p=home">Retour</a>
    <?php
            foreach ($showQuestions as $showQ) {
                    switch ($showQ['result']) {
                        case 1 :
                            $showQ['result'] = "superbe réponse";        
                                    break;
                                case 2 :
                            $showQ['result'] = "bonne réponse";
                                    break;
                                case 3 :
                            $showQ['result'] = "mauvaise réponse";
                                    break;
                                case 4 :
                            $showQ['result'] = "manque de sa présence";
                                    break;  
                    }
    ?>
        <div class="prevQuest">
            <h4><?=$showQ["quest"]?></h4>
            <h5>Répondu par <?=$showQ["nom"]?> le <?=$showQ["thetime"]?> avec une <?=$showQ["result"]?></h5>
            <p><?=$showQ["answer"]?></p>
        </div>
    <?php
    }
    ?>
    </div>
    <h6 id="screenwidth"></h6>
    <script src="scripts/script.js"></script>
</body>
</html>