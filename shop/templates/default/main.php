<?php require_once TEMPLATE_DIR_INTERNAL.'modules/generic/header.php';?>

        <section class="container" id="products">
            <div class="row">
                <?php foreach ($products as $product):?>
                    <div class="col">
                        <?php include TEMPLATE_DIR_INTERNAL."/modules/shopping/card.php"?>  
                    </div>
                <?php endforeach; ?>            
            </div>
        </section>
        
<?php require_once TEMPLATE_DIR_INTERNAL.'modules/generic/footer.php';?>