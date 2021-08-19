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



$userID = getCurrentUserID();
$products = getAllProduts();
setcookie('userID',$userID, strtotime('+30 days'),'/');
$cartitems = countProductsInCart($userID);

var_dump($userID);
require TEMPLATE_DIR."main.php"; 
