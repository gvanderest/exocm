<?php
/**
 * Edit a Form
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
?>

<?php include_once($this->theme_path . '/inc/header.php'); ?>

<h1>Add Form</h1>
<?= breadcrumb(array(
	'Forms' => $this->get_module_url(),
	'Add Form' => $this->get_module_url(array('add/form'))
)); ?>

<?= $form->display(); ?>

<?php include_once($this->theme_path . '/inc/footer.php'); ?>
