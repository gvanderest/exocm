<?php require_once($this->theme_path . '/inc/header.php'); ?>

<h1>Edit Gallery</h1>
<?= breadcrumb(array(
	'Galleries' => $this->get_module_url(),
	'Edit Gallery' => $this->get_module_url(array('edit/gallery/' . $gallery->id))
)); ?>

<?= $gallery_form->display(); ?>

<h2>Upload Image</h2>
<?= $image_form->display(); ?>

<?php require_once($this->theme_path . '/inc/footer.php'); ?>
