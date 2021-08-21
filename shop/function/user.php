<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function  getCurrentUserID(){
    /** Definiere Benutzerkennung und Warenkorb Counter **/
    $userID = random_int(0, time());


    /** Prüfung ob userID im Cookie vorliegt **/
    if (isset($_COOKIE['userID'])){
        $userID = (int) $_COOKIE['userID'];
    }
    /** Prüfung ob userID als Sessionvariable vorliegt **/
    if (isset($_SESSION['userID'])){
        $userID = (int) $_SESSION['userID'];
    }
    return $userID;
}

function getUserDateForUsername(string $username):array{
    $sql = "SELECT id, password "
         . "FROM user "
         . "WHERE username = :username";
    
    $statement = getDB() ->prepare($sql);
    if (false === $statement){
        return [];
    }
    $statement->execute([
        ':username' => $username
    ]);
    
    if (0 === $statement->rowCount()){
        return [];
    }
    $row = $statement->fetch();
    return $row;
}

function isLoggedIn():bool{
    return isset($_SESSION['userID']);
}