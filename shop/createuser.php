<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
error_reporting(-1);
ini_set ('display_errors', 'On');


define ('CONFIG_DIR',__DIR__.'/config');

require_once __DIR__.'/function/database.php';


$username = "test";
$password = password_hash("test", PASSWORD_DEFAULT);
$sql= "INSERT INTO users SET username='".$username."', password='".$password."'";

$statement = getDB()->exec($sql);
if (!$statement){
    echo getDBErrorMessage();
}