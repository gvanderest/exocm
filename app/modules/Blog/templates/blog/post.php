<?php
$title = $post->title;
/**
 * Blog Post
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
?>

<div class="blog-post">
	<h1><?= $post->title ?></h1>
	<p class="by-line">Posted by <?= $post->author ?> on <?= date('F jS, Y', strtotime($post->date_created)) ?></p> <!-- .by-line -->
	<?= $post->body ?>
</div> <!-- .blog-post -->
