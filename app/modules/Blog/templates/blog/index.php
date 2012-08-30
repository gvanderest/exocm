<?php
/**
 * Blog Index
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
?>

<h1>Blog Posts</h1>

<div class="blog-index">
	<?php if (count($posts) == 0): ?>
		<p>There are no posts to display</p>
	<?php else: ?>
		<?php foreach ($posts as $post): ?>
			<div class="blog-post">
				<h2><a href="<?= $this->url_to_self(array('post', $post->slug)) ?>"><?= $post->title ?></a></h2>
				<p><?= ellipsis(strip_tags($post->body), 300) ?>
					<?php if (strlen(strip_tags($post->body)) > 300): ?> <a href="<?= $this->url_to_self(array('post', $post->slug)) ?>">More</a><?php endif; ?>
					</p>
			</div> <!-- .blog-post -->
		<?php endforeach; ?>
	<?php endif; ?>
</div> <!-- .blog-index -->
