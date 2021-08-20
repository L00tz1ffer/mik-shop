<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!Doctype <!doctgeype html>
<html>
    <head>
        <title>
            <?=PAGE_TITLE?>
        </title>
        <base href="<?= BASEURL ?>">
        <meta charset="utf-8">
        <link rel="stylesheet" href="<?=BOOTSTRAP_DIR?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=CUSTOM_STYLESHEETS?>styles.css">
    </head>
    <body>
        <?php include TEMPLATE_DIR.'/modules/generic/navbar.php'; ?>
        <header class="<?=CLASS_JUMBOTRON?>">
            <div class="container">
                Wilkommen in unserem Online Bestellservice  
            </div>
        </header>
        
        <section class="container" id="cartItems">
            <div>
                <h2>Warenkorb</h2>
            </div>
            <div class="row cartContainer">
                <div class="col-10">
                    <div class="row cartItemHeader">
                        <div class="col-12 text-xxl-end">
                            Preis
                        </div>                
                    </div>

                    <?php foreach($cartItemListed as $cartItem):?>
                        <div class="row cartItem">

                                <?php include TEMPLATE_DIR."/modules/cart/cartItemListElement.php"?> 

                        </div>   
                    <?php endforeach; ?>
                    <div class="row">
                        <div class="col-12 text-xxl-end">
                            Summe ( <?= $cartItemQuantity ?> Artikel): <span class="price"><?= number_format($cartSum/100,2,","," ") ?> €</span> 
                        </div>   
                    </div>
                </div>    
                <div class="col-2 paymentContainer text-xxl-end">
                    <a href="index.php/checkout" class="btn btn-success col-12">Zur Kasse gehen</a>
                </div>
            </div>
        </section>
        <div>
            <?php include TEMPLATE_DIR.'/modules/generic/debugging.php'; ?>
        </div>
    
        <script src="<?=BOOTSTRAP_DIR?>/js/bootstrap.bundle.js"    
    </body>
</html>
