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
            <ul>
            <?php foreach ($players as $play) {
                ?>
                <li><?=$play["play_name"]?></li>
                <?php
            }
                ?>
            </ul>

            <h6 id="screenwidth"></h6>
        </div><!-- end of global -->
        
        <script src="scripts/script.js"></script>
    </body>
</html>