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
