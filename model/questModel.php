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

function getPlayer(PDO $db, $playId) : array | string {
    if ($playId === "rand") {
    $playId = rand(1,9);
    }
    $sql = "SELECT *
    FROM players
    WHERE play_id = $playId";
    try {

        $query = $db->query($sql);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        $query->closeCursor();
        return $result;
    }catch(Exception) {
        $result = "Sorry, couldn't pick a random player";
        return $result;
    }
}

function addNewQuestion (PDO $db, $playerInp, $questInp, $answerInp, $answerType) {
    $cleanedQuestion = htmlspecialchars(strip_tags(trim($questInp)), ENT_QUOTES);
    $cleanedAnswer = htmlspecialchars(strip_tags(trim($answerInp)), ENT_QUOTES);

    $sql = "INSERT INTO questionarchive (`quest_id`,`quest_asked`,`quest_answer`,`quest_player`,`quest_result`) VALUES (NULL, :asked, :answered, :player, :anstype)";

    $stmt = $db->prepare($sql);
    $stmt->bindParam(':asked', $cleanedQuestion);
    $stmt->bindParam(':answered', $cleanedAnswer);
    $stmt->bindParam(':player', $playerInp);
    $stmt->bindParam(':anstype', $answerType);


    switch($answerType) {
        case "1" :
    $updateField = "great_answer"; 
    $adjustTotal = "+ 2";       
            break;
        case "2" :
    $updateField = "good_answer";
    $adjustTotal = "+ 1";
            break;
        case "3" :
    $updateField = "bad_answer";
    $adjustTotal = "- 1";
            break;
        case "4" :
    $updateField = "absence";
    $adjustTotal = "- 1";
            break;                        
    }
        $sqlScore = "UPDATE scorechart 
                     SET $updateField = $updateField + 1, total_answer = total_answer + 1, total_points = total_points $adjustTotal
                     WHERE score_play_id = $playerInp";
var_dump($sqlScore);
        $stmtScore = $db->prepare($sqlScore);
                 
    try {
        $stmt->execute();
        $stmtScore->execute();
        $db->commit();
        return true;
    } catch (PDOException $e) {
        error_log("Error adding Question: " . $e->getMessage());
        return false;
}
}

function getAllQuestions (PDO $db) : array | string {
    
    $sql = "SELECT q.quest_asked AS quest, q.quest_answer AS answer, q.quest_result AS result, quest_time AS thetime, p.play_name AS nom
            FROM questionarchive q
            JOIN players p
            ON p.play_id = q.quest_player
            ORDER BY q.quest_id DESC";
    try {
        $query = $db->query($sql);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        $query->closeCursor();

        return $result;
    }catch(Exception) {
        $result = "Sorry, couldn't get the questions";
        return $result;
    }
    
    
    return $result;
}

