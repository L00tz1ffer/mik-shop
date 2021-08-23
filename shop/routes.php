<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/** Routenplaner **/
$url = $_SERVER['REQUEST_URI'];
$indexPHPPosition = strpos($url,"index.php");

/** userID Management **/
$userID = getCurrentUserID();
setcookie('userID',$userID, strtotime('+30 days'),BASEURL);

/** Warenkorb Counter **/
$cartItemQuantity = countProductsInCart($userID);

/** Produkt Management **/
$products = getAllProduts();

$route = null;
if (false !== $indexPHPPosition){
    $route = substr($url, $indexPHPPosition);
    $route = str_replace('index.php', '', $route);   
}

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
    $cartItemListed = getCartItemsForUSerID($userID);
    $cartSum = getCartSumForUserID($userID);
    require TEMPLATE_DIR."cartPage.php"; 
    exit();
}

if(strpos($route,'/login') !== false){
    $isPost = strtoupper($_SERVER['REQUEST_METHOD']) === 'POST';

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, 'password');
    $errors = [];
    $hasErrors = false;
    
    if($isPost){
        if (false === (bool)$username || "" === $username ){
            $errors[] = "Benutzername ist leer";
        }
        if (false === (bool)$password || "" === $password ){
            $errors[] = "Passwort ist leer";
        }
        

        $userData = getUserDateForUsername($username);
        if ((bool)$username && 0 === count($userData)){
            $errors[] = "Eingabe Fehlerhaft";
        }
        if ((bool)$password && isset ($userData['password'])&& false === password_verify($password, $userData['password'])){
            $errors[] = "Eingabe Fehlerhaft";
        }
            
        if(0 === count($errors)){
            $_SESSION['userID'] = (int) $userData['id'];
            
            moveCartProductsToAnotherUser($_COOKIE['userID'], (int) $userData['id']);
            
            setcookie('userID', (int)$userData['id']);
            
            $redirectTarget = BASEURL.'index.php';
            if (isset($_SESSION['redirectTarget'])){
                $redirectTarget = $_SESSION['redirectTarget'];
            }
            
            header("Location: ".$redirectTarget);
            exit();
        }
        
    }
    
    $hasErrors = count($errors) > 0;
    require TEMPLATE_DIR."login.php"; 
    exit();
}

if(strpos($route,'/checkout') !== false){
    
    if(!isLoggedIn()){
            $_SESSION['redirectTarget'] = BASEURL."index.php/checkout";
            header("Location: ".BASEURL."index.php/login");
            exit();
    }
    
    exit();
}



