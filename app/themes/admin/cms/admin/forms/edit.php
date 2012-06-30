<?php
/**
 * Edit a Form
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
?>

<?php include_once($this->theme_path . '/inc/header.php'); ?>

<h1>Edit Form</h1>
<?= breadcrumb(array(
	'Forms' => $this->get_module_url(),
	'Edit Form' => $this->get_module_url(array('add/form/' . $contact_form->id))
)); ?>

<?= $form->display(); ?>
<h2>Fields</h2>
<ul>
	<li><a href="<?= $this->get_module_url(array('add/field/' . $contact_form->id)); ?>">Add Field</a></li>
</ul>
<?php if (count($fields) > 0): ?>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Type</th>
				<th>Rank</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($fields as $field): ?>
				<tr>
					<td><?= $field->name ?></td>
					<td><?= $field->type ?></td>
					<td><?= $field->rank ?></td>
					<td>
						<a href="<?= $this->get_module_url(array('edit/field/'. $field->id)) ?>">Edit</a> | 
						<a href="<?= $this->get_module_url(array('delete/field/'. $field->id)) ?>" onclick="return confirm('Are you sure you wish to delete this field?')">Delete</a>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
<?php else: ?>
	<p>There are currently no fields in this form.</p>
<?php endif; ?>

<?php include_once($this->theme_path . '/inc/footer.php'); ?>
