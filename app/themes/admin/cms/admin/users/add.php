<?php
/**
 * Edit a User
 * @header
 */
?>

<?php include_once($this->theme_path . '/inc/header.php'); ?>

<h1>Add User</h1>
<?= breadcrumb(array(
	'Users' => $this->get_module_url(),
	'Add User' => $this->get_module_url(array('add'))
)); ?>

<?= $form->display(); ?>

<?php include_once($this->theme_path . '/inc/footer.php'); ?>
