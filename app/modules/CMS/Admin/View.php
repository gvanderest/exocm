<?php
/**
 * CMS Admin View
 * @header
 */

class CMS_Admin_View extends Exo\View 
{
	public $library;

	public function __construct($application)
	{
		parent::__construct($application);
		$this->library = new CMS_Library($application);
	}

	public function get_application_url($slug = array())
	{
		$url = $this->application->url_to_self($slug);
		return $url;
	}

	public function get_logout_url()
	{
		$url = $this->application->url_to_self(array(CMS_Admin_Application::LOGOUT_ARGUMENT));
		return $url;
	}

	public function get_home_url()
	{
		$url = $this->application->url_to_self(array());
		return $url;
	}

	public function get_self_url($slug = array())
	{
		if (is_string($slug))
		{
			$slug = array($slug);
		}

		$url = $this->application->get_route_url($slug);
		return $url;
	}

	public function get_module_url($args = array())
	{
		if (!is_array($args))
		{
			$args = array($args);
		}
		$args = array_merge(array($this->application->request->arguments[0]), $args);
		return $this->application->url_to_self($args);
	}

	public function display_applications_menu()
	{
		$apps = $this->library->get_applications();
		$output = $this->recursive_display_applications_menu($apps);
		return $output;
	}

	public function recursive_display_applications_menu($apps, $parent_id = 0)
	{
		$child_apps = array();
		foreach ($apps as $app)
		{
			if ($app->parent_id == $parent_id)
			{
				$child_apps[] = $app;
			}
		}

		if (count($child_apps) == 0)
		{
			return '';
		}

		$app_slug = end($this->application->request->arguments);

		$output = '';
		$output .= '<ul>';
		foreach ($child_apps as $app)
		{
			$child_output = $this->recursive_display_applications_menu($apps, $app->id);

			$classes = array();

			// if the current app has the slug of this app, then mark it
			if ($app_slug == $app->slug)
			{
				$classes[] = 'active';
			}
			
			$output .= '<li class="' . implode(' ', $classes) . '">';
			$output .= '<a href="' . $this->get_application_url($app->slug) . '">' . $app->name . '</a>';
			$output .= $child_output;
			$output .= '</li>';
		}
		$output .= '</ul>';
		return $output;
	}
}
