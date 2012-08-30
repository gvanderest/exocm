<?php
/**
 * CMS Admin Template
 * @header
 */

$title = 'Dashboard';
?>
<?php require_once($this->theme_path . '/inc/header.php'); ?>

<h1>Dashboard</h1>
<?= breadcrumb(array(
	'Home' => ''
)); ?>

<p>Welcome to the Content Management System</p>

<?php require_once($this->theme_path . '/inc/footer.php'); ?>
