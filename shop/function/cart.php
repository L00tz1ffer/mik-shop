<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function addProductToCart(int $userID, int $productID){
    $sqL = "INSERT INTO cart "
         . "SET quantity = 1, "
             . "user_id = :userID, "
             . "product_id = :productID "
             . "ON DUPLICATE KEY UPDATE quantity = quantity + 1";
    $statement = getDB()->prepare($sqL);
    $statement->execute([
        ':userID' => $userID,
        ':productID' => $productID
    ]);
}

function countProductsInCart(int $userID){
    $sql="SELECT COUNT(id) "
       . "FROM cart "
       . "WHERE user_id = ".$userID;

    $cartResults = getDB()->query($sql);
    if ($cartResults === false){
        var_dump(printDBErrorMessage());
        return 0;
    }
    $cartitems = $cartResults->fetchColumn();
    
    return $cartitems;
}
function getCartItemsForUSerID(int $userID):array{
    $sql = "SELECT product_id, title, description, price "
         . "FROM cart "
         . "JOIN products "
         . "ON (cart.product_id = products.id) "
         . "WHERE user_id = ".$userID;
    $results = getDB()->query($sql);
    
    if($results === false){
        return [];
    }
    $found = [];
    while($row = $results->fetch()){
        $found[] = $row;
    }
    return $found;
}

function getCartSumForUserID(int $userID):int{
    $sql = "SELECT SUM(price * quantity) "
         . "FROM cart "
         . "JOIN products "
         . "ON (cart.product_id = products.id) "
         . "WHERE user_id = ".$userID;
    $result = getDB()->query($sql);
    if ($result === false){
        return 0;
    }
    return (int)$result->fetchColumn();
        
}