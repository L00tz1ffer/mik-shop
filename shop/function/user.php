<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function getCurrentUserID(){
 //   $userID = random_int(0,time()); 
      $userID = 1;
    if(isset($_COOKIE['userID'])){
            $userID = (int) $_COOKIE['userID'];
    }

    if(isset($_SESSION['userID'])){
            $userId = (int) $_SESSION['userID'];
    }
    return $userID;
}
function getUserDataForUserName(string $username):array{
    $sql="SELECT id, password
          FROM users
          WHERE username=:username";
    
    $statement= getDB()->prepare($sql);
    if (false === $statement){
        return [];
    }
    $statement->execute([
            ':username'=>$username
    ]);
    if(0 === $statement->rowCount()){
        return [];
    }
    $row = $statement->fetch();
    return $row;
    
}

function isLoggedIn():bool{
    return isset($_SESSION['userID']);
}