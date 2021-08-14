<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    function addProductToCart(int $userID, int $productID){
        $sql = 'INSERT INTO cart SET user_id = :userID,product_id = :productID';
	$statement = getDB()->prepare($sql);

	$statement->execute([
		':userID' => $userID,
		':productID' => $productID
	]);
    }

    function countProductsInCart(int $userID){
        $sql = "SELECT COUNT(id) FROM cart WHERE user_id =".$userID;
        $cartResults = getDB()->query($sql);
        
        $cartItems = $cartResults->fetchColumn();
        return $cartItems;
    }
    
    function getCartItemsForUserID(int $userID):array{
        $sql = "SELECT product_id,title,description, price 
                FROM cart 
                JOIN products 
                ON cart.product_id = products.id 
                WHERE user_id = ".$userID;
        
        $results = getDB()->query($sql);
        if ($results === false){
            return[];
        } 
        $found = [];
        while ($row = $results->fetch()){
            $found[] = $row;
        }
        return $found;
    }
    function getCartSumForUserID(int $userID): int{
        $sql = "SELECT SUM(price)
                FROM cart 
                JOIN products ON cart.product_id = products.id 
                WHERE user_id = ".$userID;
        
        $result = getDB()->query($sql);
        if ($result === false){
            return 0;
        }
        return (int)$result->fetchColumn();
    }