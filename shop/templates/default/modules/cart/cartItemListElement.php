<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<div class="col-3">
    <img class="productPicture" src="http://placekitten.com/286/180" alt="Produktbild"/>
</div>
<div class="col-7">
    <div><?= $cartItem['title']?> </div>
    <div><?= $cartItem['description']?> </div>
</div>
<div class="col-2 text-xxl-end">
    x * <span class="price"><?= number_format($cartItem['price']/100,2,","," ")?> €</span> 
</div>