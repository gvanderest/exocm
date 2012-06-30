<?php require_once($this->theme_path . '/inc/header.php'); ?>

<h1>Edit Listing</h1>
<?= breadcrumb(array(
	'Listings' => $this->get_module_url(array()),
	'Edit Listing' => ''
)); ?>

<?= $form->display(); ?>

<?php require_once($this->theme_path . '/inc/footer.php'); ?>

