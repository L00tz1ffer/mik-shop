<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function  getAllProduts(){
    /** SQL Abfrage festlegen**/
    $sql="SELECT id, title, description, price "
       . "FROM products";

    /** Abfrage durchführen **/
    $result = getDB()->query($sql);
    
    if (!$result){
        return[];
    }
    
    $products = [];
    while ($row = $result->fetch()){
        $products[]=$row;
    }
    
    return $products;
}