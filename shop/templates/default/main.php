<DOCTYPE html>

<html lang="de">
<head>
	<title>
		Smileys Dönerbox
	</title>
        <base href="<?=$baseUrl?>">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?=BOOTSTRAPDIR?>css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<link rel="stylesheet" href="assets/css/styles.css">

		
</head>
<body>
<?php include __DIR__.'/navbar.php'?>
<div class="container">
  <div class="jumbotron">
			<h1>Wilkommen bei Smileys Dönerbox</h1>
		</div>

	</div>
	<section class="container" id="products">
		<div class="row">
		
			<?php foreach($products as $product):?>
			<div class="col">
				<?php include 'templates/default/card.php'?>
			</div>
			<?php endforeach; ?>

		</div>
	</section>
	
	
	
	<script src="<?=BOOTSTRAPDIR?>js/bootstrap.bundle.js"></script>
</body>

</html>
