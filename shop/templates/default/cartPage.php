<DOCTYPE html>

<html lang="de">
<head>
	<title>
		Smileys Dönerbox - Warenkorb
	</title>
    <base href="<?=$baseUrl?>">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<link rel="stylesheet" href="<?=BOOTSTRAPDIR?>css/styles.css">

		
</head>
<body>
<!-- Einbindung der Navigationsleiste -->
<?php include __DIR__.'/navbar.php'?>
    <!-- Seitenkopf -->
<header class="container">
    <div class="jumbotron">
        <h1>Wilkommen bei Smileys Dönerbox</h1>
    </div>
</header>

<section class="container" id="cartItems">
<!-- Titel -->
    <div class="row">
        <<h2>Warenkorb</h2>
    </div>

<div class="cartItemHeader">
    <div class="col-12 text-right">
        Preis
    </div>
</div>
    
<!-- Produkte auflisten -->     
    <?php foreach ($cartItems as $cartItem):?>
        <div class="row cartItem">
            <?php include __DIR__.'/cartItem.php';?>
        </div>
    <?php endforeach; ?>

<div class="row">
    <DIV class="col-12 text-right">
        Summe (<?= $countCartItems ?> Artikel): <SPAN class="price"><?= number_format($cartSum/100,2,","," ") ?> €</span>
    </DIV>
</div>

<div class="row">
    <a href="index.php/checkout" class="btn btn-primary col-12">Zur Kasse gehen</a>
</div>

</section>
	
	
	
	<script src="<?=BOOTSTRAPDIR?>js/bootstrap.bundle.js"></script>
</body>
</html>