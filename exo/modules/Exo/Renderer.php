<?php
/**
 * ExoSkeleton Format Renderer
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
namespace Exo;

use Exo\Entity;

class Renderer extends Entity
{
	const DEFAULT_RENDERER_ID = 'default';
	const DEFAULT_TEMPLATE = 'default';

	/**
	 * The data being rendered, temporary
	 * @var array
	 */
	protected $data = array();

	/**
	 * The template to load for this renderer
	 * @var string
	 */
	protected $template = self::DEFAULT_TEMPLATE;

	/**
	 * The application that instantiated the renderer
	 * @var Exo\View
	 */
	protected $view;

	/**
	 * The renderers that can be loaded
	 * @var array
	 */
	public static $renderers = array();

	/**
	 * Instantiate the renderer
	 * @param Exo\View $view
	 * @return void
	 */
	public function __construct($view = NULL)
	{
		$this->view = $view;
	}

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
				self::add($one_id, $options);
			}
			return;
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
			return self::$renderers[$id];
		}
		throw new Exception('Requested renderer "' . $id . '" could not be found');
	}
}
