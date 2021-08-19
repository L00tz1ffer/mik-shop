<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/** Style Elements **/
define ("BOOTSTRAP_DIR", "../bootstrap/");
define ("CUSTOM_STYLESHEETS","/shop/assets/css/");

/** Jumbotron Ersatz **/
require_once CONFIG_DIR.'/styles.php';

/** Umgebungsvariablen Definieren**/
require_once CONFIG_DIR.'/env_vars.php';

/** Datenbank einbinden **/
require_once BASEURI.'/function/database.php';


/** Einkaufswagen **/
require_once BASEURI.'/function/cart.php';

/** UserFunktionen**/
require_once BASEURI.'/function/user.php';

/** Produktbezogene Funktionen **/
require_once BASEURI.'/function/product.php';



