<?php $title = 'Blog Index'; ?>
<h1>Blog Posts</h1>
<div class="controls">
	<ul>
		<li class="add"><a href="<?= $this->url_to_self(array('blog/add')) ?>">Add Blog Post</a></li>
	</ul>
</div> <!-- .controls -->

<?php if (count($posts) > 0): ?>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Title</th>
				<th>Author</th>
				<th>Date</th>
				<th>Published</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($posts as $post): ?>
				<tr>
					<td><?= $post->id ?></td>
					<td><?= $post->title ?></td>
					<td><?= $post->author ?></td>
					<td><?= $post->date_created == '0000-00-00 00:00:00' ? '-' : date('F jS, Y g:ia', strtotime($post->date_created)) ?></td>
					<td><?= $post->active ? 'Published' : 'Draft' ?></td>
					<td><a href="<?= $this->url_to_self(array('blog', 'edit', $post->id)) ?>">Edit</a> | <a onclick="return confirm('Are you sure you wish to delete this post?')" href="<?= $this->url_to_self(array('blog', 'delete', $post->id)) ?>">Delete</a></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
<?php else: ?>
	<p>There are no posts to display</p>
<?php endif; ?>
