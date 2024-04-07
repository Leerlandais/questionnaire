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
        <table class="statTable">
            <tr>
                <th>Totale Questions</th>
                <th>Superbe</th>
                <th>Bonne</th>
                <th>Mauvaise</th>
                <th>Absence</th>
            </tr>
            <tr>
                <?php 
                $i = 0;
                    foreach($getTotals as $tots) {
                        if ($i < 1) {
                ?>
                <td><?=$tots["total_question"]?></td>
                <td><?=$tots["total_great"]?></td>
                <td><?=$tots["total_good"]?></td>
                <td><?=$tots["total_bad"]?></td>
                <td><?=$tots["total_absent"]?></td>
                <?php
                }
                $i++;
                }
                ?>
            </tr>
        </table>
        <div class="globalShow">
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
                    if($showQ["quest"] !== "") {
    ?>
        <div class="prevQuest">
            <h4 id="hideMyInfo">- <?=$showQ["quest"]?></h4>
            <div class="hiddenInfo ansInfo">
            <p style="font-style: italic; font-size: small;">Répondu par <?=$showQ["nom"]?> le <?=$showQ["thetime"]?> avec une <?=$showQ["result"]?></p>
            <p><?=$showQ["answer"]?></p>
            </div>
        </div>
    <?php
    }
    }
    ?>
    </div>
    </div>
    <h6 id="screenwidth"></h6>
    <script src="scripts/script.js"></script>
</body>
</html>