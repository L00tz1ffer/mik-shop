<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/** Routenplaner **/
$url = $_SERVER['REQUEST_URI'];
$indexPHPPosition = strpos($url,"index.php");


$route = null;
if (false !== $indexPHPPosition){
    $route = substr($url, $indexPHPPosition);
    $route = str_replace('index.php', '', $route);   
}


/** userID Management **/
$userID = getCurrentUserID();
setcookie('userID',$userID, strtotime('+30 days'),BASEURL);


/** Warenkorb Counter **/
$cartItems = countProductsInCart($userID);

/** Produkt Management **/
$products = getAllProduts();

if(!$route){
    $products = getAllProduts();

 
    require TEMPLATE_DIR."main.php";    
}

if (!$route){
    $products = getAllProduts();

    var_dump($userID);
    require TEMPLATE_DIR."main.php"; 
}



if (strpos($route,'/cart/add') !== false){
    $routeParts = explode('/', $route);
    $productID = (int) $routeParts[3];

    addProductToCart($userID, $productID);
    
    header("Location: ".BASEURL."index.php");
    exit();
}



if (strpos($route,'/cart') !== false){
    require TEMPLATE_DIR."cartPage.php"; 
    exit();
}


