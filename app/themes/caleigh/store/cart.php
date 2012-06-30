<?php require_once($this->theme_path . '/inc/header.php') ?>

<h1>Your Cart</h1>

<table>
	<thead>
		<tr>
			<th>Image</th>
			<th>Product</th>
			<th>Unit Price</th>
			<th>Quantity</th>
			<th>Price</th>
		</tr>
	<thead>
	<tbody>
		<?php foreach ($products as $product): ?>
			<tr>
				<td><?= $this->display_product_image($product); ?></td>
				<td>
					<div class="name"><?= $product->name ?></div>
					<div class="combination"><?= $product->description ?></div>
					<div class="sku">SKU: <?= $product->sku ?></div>
				</td>
				<td><?= $this->display_price($product->combo_price) ?></td>
				<td><?= $product->quantity ?></td>
				<td><?= $this->display_price($product->total_price) ?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<?php require_once($this->theme_path . '/inc/footer.php') ?>
