<?php require_once($this->theme_path . '/inc/header.php') ?>

<h1><?= $this->data['category']->name ?></h1>

<h2>Products</h2>
<ul>
	<?php foreach ($this->data['products'] as $product): ?>
		<li><a href="/store/product/<?= $product->slug ?>"><?= $product->name ?></a></li>
	<?php endforeach; ?>
</ul>


<?php require_once($this->theme_path . '/inc/footer.php') ?>
