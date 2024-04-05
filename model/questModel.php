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


function getAllPlayerInfo (PDO $db) : array | string {
    $sql = "SELECT p.play_name AS nom, p.play_id AS id, COALESCE(s.total_points, '/') AS totP, COALESCE(s.great_answer, '/') AS grA, COALESCE(s.good_answer, '/') AS goA, COALESCE(s.bad_answer, '/') AS baA, COALESCE(s.absence, '/') AS noA, COALESCE(s.total_answer, '/') AS totA
    FROM players p
    LEFT JOIN scorechart s
    ON p.play_id = s.score_play_id
    ORDER BY id ASC";
    try {

        $query = $db->query($sql);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        $query->closeCursor();
        return $result;
    }catch(Exception) {
        $result = "Sorry, couldn't get all player info";
        return $result;
    }
    
}

function getRandomPlayer(PDO $db) : array | string {
    $sql = "SELECT *
    FROM players
    ORDER BY play_id ASC";
    try {

        $query = $db->query($sql);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        $query->closeCursor();
// SELECT RANDOM NAME AND SEND ONLY THAT

        return $result;
    }catch(Exception) {
        $result = "Sorry, couldn't pick a random player";
        return $result;
    }
}

