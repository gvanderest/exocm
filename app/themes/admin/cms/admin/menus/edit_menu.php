<?php require_once($this->theme_path . '/inc/header.php'); ?>

<h1>Edit Menu</h1>
<?= breadcrumb(array(
	'Pages' => '/admin/pages',
	'Edit Menu' => ''
)); ?>

<?= $form->display(); ?>


<?php require_once($this->theme_path . '/inc/footer.php'); ?>
