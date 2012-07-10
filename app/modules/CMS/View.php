<?php
/**
 * CMS View for rendering templates
 * @header
 */
use Exo\View as Exo_View;
class CMS_View extends Exo_View 
{ 
	public $library;

	public function __construct($application)
	{
		parent::__construct($application);
		$this->library = new CMS_Library();
	}

	public function display_menu($name, $options = array())
	{
		$options = array_merge(array(
			'id' => NULL, // id to apply to the ul
			'page' => NULL, // the currently active page being viewed can be passed in
			'expanded_class' => 'is_expanded', // the class to add to an active li and anchor parent item
			'active_class' => 'is_active', // the class to add to active li and active anchor
			'hashes' => FALSE, // instead of outputting pages, make them into href="#page-slug-here" (for js stuff, mostly.)
			'page_titles' => FALSE, // display page names instead of the menu titles
			'level' => 1, // the level of the menu to start at, 1-based index
			'children' => TRUE, // display children of the items
			'parents' => array() // parent tree
		), $options);
		
		$menu = $this->library->get_menu_by_slug($name);
		if (!$menu) { return NULL; }

		$pages = $this->library->get_menu_pages($menu->id);
		if (count($pages) == 0) { return NULL; }

		// recursively find parents for a menu page
		$parent_id = 0;
		if ($options['page'])
		{
			$entry = $this->library->get_page_menu_entry($options['page']->id, $menu->id);
			if ($entry)
			{
				$parents = array_merge($this->library->recursively_get_parents($pages, $entry->id), array($entry->id));
				$options['parents'] = $parents;
				$parent_id = array_key_exists($options['level'] - 1, $parents) ? $parents[$options['level'] - 1] : -1;
			} else {
				// realistically, you can only show the first level, because any other level would require a parent tree
				if ($options['level'] != 1)
				{
					return NULL;
				}
			}
		}

		return $this->recursively_display_menu($pages, $parent_id, $options);
	}

	/**
	 * Render an output and do CMS-specific things to it
	 * @param string $template
	 * @param array $data (optional) data to pass to view
	 * @return string output
	 */
	public function render($template, $data = NULL)
	{
		$response = parent::render($template, $data);

		for ($x = 0; $x < 3; $x++)
		{
			$response->content = $this->library->parse_page_tags($this->application, $response->content);
		}

		return $response;
	}

	/**
	 * Recursively build a menu's output
	 * @param object $menu
	 * @param array $pages all the menu items
	 * @param int $parent_id the parent to start the menu at
	 * @param array $options
	 * @return string html output
	 */
	public function recursively_display_menu($pages, $parent_id = NULL, $options = array())
	{
		$children = array();
		foreach ($pages as $page)
		{
			if ($parent_id == $page->parent_id && $this->library->page_is_visible($page))
			{
				$children[] = $page;
			}
		}

		$o = '';

		// if there are no children, return no output
		if (count($children) == 0)
		{
			return $o;
		}

		$o.= '<ul' . (($options['id'] === NULL) ? '' : (' id="' . $options['id'] . '"')) . '>';
		foreach ($children as $page)
		{
			$classes = array();

			$url = NULL;
			if ($page->menu_page_type == 'url')
			{
				$url = $page->menu_page_url;
			} else {
				if ($options['page'] && $page->id == $options['page']->id) { $classes[] = $options['active_class']; }
				// FIXME: detect the actual route that is a cms application
				$url = ($options['hashes'] ? '#' . $page->slug : $this->url_to_self(array($page->slug)));
			}

			if (in_array($page->id, $options['parents']))
			{
				$classes[] = $options['expanded_class'];
			}

			$page_name = $page->menu_page_title;
			if ($options['page_titles'] && !empty($page->title)) { $page_name = $page->title; }

			$submenu = '';
			if ($options['children'])
			{
				$submenu = $this->recursively_display_menu($pages, $page->menu_page_id, $options);
				if (!empty($submenu))
				{
					$classes[] = 'has_children';
				}
			}

			$o.= '<li class="' . implode(' ', $classes) . '">';
			$o.= '<a class="' . implode(' ', $classes) . '" href="' . $url . '">' . $page_name . '</a>';
			$o.= $submenu;
			$o.= '</li>';
		}
		$o.= '</ul>';

		return $o;
	}

	public function url_to_self($args = array())
	{
		return $this->application->url_to_self($args);
	}
}
