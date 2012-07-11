<?php $title = 'Response Caching'; ?>
<?php include($this->theme_path . '/inc/header.php'); ?>

<h1><?= $title ?></h1>
<p>Requests' responses can be cached for a certain amount of time, specified by a route option in <strong>/app/config/routes.php</strong>.</p>
<p>This endpoint has an artificial delay of one second added on the actual request, but all cached requests just circumvent it.</p>
<p><strong>This response was rendered at <?= date('g:i:sa') ?> and took <?= number_format(microtime(TRUE) - $this->application->request->start_time, 4) ?> seconds to complete the first time, but is cached for <?= $this->application->request->route->cache ?> seconds.</strong></p>
<p><a href="<?= $this->url_to_self(array('cache')) ?>">Click Here to Refresh</a></p>

<?php include($this->theme_path . '/inc/footer.php'); ?>
