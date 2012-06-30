<?php require_once($this->theme_path . '/inc/header.php'); ?>

<h1>Add Menu</h1>
<?= breadcrumb(array(
	'Pages' => '/admin/pages',
	'Add Menu' => ''
)); ?>

<?= $form->display(); ?>


<?php require_once($this->theme_path . '/inc/footer.php'); ?>
