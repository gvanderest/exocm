<?php require_once($this->theme_path . '/inc/header.php'); ?>

<h1>Add Page</h1>
<?= breadcrumb(array(
	'Pages' => '/admin/pages',
	'Add Page' => ''
)); ?>

<?= $form->display(); ?>

<?php require_once($this->theme_path . '/inc/cms_page_menus.php'); ?>

<?php require_once($this->theme_path . '/inc/footer.php'); ?>
