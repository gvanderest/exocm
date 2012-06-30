<?php require_once($this->theme_path . '/inc/header.php'); ?>

<h1>Add Gallery</h1>
<?= breadcrumb(array(
	'Galleries' => $this->get_module_url(),
	'Add Gallery' => $this->get_module_url(array('add/gallery'))
)); ?>

<?= $form->display(); ?>

<?php require_once($this->theme_path . '/inc/footer.php'); ?>
