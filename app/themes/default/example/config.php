<?php $title = 'Quick Configuration'; ?>
<?php include($this->theme_path . '/inc/header.php'); ?>

<h1>Quick Configuration</h1>
<p>So now you've got this framework installed on your server, or you're just reading up on this framework, and you want to get going.</p>
<p>There's a little bit of configuration needed, but it's all fairly simple and most of it might not even require touching, but it should all be located in the <strong>/app/config</strong> folder, inside one of the PHP files.</p>
<ul>
	<li><a href="#routes">Routes</a></li>
	<li><a href="#environments">Environments</a></li>
	<li><a href="#databases">Databases</a></li>
	<li><a href="#applications">Applications</a></li>
</ul>

<h2 id="routes">Routes</h2>
<p>This is the meat and potatoes of the framework.  Although not necessarily powerful, this is what makes the framework lead to the endpoints of applications.</p>
<p>In the following example, a pattern is given and the specific method is provided to show what should be called.</p>
<pre>
Route::add('example', array(
    'pattern' => '/example',
    'class' => 'Example\Application',
    'method' => 'hello_world'
));
</pre>
<p>And similarly, if you wish to create a RESTful application, the following little change can be made.</p>
<pre>
Route::add('example', array(
    'pattern' => '/example',
    'class' => 'Example\Application',
	'restful' => TRUE
));
</pre>
<p>By specifying RESTful, the request method (ex. POST or GET) and the first URL segment will be used to determine the method called.</p>
<p>For example: POSTing to '/example/test' will try to call the Example\Application::post_test() method.</p>

<h2 id="environments">Environments</h2>
<h3>/app/config/environments.php</h3>
<pre>
Environment::add('development', array(
	'host' => $_SERVER['HTTP_HOST'],
	'debug' => E_ALL,
	'database' => 'development'
));
</pre>
<p>Modify the <strong>host</strong> entries to specify domains/hostnames or set up your own environments, but these will define the error_reporting levels and domains you use for database configurations.</p>

<h2 id="databases">Databases</h2>
<h3>/app/config/databases.php</h3>
<p><strong>Note:</strong> The framework does not rely on databases, but Applications built atop it might.</p>
<pre>
Database::add('development', array(
    'type' => 'mysql',
    'host' => 'localhost',
    'user' => 'root',
    'password' => '',
    'name' => 'exo'
));
</pre>
<p>For some this may seem self-explanatory, but here you can specify the PDO settings for a database connection, referencable by the wrapper class <strong>Exo\Database\Connection</strong>.</p>

<h2 id="applications">Applications</h2>
<h3>/app/modules/Example/Application.php</h3>
<p>Now you can start programming your application!  This framework is light and it's powerful, but its power is based upon your code!</p>
<p>Here's an example of a "Hello World" app we're all used to seeing:</p>
<pre>
namespace Example;
class Application
{
	public function get_index()
	{
		return 'Hello World';
	}
}
</pre>
<p>Yeah.. That's it!</p>
<p>You can extend off of <strong>Exo\Application</strong> if you want to, providing you easy access to the <strong>$this->request</strong> property and already provide you with a <strong>$this->view</strong> instance-- but you can do whatever you like now!</p>
<p>Want to get a little more advanced? Let's try using a little more MVC and actually pass some data to a template, set up in <strong>/app/themes/default</strong>, showing the code used in our <a href="<?= $this->url_to_self('database') ?>">database example</a>.</p>
<pre>
namespace Example;
use Exo\Database\Connection;
class Application extends \Exo\Application
{
	public function get_database()
	{
		$db = new Connection();

		$sql = 'SELECT * FROM test';
		$query = $db->prepare($sql);
		$result = $query->execute();

		$this->data['results'] = $query->fetchAll();

		return $this->view->render('example/database');
	}
}
</pre>

<?php include($this->theme_path . '/inc/footer.php'); ?>
