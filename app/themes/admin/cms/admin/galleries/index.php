<?php
/**
 * Display a list of galleries
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
?>

<?php include_once($this->theme_path . '/inc/header.php'); ?>

<h1>Galleries</h1>
<?= breadcrumb(array(
	'Galleries' => $this->get_module_url()
)); ?>

<ul>
	<li><a href="<?= $this->url_to_self(array('galleries/add/gallery')) ?>">Add Gallery</a></li>
</ul>

<?php if (count($this->data['galleries']) == 0): ?>
	<p>There are currently no galleries.</p>
<?php else: ?>
	<table>
		<thead>
			<tr>
				<th>Slug</th>
				<th>Name</th>
				<th>Images</th>
				<th></th>
			</tr>
		<thead>
		<tbody>
			<?php foreach ($this->data['galleries'] as $gallery): ?>
				<tr>
					<td><?= $gallery->slug ?></td>
					<td><?= $gallery->name ?></td>
					<td><?= $gallery->image_count ?></td>
					<td>
						<a href="<?= $this->get_module_url(array('edit/gallery/' . $gallery->id)); ?>">Edit</a> | 
						<a onclick="return confirm('Are you sure you wish to delete this gallery?');" href="<?= $this->get_module_url(array('delete/gallery/' . $gallery->id)); ?>">Delete</a>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
<?php endif; ?>

<?php include_once($this->theme_path . '/inc/footer.php'); ?>
