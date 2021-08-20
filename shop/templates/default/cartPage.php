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
        <?php include TEMPLATE_DIR.'/navbar.php'; ?>
        <header class="<?=CLASS_JUMBOTRON?>">
            <div class="container">
                Wilkommen in unserem Online Bestellservice  
            </div>
        </header>
        
        <section class="container" id="products">
            
            

            
            
        </section>
        <div>
            <?php include TEMPLATE_DIR.'/debugging.php'; ?>
        </div>
    
        <script src="<?=BOOTSTRAP_DIR?>/js/bootstrap.bundle.js"    
    </body>
</html>