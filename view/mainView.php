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
            <div class="header">
                <h1>Project for Weekend 05/04/2024</h1>
                <h2>Recreate Michael's Class Questionnaire</h2>
            </div>
            <table class="questionTable">
                <tr>
                    <th>No</th>
                    <th>Nom</th>
                    <th>Points</th>
                    <th>Superbe +=2</th>
                    <th>Bonne ++</th>
                    <th>Mauvaise --</th>
                    <th>Absence --</th>
                    <th>Totale</th>
                </tr>
                <?php
                if (!is_array($players)) {
                      echo $players;
                }else{
                    foreach ($players as $play) {
                ?>
                <tr>
                    <td><?=$play["id"]?></td>
                    <td><?=$play["nom"]?></td>
                    <td><?=$play["totP"]?></td>
                    <td><?=$play["grA"]?></td>
                    <td><?=$play["goA"]?></td>
                    <td><?=$play["baA"]?></td>
                    <td><?=$play["noA"]?></td>
                    <td><?=$play["totA"]?></td>
                </tr>
                <?php
            } 
        }
        
                ?>
            </ul>
            </table>
            <a href="?p=ask&player=rand" class="playerSelect playerSel">Sélection Aléatoire</a>
            <div class="playerArea">
               <?php
                if (!is_array($players)) {
                      echo $players;
                }else{
                    foreach ($players as $play) {
                        ?>
                        <a href="?p=ask&player=<?=$play["id"]?>" class="playerSelect"><?=$play["nom"]?></a>
                        <?php }} ?>
                    </div>
                    <a href="?p=show" class="playerSelect playerSel">Afficher Questions</a>
            <h6 id="screenwidth">sqdqd</h6>
        </div><!-- end of global -->
        
        <script src="scripts/script.js"></script>
    </body>
</html>