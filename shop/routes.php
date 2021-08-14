<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$url = $_SERVER['REQUEST_URI'];
$indexPHPPosition = strpos($url,'index.php');
$baseUrl = substr($url, 0, $indexPHPPosition);



$route = null;
if (false !== $indexPHPPosition){
    $route = substr($url,$indexPHPPosition);
    $route = str_replace('index.php', '',$route);
}

$userID = getCurrentUserID();
$countCartItems = countProductsInCart($userID);

if (!$route){
        $products = getALLProducts();

        require __DIR__.'/templates/default/main.php';
        var_dump($userID);
        exit();
}

if(strpos($route, '/cart/add/') !== false){
	$routeParts = explode('/',$route);
	$productID = (int)$routeParts[3];

        addProductToCart($userID, $productID);
	header("Location: ".$baseUrl."index.php");
        var_dump($userID);
	exit();
}

if(strpos($route, '/cart') !== false){
    
    $cartItems = getCartItemsForUserID($userID);
    $cartSum = getCartSumForUserID($userID);
    require __DIR__.'/templates/default/cartPage.php';
    var_dump($cartSum);
    var_dump($userID);
    exit();
}
