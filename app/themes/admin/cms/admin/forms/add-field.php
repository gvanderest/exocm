<?php
/**
 * Add a form field
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
?>

<?php include_once($this->theme_path . '/inc/header.php'); ?>

<h1>Add Form Field</h1>
<?= breadcrumb(array(
	'Forms' => $this->get_module_url(),
	'Edit Form' => $this->get_module_url(array('edit/form/' . $contact_form->id)),
	'Add Field' => ''
)); ?>

<?= $form->display(); ?>

<?php include_once($this->theme_path . '/inc/footer.php'); ?>
