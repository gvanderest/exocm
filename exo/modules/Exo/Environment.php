<?php
/**
 * ExoSkeleton Environments
 * Define error reporting and database information by environment
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */

namespace Exo;
class Environment
{
	public static $environments = array();

	/**
	 * Add an environment
	 * @param string $id unique identifier string
	 * @param array $options (optional)
	 */
	public static function add($id, $options = array())
	{
		self::$environments[$id] = (object)$options;
	}

	/**
	 * Get the environment
	 * @param string $hostname (optional) will be detected if not provided
	 */
	public static function get($hostname = NULL)
	{
		if ($hostname === NULL)
		{
			return self::get(@$_SERVER['HTTP_HOST']);
		}

		foreach (self::$environments as $env)
		{
			if (is_array($env->host) && in_array($hostname, $env->host) || $hostname == $env->host)
			{
				return $env;
			}
		}

		throw new Exception('Environment could not be found for hostname "' . $hostname . '"');
	}
}
