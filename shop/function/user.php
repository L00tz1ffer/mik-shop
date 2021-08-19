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