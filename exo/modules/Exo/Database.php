<?php
/**
 * ExoSkeleton Databases
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */

namespace Exo;
class Database
{
	public static $databases = array();

	/**
	 * Add a database entry
	 * @param string $id
	 * @param array $options
	 * @return void
	 */
	public static function add($id, $options)
	{
		$options = array_merge(array(
			'id' => $id,
			'type' => 'mysql',
			'host' => 'localhost',
			'user' => '',
			'password' => '',
			'name' => ''
		), $options);

		self::$databases[$id] = (object)$options;
	}

	/**
	 * Get a database entry
	 * @param string $id
	 * @return object database entry
	 */
	public static function get($id)
	{
		if (array_key_exists($id, self::$databases))
		{
			return self::$databases[$id];
		}
		throw new Exception('The database "' . $id . '" does not exist');
	}
}
