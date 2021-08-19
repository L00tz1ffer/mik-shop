<?php
error_reporting(-1);
ini_set('display_errors','On');
session_start();

define ("BASEURL", __DIR__);
define ("CONFIG_DIR",BASEURL."/config");
require_once CONFIG_DIR.'/includes.php';



/** PDO (Datenbankzugriff) als Instanz anlegen**/

/** SQL Abfrage festlegen**/
$sql="SELECT id, title, description, price "
   . "FROM products";


/** Abfrage durchführen **/
$result = getDB()->query($sql);

/** Definiere Benutzerkennung und Warenkorb Counter **/
$userID = 1337;
$cartitems = 0;

/** Prüfung ob userID im Cookie vorliegt **/
if (isset($_COOKIE['userID'])){
    $userID = (int) $_COOKIE['userID'];
}
/** Prüfung ob userID als Sessionvariable vorliegt **/
if (isset($_SESSION['userID'])){
    $userID = (int) $_SESSION['userID'];
}

$sql="SELECT COUNT(id) "
   . "FROM cart "
   . "WHERE user_id = ".$userID;
$cartResults = getDB()->query($sql);

$cartitems = $cartResults->fetchColumn();


require TEMPLATE_DIR."main.php"; 