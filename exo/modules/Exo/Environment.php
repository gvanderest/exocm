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
}
