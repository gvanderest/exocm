<?php
/**
 * Edit a User
 * @header
 */
?>

<?php include_once($this->theme_path . '/inc/header.php'); ?>

<h1>Edit User</h1>
<?= breadcrumb(array(
	'Users' => '../',
	'Edit User' => ''
)); ?>

<?= $form->display(); ?>

<?php include_once($this->theme_path . '/inc/footer.php'); ?>
