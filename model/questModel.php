<?php

function getPlayerNames (PDO $db) : array
{
    $sql = "SELECT *
            FROM players
            ORDER BY play_id ASC";

    $query = $db->query($sql);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    $query->closeCursor();
    return $result;
}

