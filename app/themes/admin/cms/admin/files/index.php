<?php require_once($this->theme_path . '/inc/header.php'); ?>

<?php
$crumbs = array(array('Files', $this->get_module_url()));

// build breadcrumbs based on folder structure
$dir = trim(@$_GET['d'], '/');
if ($dir)
{
	$parts = explode('/', trim($dir, '/'));
	if ($parts[0] != '')
	{
		for ($x = 0; $x < count($parts); $x++)
		{
			$crumbs[] = array($parts[$x], $this->get_module_url(array('d' => '/' . implode(array_slice($parts, 0, $x + 1), '/'))));
		}
	}
}
?>
<h1>Files</h1>
<?= breadcrumb($crumbs); ?>

<?php $entries = array_merge($dirs, $files); ?>
<?php if (is_dir($path)): ?>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Type</th>
				<th>Size</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php if ($dir): ?>
				<tr>
					<td colspan="4"><a href="<?= $this->get_module_url(array('d' => '/' . implode('/', array_slice($parts, 0, count($parts) - 1)))) ?>">&uarr; Parent Folder</a></td>
				</tr>
			<?php endif; ?>
			<?php foreach ($entries as $entry): ?>
				<?php if ($entry->type == 'dir'): ?>
					<tr>
						<td><a href="?d=<?= $entry->assets_path ?>"><?= $entry->name ?></a></td>
						<td>Directory</td>
						<td>-</td>
						<td><a href="<?= $this->get_module_url(array('delete', 'd' => $entry->assets_path)) ?>" onclick="return confirm('Are you sure you wish to delete this file?');">Delete</a>
					</tr>
				<?php else: ?>
					<tr>
						<td><a target="_blank" href="<?= \Exo\ASSETS_URL ?><?= $entry->assets_path ?>"><?= $entry->name ?></a></td>
						<td>File</td>
						<td><?= number_format($entry->size / 1024, 1) ?>KB</td>
						<td><a href="<?= $this->get_module_url(array('delete', 'f' => $entry->assets_path)) ?>" onclick="return confirm('Are you sure you wish to delete this file?');">Delete</a>
					</tr>
				<?php endif; ?>
			<?php endforeach; ?>
		</tbody>
	</table>
<?php endif; ?>

<h2>Upload File</h2>
<?= $file_form->display(); ?>

<h2>Create Folder</h2>
<?= $folder_form->display(); ?>

<?php require_once($this->theme_path . '/inc/footer.php'); ?>
