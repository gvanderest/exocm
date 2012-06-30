<?php
/**
 * Display a list of users
 * @header
 */
?>

<?php include_once($this->theme_path . '/inc/header.php'); ?>

<h1>Users</h1>
<?= breadcrumb(array(
	'Users' => ''
)); ?>

<ul>
	<li><a href="<?= $this->get_self_url(array('users/add')) ?>">Add User</a></li>
</ul>

<?php if (count($this->data['users']) == 0): ?>
	<p>There are currently no users.</p>
<?php else: ?>
	<table>
		<thead>
			<tr>
				<th>Username</th>
				<th>Name</th>
				<th>Email</th>
				<th></th>
			</tr>
		<thead>
		<tbody>
			<?php foreach ($this->data['users'] as $user): ?>
				<tr>
					<td><?= $user->username ?></td>
					<td><?= $user->first_name . ' ' . $user->last_name ?></td>
					<td><?= $user->email ?></td>
					<td>
						<a href="<?= $this->get_self_url(array('users/edit/' . $user->id)); ?>">Edit</a> | 
						<a onclick="return confirm('Are you sure you wish to delete this user?');" href="<?= $this->get_self_url(array('users/delete/' . $user->id)); ?>">Delete</a>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
<?php endif; ?>

<?php include_once($this->theme_path . '/inc/footer.php'); ?>
