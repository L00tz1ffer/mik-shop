<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/** Jumbotron Ersatz **/
require_once CONFIG_DIR.'/styles.php';

/** Umgebungsvariablen Definieren**/
require_once CONFIG_DIR.'/env_vars.php';

/** Datenbank einbinden **/
require_once BASEURL.'/function/database.php';


/** Style Elements **/
define ("BOOTSTRAP_DIR", "../bootstrap/");
define ("CUSTOM_STYLESHEETS", "assets/css/");

/**Templates**/
define ("TEMPLATE_DIR", BASEURL."/templates/default/");