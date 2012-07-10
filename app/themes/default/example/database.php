<?php $title = 'Exo\Database\Connection Example'; ?>
<?php include($this->theme_path . '/inc/header.php'); ?>

<h1>Exo\Database\Connection Example</h1>
<p>As a very small helper, this class extends the <a href="http://php.net/pdo" target="_blank">PDO</a> class by requiring you only provide the single identifier of a database connection -- specified in <strong>/app/config/databases.php</strong></p>
<p>Additionally, since there isn't any magic, the SQL files used to set this example up is available in <strong>/sql/example.sql</strong></p>
<pre class="code">
<?php var_dump($results); ?>
</pre>

<p>If you are interested in a little more <i>magic</i> than writing SQL yourself, <a href="http://exodus.io/orm">Existence</a></p>

<?php include($this->theme_path . '/inc/footer.php'); ?>
