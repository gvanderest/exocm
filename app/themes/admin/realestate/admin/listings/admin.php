<?php require_once($this->theme_path . '/inc/header.php'); ?>

<h1>Listings</h1>
<?= breadcrumb(array(
	'Listings' => $this->get_module_url(array()),
	'Edit Listing' => ''
)); ?>

<ul>
	<li><a href="<?= $this->get_module_url(array('test')); ?>">test aaa ffff</a></li>
</ul>

<?php require_once($this->theme_path . '/inc/footer.php'); ?>

