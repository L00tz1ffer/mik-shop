<?php
error_reporting(-1);
ini_set('display_errors','On');

/** Style Elements **/
define ("BOOTSTRAP_DIR", "../bootstrap/");
define ("CUSTOM_STYLESHEETS", "assets/css/");

/**Templates**/
define ("TEMPLATE_DIR", "templates/default/");
define ("PAGE_TITLE","Smiley´s Dönerbox")

?>

<html>
    <head>
        <title>
            <?=PAGE_TITLE?>
        </title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="<?=BOOTSTRAP_DIR?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=CUSTOM_STYLESHEETS?>styles.css">
    </head>
    <body>
        <header class="p-4 shadow-4 rounded-3" style="background-color: hsl(0, 0%, 94%); font-size: 320%;">
            <div class="container">
                <?=PAGE_TITLE?>   
            </div>
        </header>
        
        <section class="container" id="products">
            <div class="row">
                <div class="col">
                    <?php include TEMPLATE_DIR."card.php"?>
                </div>
                <div class="col">
                    <?php include TEMPLATE_DIR."card.php"?>               
                </div>
                <div class="col">
                    <?php include TEMPLATE_DIR."card.php"?>   
                </div>
                <div class="col">
                    <?php include TEMPLATE_DIR."card.php"?>  
                </div>
            </div>
        </section>
    
        <script src="<?=BOOTSTRAP_DIR?>/js/bootstrap.bundle.js"    
    </body>
</html>



