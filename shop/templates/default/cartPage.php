<?php require_once TEMPLATE_DIR_INTERNAL.'modules/generic/header.php';?>

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

                                <?php include TEMPLATE_DIR_INTERNAL."/modules/cart/cartItemListElement.php"?> 

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
<?php require_once TEMPLATE_DIR_INTERNAL.'modules/generic/footer.php';?>