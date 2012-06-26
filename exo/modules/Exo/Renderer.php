<?php
/**
 * ExoSkeleton Format Renderer
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
namespace Exo;
class Renderer
{
	const DEFAULT_RENDERER_ID = 'default';

	/**
	 * The renderer
	 * @var array
	 */
	public static $renderers = array();

	/**
	 * Add a renderer
	 * @param mixed $id if string, single, if array of strings
	 * @param array $options
	 * @return void
	 */
	public static function add($id, $options)
	{
		$options = array_merge(array(
			'id' => $id,
			'class' => NULL
		), $options);
		
		// register multiple renderers
		if (is_array($id))
		{
			foreach ($id as $one_id)
			{
				$options['id'] = $one_id;
				$result = self::add($one_id, $options);
				if (!$result)
				{
					return FALSE;
				}
			}
			return TRUE;
		}

		self::$renderers[$id] = (object)$options;
	}

	/**
	 * Get a specific renderer
	 * @param string id
	 * @return object renderer
	 */
	public static function get($id = NULL)
	{
		if (array_key_exists($id, self::$renderers))
		{
			return @self::$renderers[$request];
		}
		throw new Exception('Requested renderer "' . $id . '" could not be found');
	}
}
