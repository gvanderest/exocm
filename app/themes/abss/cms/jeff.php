<html>
	<head>
		<title><?= $page->title ?> | Site Name</title>
	</head>
	<body>

<div id="menu">
	<?= $this->display_menu('main') ?></div>
<div id="content">
	<?= $page->content ?>
</div>

	</body>
</html>
