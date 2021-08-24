<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        
        <a class="navbar-brand" href="#"><?=PAGE_TITLE?></a>
        
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="btn btn-light" href="index.php/cart">Warenkorb (<?= $cartItemQuantity ?>)</a>
            </li> 
            <li class="nav-item">
                <?php if(isLoggedIn()): ?>
                    <a class="btn btn-outline-danger" style="width: 100%;" href="index.php/logout">Logout</a>

                <?php endif; ?>
                <?php if(!isLoggedIn()): ?>
                    <a class="btn btn-outline-success" style="width: 100%;" href="index.php/login">Login</a>
                <?php endif; ?>
            </li>
        </ul>      
    </div>

</nav>