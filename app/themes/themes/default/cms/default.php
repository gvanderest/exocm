<!DOCTYPE html>
<html>
	<head>
		<title><?= $page->title ?> | SympoCM</title>
		<meta charset="utf-8" />
	</head>
	<body>

<h1><?= $page->title ?></h1>
<?= $page->content ?>

<hr />
<p>Rendered using SympoCM v<?= CMS_Application::VERSION ?></p>

	</body>
</htmml>
