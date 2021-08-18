<?php
error_reporting(-1);
ini_set('display_errors','On');

/** Style Elements **/
define ("BOOTSTRAP_DIR", "../bootstrap/");
define ("CUSTOM_STYLESHEETS", "assets/css/");

/**Templates**/
define ("TEMPLATE_DIR", "templates/default/");
define ("CLASS_JUMBOTRON", 'p-4 shadow-4 rounded-3" '
        . '                 style="background-color: hsl(0, 0%, 94%); '
        . '                        font-size: 320%; '
        . '                        margin: 2px; '
        . '                        margin-bottom: 25px;');

/**Server Vars**/
define ("PAGE_TITLE","Smiley´s Dönerbox");




/** DB-Configuration **/
$dbType="mysql";
$dbHost="mariadb";
$dbName="shop";
$dbCharset="utf8";
        
$dbUsername="shop";
$dbPassword="shop";



/** PDO (Datenbankzugriff) als Instanz anlegen**/
$dsn="".$dbType.":host=".$dbHost.";dbname=".$dbName.";charset=".$dbCharset."";
$db = new PDO($dsn,$dbUsername,$dbPassword);

/** SQL Abfrage festlegen**/
$sql="SELECT id, title, description, price "
   . "FROM products";


/** Abfrage durchführen **/
$result = $db->query($sql);






?>


<!Doctype <!doctype html>
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
        <header class="<?=CLASS_JUMBOTRON?>">
            <div class="container">
                <?=PAGE_TITLE?>   
            </div>
        </header>
        
        <section class="container" id="products">
            <div class="row">
                <?php while ($row = $result->fetch()):?>
                    <div class="col">
                        <?php include TEMPLATE_DIR."card.php"?>  
                    </div>
                <?php endwhile; ?>            </div>
        </section>
    
        <script src="<?=BOOTSTRAP_DIR?>/js/bootstrap.bundle.js"    
    </body>
</html>



