<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php
error_reporting(-1);
ini_set('display_errors','On');
session_start();

/** FOR SERVER **/
define ("BASEURI", __DIR__);

/** FOR CLIENT **/
define ("BASEURL", "/shop/");
define ("CONFIG_DIR",BASEURI."/config");


/** Datenbank einbinden **/
require_once BASEURI.'/config/database.php';
require_once BASEURI.'/function/database.php';

$username = "test";
$password = password_hash("test", PASSWORD_DEFAULT);

$sql = "INSERT INTO user SET "
     . "username='".$username."', "
     . "password='".$password."'";

var_dump($sql);
$statement = getDB()->exec($sql);
var_dump($statement);
if (!$statement){
    printDBErrorMessage();
}