<?php
error_reporting(-1);
ini_set('display_errors','On');
session_start();

/** FOR SERVER **/
define ("BASEURI", __DIR__);

/** FOR CLIENT **/
define ("BASEURL", "/shop");
define ("CONFIG_DIR",BASEURI."/config");
require_once CONFIG_DIR.'/includes.php';




/** PDO (Datenbankzugriff) als Instanz anlegen**/

/** SQL Abfrage festlegen**/
$sql="SELECT id, title, description, price "
   . "FROM products";


/** Abfrage durchführen **/
$result = getDB()->query($sql);

/** Definiere Benutzerkennung und Warenkorb Counter **/
$userID = random_int(0, time());
$cartitems = 0;

/** Prüfung ob userID im Cookie vorliegt **/
if (isset($_COOKIE['userID'])){
    $userID = (int) $_COOKIE['userID'];
}
/** Prüfung ob userID als Sessionvariable vorliegt **/
if (isset($_SESSION['userID'])){
    $userID = (int) $_SESSION['userID'];
}
setcookie('userID',$userID, strtotime('+30 days'),'/');

$url = $_SERVER['REQUEST_URI'];
$indexPHPPosition = strpos($url,"index.php");
$route = substr($url, $indexPHPPosition);
$route = str_replace('index.php', '', $route);  

if (strpos($route,'/cart/add') !== false){
    $routeParts = explode('/', $route);
    $productID = (int) $routeParts[3];

    addProductToCart($userID, $productID);
    
    header("Location: ".BASEURL."/index.php");
    exit();
}

$cartitems = countProductsInCart($userID);

var_dump($userID);
require TEMPLATE_DIR."main.php"; 
