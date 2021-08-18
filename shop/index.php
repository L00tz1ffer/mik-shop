<?php
error_reporting(-1);
ini_set('display_errors','On');


define ("BASEURL", __DIR__);
define ("CONFIG_DIR",BASEURL."/config");
require_once CONFIG_DIR.'/includes.php';



/** PDO (Datenbankzugriff) als Instanz anlegen**/

/** SQL Abfrage festlegen**/
$sql="SELECT id, title, description, price "
   . "FROM products";


/** Abfrage durchführen **/
$result = getDB()->query($sql);

require TEMPLATE_DIR."main.php"; 