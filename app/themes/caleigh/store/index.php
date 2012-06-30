<?php require_once($this->theme_path . '/inc/header.php') ?>

<h1>Store Index</h1>
<h2>Categories</h2>
<ul>
	<?php foreach ($this->data['categories'] as $category): ?>
		<li><a href="/store/category/<?= $category->slug ?>"><?= $category->name ?></a></li>
	<?php endforeach; ?>
</ul>

<h2>Featured Products</h2>
<ul>
	<?php foreach ($this->data['products'] as $product): ?>
		<li><a href="/store/product/<?= $product->slug ?>"><?= $product->name ?></a></li>
	<?php endforeach; ?>
</ul>


<?php require_once($this->theme_path . '/inc/footer.php') ?>
