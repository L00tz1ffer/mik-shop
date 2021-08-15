<div class="card">
	<div class="card-title">
		<?= $product['title']?> 
	</div>
	<img src="http://placekitten.com/200/170" class="card-img-top" alt="Produkt">
	<div class="card-body">
		<?= $product['description'] ?>
		<hr>

                <?= number_format($product['price']/100,2,","," ") ?> €
	</div>
	<div class="card-footer">
		<a href="" class="btn btn-primary btn-sm">success</a>
		<a href="index.php/cart/add/<?= $product['id']?>" class="btn btn-success btn-sm">In den WArenkorb</a>
	</div>
</div>
