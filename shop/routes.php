<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$userID = getCurrentUserID();
$products = getAllProduts();
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