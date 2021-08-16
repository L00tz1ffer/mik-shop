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

if(strpos($route,'/login') !== false ){
    
    $isPost = strtoupper($_SERVER['REQUEST_METHOD']) === 'POST';
    $username = "";
    $password = "";
    $errors=[];
    $hasErrors=false;
    
    if($isPost){
        
        $username = filter_input(INPUT_POST,'username',FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST,'password');
        
  
        
        if (false === (bool)$username){
            $errors[]="Benutzername ist Leer!";
        }
        if (false === (bool)$password){
            $errors[]="Passwort ist Leer!";         
        }
        $userData= getUserDataForUserName($username);
        if((bool)$username && 0 === count($userData)){
            $errors[]="Benutzername existiert nicht!";
        }
         
        if ((bool)$password 
           && $userData['password'] &&
           false === password_verify($password, $userData['password'])     
           ){
            $errors[] = "Das Passwort stimmt nicht!";
        }
        if (0 === count($errors)){
            $_SESSION['userID'] = (int)$userData['id'];
        }
    }
    
    
    $hasErrors = count($errors) > 0;
    
    require __DIR__.'/templates/default/login.php';
    exit();
}
if(strpos($route,'/checkout') !== false ){
    if(!isLoggedIn()){
        header("Location: ".$baseUrl."index.php/login");
        var_dump($userID);
	exit();
    }
    
    
    exit();
}
