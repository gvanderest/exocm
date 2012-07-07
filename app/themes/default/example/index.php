<?php $title = 'Hello World'; ?>
<?php include($this->theme_path . '/inc/header.php'); ?>

<h1>Hello World</h1>
<p>This is just an example of the outputting of a template using ExoSkeleton</p>
<ul>
	<li><a href="<?= $this->url_to_self('request/with/segments') ?>">Request Object Explanation</a></li>
	<li><a href="<?= $this->url_to_self('response') ?>">Response Object Explanation</a></li>
	<li><a href="<?= $this->url_to_self('format') ?>">Output Formats</a></li>
	<li><a href="<?= $this->url_to_self('database') ?>">Database Example</a></li>
	<li><a href="<?= $this->url_to_self('cache') ?>">Response Caching</a></li>
	<li><a href="<?= $this->url_to_self('config') ?>">Quick Configuration</a></li>
</ul>

<?php include($this->theme_path . '/inc/footer.php'); ?>
