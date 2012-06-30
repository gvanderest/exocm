<?php
/**
 * Display a list of contact forms
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
?>

<?php include_once($this->theme_path . '/inc/header.php'); ?>

<h1>Forms</h1>
<?= breadcrumb(array(
	'Forms' => $this->get_module_url()
)); ?>

<ul>
	<li><a href="<?= $this->get_self_url(array('forms/add/form')) ?>">Add Form</a></li>
</ul>

<?php if (count($this->data['contact_forms']) == 0): ?>
	<p>There are currently no contact forms.</p>
<?php else: ?>
	<table>
		<thead>
			<tr>
				<th>Slug</th>
				<th>Name</th>
				<th>Emails</th>
				<th></th>
			</tr>
		<thead>
		<tbody>
			<?php foreach ($this->data['contact_forms'] as $contact_form): ?>
				<tr>
					<td><?= $contact_form->slug ?></td>
					<td><?= $contact_form->name ?></td>
					<td><?= $contact_form->emails ?></td>
					<td>
						<a href="<?= $this->get_module_url(array('edit/form/' . $contact_form->id)); ?>">Edit</a> | 
						<a onclick="return confirm('Are you sure you wish to delete this form?');" href="<?= $this->get_module_url(array('delete/form/' . $contact_form->id)); ?>">Delete</a>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
<?php endif; ?>

<?php include_once($this->theme_path . '/inc/footer.php'); ?>
