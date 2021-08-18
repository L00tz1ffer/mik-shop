<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function getDB(){
    /** setzen der Statischen Variable $db **/
    static $db;
    
    /** Verhindern, dass $db jedes mal neu geschrieben wird **/
    if ($db instanceof PDO){
        return $db;
    }
    
    /** Einbinden der konfiguration für die Datenbank **/
    require_once CONFIG_DIR.'/database.php';
    
    /** Zusammensetzen des dsn **/
    $dsn = sprintf("%s:host=%s;dbname=%s;charset=%s",DB_TYPE,DB_HOST,DB_NAME,DB_CHARSET);
    
    /** Instanzieren von PDO in $db **/
    $db = new PDO($dsn,DB_USERNAME,DB_PASSWORD);
    return $db;
}