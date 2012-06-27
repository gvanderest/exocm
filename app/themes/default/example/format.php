<?php
if (!function_exists('curl_get'))
{
	function curl_get($url)
	{
		$ch = curl_init($url);
		curl_setopt_array($ch, array(
			CURLOPT_RETURNTRANSFER => TRUE
		));
		$result = curl_exec($ch);
		curl_close($ch);
		return $result;
	}
}
?>
<?php $title = 'Output Formats'; ?>
<?php include($this->theme_path . '/inc/header.php'); ?>

<h1><?= $title ?></h1>
<p>Once an application has done its work, it can send its data off to a renderer to reply to the requestor.</p>
<p>These formats can be defined in the <strong>/app/conf/renderers.php</strong> file and are triggered by the "extension" on the last segment of a request.</p>

<h2>PHP Data From Application:</h2>
<pre><?php var_dump($this->data) ?></pre>
<h2>/format.json</h2>
<pre><?= htmlentities(curl_get($this->url_to_self('format.json'))) ?></pre>
<h2>/format.xml</h2>
<pre><?= htmlentities(curl_get($this->url_to_self('format.xml'))) ?></pre>

<?php include($this->theme_path . '/inc/footer.php'); ?>
