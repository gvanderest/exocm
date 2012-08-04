<?php include($this->theme_path . '/inc/header.php') ?>

<div id="body">
	<h1><?= $this->data['page']->title ?></h1>
	<div id="content">
		<?= $this->data['page']->content ?>
	</div> <!-- #content -->
</div> <!-- #body -->

<?php include($this->theme_path . '/inc/footer.php') ?>
