<?php
/**
 * ExoSkeleton Framework
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 * @package exo
 */
use Exo\Cache;
use Exo\Environment;
use Exo\Request;
use Exo\Response;
use Exo\Route;

if (get_magic_quotes_gpc()) {
    $process = array(&$_GET, &$_POST, &$_COOKIE, &$_REQUEST);
    while (list($key, $val) = each($process)) {
        foreach ($val as $k => $v) {
            unset($process[$key][$k]);
            if (is_array($v)) {
                $process[$key][stripslashes($k)] = $v;
                $process[] = &$process[$key][stripslashes($k)];
            } else {
                $process[$key][stripslashes($k)] = stripslashes($v);
            }
        }
    }
    unset($process);
}

define('Exo\BASE_PATH', realpath(__DIR__ . '/..'));
define('Exo\BASE_URL', (@$_SERVER['HTTPS'] ? 'https' : 'http') . '://' . @$_SERVER['HTTP_HOST'] . str_replace(realpath(@$_SERVER['DOCUMENT_ROOT']), '', Exo\BASE_PATH));
define('Exo\APP_PATH', Exo\BASE_PATH . '/app');
define('Exo\APP_URL', Exo\BASE_URL . '/app');
define('Exo\EXO_PATH', Exo\BASE_PATH . '/exo');
define('Exo\EXO_URL', Exo\BASE_URL . '/exo');
define('Exo\APP_MODULES_PATH', Exo\APP_PATH . '/modules');
define('Exo\APP_MODULES_URL', Exo\APP_URL . '/modules');
define('Exo\APP_THEMES_PATH', Exo\APP_PATH . '/themes');
define('Exo\APP_THEMES_URL', Exo\APP_URL . '/themes');
define('Exo\CACHE_PATH', Exo\APP_PATH . '/cache');
define('Exo\ASSETS_PATH', Exo\APP_PATH . '/assets');
define('Exo\ASSETS_URL', Exo\APP_URL . '/assets');


class Exo
{
	const DEFAULT_METHOD = 'index';
	const ERROR_METHOD = 'error';

	/**
	 * Load classes
	 * @param string $class
	 * @return void
	 */
	public static function autoload($class)
	{
		$filename = preg_replace('#[^a-z0-9]#i', '/', $class) . '.php';
		$dirs = array(
			Exo\APP_PATH . '/modules',
			Exo\EXO_PATH . '/modules'
		);
		foreach ($dirs as $dir)
		{
			$path = $dir . '/' . $filename;
			if (file_exists($path))
			{
				require_once($path);
			}
		}
	}

