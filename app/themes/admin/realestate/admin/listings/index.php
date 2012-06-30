<?php require_once($this->theme_path . '/inc/header.php'); ?>

<h1>Listings</h1>
<?= breadcrumb(array(
	'Listings' => ''
)); ?>

<ul class="controls">
	<li class="add"><a href="<?= $this->get_module_url(array('add')); ?>">Add Listing</a></li>
</ul>

<?php if (count($listings) == 0): ?>
	<p>There are currently no listings to display.</p>
<?php else: ?>
	<table>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Controls</th>
		</tr>
		<?php foreach ($listings as $listing): ?>
			<tr>
				<td><?= $listing->id ?></td>
				<td><?= $listing->name ?></td>
				<td>
					<a href="<?= $this->get_module_url(array('edit', $listing->id)); ?>">Edit</a> | 
					<a onclick="return confirm('Are you sure you wish to delete this listing?');" href="<?= $this->get_module_url(array('delete', $listing->id)); ?>">Delete</a>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
<?php endif; ?>

<?php require_once($this->theme_path . '/inc/footer.php'); ?>

