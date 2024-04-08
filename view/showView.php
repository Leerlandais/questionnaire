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
                <th><a href="?p=show&showtype=all">Totale Questions</a></th>
                <th><a href="?p=show&showtype=great">Superbe</a></th>
                <th><a href="?p=show&showtype=good">Bonne</a></th>
                <th><a href="?p=show&showtype=bad">Mauvaise</a></th>
                <th><a href="?p=show&showtype=abs">Absence</a></th>
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
                 if(!isset($_GET["showtype"])) {
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
     if($_GET["showtype"]){
        $j = 0;
        foreach ($getAnsByType as $type) {
            
            switch ($type['quest_result']) {
                case 1 :
                    $type['quest_result'] = "Superbe Réponses";        
                            break;
                        case 2 :
                    $type['quest_result'] = "Bonne Réponses";
                            break;
                        case 3 :
                    $type['quest_result'] = "Mauvaise Réponse";
                            break;
                        case 4 :
                    $type['quest_result'] = "Absence";
                            break;  
            }
           
        ?>
        <div class="prevQuest">
            <?php  
            if ($j < 1) { $i++; var_dump($j);?>
            <h4> - <?=$type["quest_result"]?></h4>
            
                <?php  } ?>
                <p><?=$type["quest_asked"]?></p>
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