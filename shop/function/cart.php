<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function addProductToCart(int $userID, int $productID){
    $sqL = "INSERT INTO cart "
         . "SET user_id = :userID, "
             . "product_id = :productID";
    $statement = getDB()->prepare($sqL);
    $statement->execute([
        ':userID' => $userID,
        ':productID' => $productID
    ]);
}