	/**
	 * Handle an exception
	 * @param object $e
	 * @return void
	 */
	public static function exception(\Exception $e)
	{
		?>
<?php if (!headers_sent()): ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Exception Encountered</title>
	</head>
	<body>
<?php endif; ?>
<style>
.exo-exception { margin: 20px; border: 1px solid #ccc; border-radius: 10px; box-shadow: 0 0 10px #ccc; padding: 10px 20px 10px 20px; }
.exo-exception * { font-family: monospace; margin: 0; font-size: 14px; line-height: 1.6; }
.exo-exception h1 { font-size: 20px; margin-bottom: 10px; }
.exo-exception table { border-collapse: collapse; margin-bottom: 10px; }
.exo-exception td, .exo-exception th { border: 1px solid #ccc; vertical-align: top; text-align: left; padding: 5px 10px 5px 10px; }
.exo-exception th { background: #eee; }
.exo-exception td { font-family: monospace; white-space: pre-wrap; }
</style>

<div class="exo-exception">
	<h1>Exception Encountered</h1>
	<table>
		<tbody>
			<tr class="heading">
				<th colspan="2">Exception Information</th>
			</tr>
			<tr>
				<th>Message</th>
				<td><?= $e->getMessage(); ?></td>
			</tr>
			<tr>
				<th>File</th>
				<td><?= $e->getFile(); ?>(<?= $e->getLine() ?>)</td>
			</tr>
			<?php if (get_class($e) == 'Exo\Exception'): ?>
				<tr>
					<th>Request</th>
					<td><?= var_dump($e->getRequest()); ?></td>
				</tr>
			<?php endif; ?>
			<tr>
				<th>Trace</th>
				<td><?php foreach ($e->getTrace() as $step): ?>
<?= @$step['file'] ?> (<?= $step['line'] ?>): <?= @$step['class'] . @$step['type'] . @$step['function'] ?>()
<?php endforeach; ?>
				</td>
			</tr>
			<tr class="heading">
				<th colspan="2">Automagic Values</th>
			</tr>
			<tr>
				<th>$_POST</th>
				<td><?= var_export($_POST); ?></td>
			</tr>
			<tr>
				<th>$_GET</th>
				<td><?= var_export($_GET); ?></td>
			</tr>
			<tr>
				<th>$_COOKIE</th>
				<td><?= var_export($_COOKIE); ?></td>
			</tr>
			<tr>
				<th>$_SESSION</th>
				<td><?= var_export($_SESSION); ?></td>
			</tr>
		</tbody>	
	</table>
</div> <!-- #exo-exception -->

	</body>
</html>
		<?php
		exit();
	}

	/**
	 * Handle the request
	 * @param void
	 * @return string appropriate output
	 */
	public static function execute()
	{
		self::register_autoloader();
		self::load_includes();
		self::register_exception_handler();

		$request = Request::get();

		$env = self::load_environment($request);

		self::load_session();
		$response = self::load_route($request);
		$response->send_http_headers();
		print($response->content);
	}

	/**
	 * Get themes path
	 * @param void
	 * @return string path
	 */
	public static function get_themes_path()
	{
		return realpath(EXO\APP_PATH . '/themes');
	}

	/**
	 * Load configuration files and helpers
	 * @param void
	 * @return void
	 */
	public static function load_includes()
	{
		$dirs = array(
			Exo\APP_PATH . '/config',
			Exo\EXO_PATH . '/config',
			Exo\APP_PATH . '/helpers',
			Exo\EXO_PATH . '/helpers',
		);

		foreach ($dirs as $dir)
		{
			if (is_dir($dir))
			{
				$results = glob($dir . '/*.php');
				if (!is_array($results)) { continue; }

				foreach ($results as $path)
				{
					include($path);
				}
			}
		}
	}

	/**
	 * Load appropriate environment
	 * @param Exo\Request $request
	 * @return void
	 */
	public static function load_environment($request)
	{
		$env = Environment::get();
		
		if ($env->debug)
		{
			ini_set('display_errors', TRUE);
			error_reporting($env->debug);
		}

		$session_length = 7200;
		if (isset($env->session_length))
		{
			$session_length = $env->session_length;
		}
		ini_set('session.gc_maxlifetime', $session_length);
		ini_set('session.gc_probability', 1);
		ini_set('session.gc_divisor', 1);

		// if the environment isn't using the correct hostname (on GET), redirect
		if (is_array($env->host))
		{
			$current_host = @$_SERVER['HTTP_HOST'];
			$default_host = @$env->host[0];
			if ($current_host != $default_host)
			{
				if ($_SERVER['REQUEST_METHOD'] == 'GET')
				{
					header(sprintf("Location: %s://%s/%s",
						$request->protocol,
						$default_host,
						$request->string
					));
					exit();
				}
			}
		}

		return $env;
	}

	/**
	 * Load the requested route
	 * @param void
	 * @return string proper output
	 */
	public static function load_route($request)
	{
		$route = Route::get($request);
		$request->route = $route;

		$request->arguments = array_slice($request->segments, count($route->segments));

		if (!$route)
		{
			throw new Exception('Route not found');
		}

		$class = $route->class;

		// if restful, use a protocol_segment0 method

		if ($route->restful || @$class::$restful)
		{
			$method = implode('_', array(
				strtolower($_SERVER['REQUEST_METHOD']),
				@$request->arguments[0] ? $request->arguments[0] : self::DEFAULT_METHOD
			));
			$request->arguments = array_slice($request->arguments, 1);
			
		} else {
			$method = @$route->method ? $route->method : self::DEFAULT_METHOD;
		}

		$object = new $class($request);
		if (!method_exists($object, $method))
		{
			if (!method_exists($object, self::ERROR_METHOD))
			{
				throw new Exception('Route method "' . $class . '->' . $method . '()" does not exist');
			}
			$method = self::ERROR_METHOD;
		}

		// check for cached version if possible
		if ($request->method == 'get' && isset($route->cache))
		{
			$cache = new Cache(\Exo\CACHE_PATH);
			$response = $cache->get($request, $route->cache);
			if ($response)
			{
				return $response;
			}
		}

		$response = $object->$method();
		if (!$response instanceof Response)
		{
			$response = new Response($response);
		}

		// save a cached version if caching is enabled
		if ($request->method == 'get' && isset($route->cache))
		{
			$cache->save($request, $response);
		}

		return $response;
	}

	/**
	 * Load the current session
	 * @param void
	 * @return void
	 */
	public static function load_session()
	{
		if (!session_id())
		{
			session_start();
		}
	}

	/**
	 * Register the ExoSkeleton auto-loader
	 * @param void
	 * @return void
	 */
	public static function register_autoloader()
	{
		spl_autoload_register('Exo::autoload', TRUE, TRUE);
	}

	/**
	 * Register exception handler
	 * @param void
	 * @return void
	 */
	public static function register_exception_handler()
	{
		set_exception_handler('Exo::exception');
	}
}
