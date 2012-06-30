<?php
/**
 * CMS Menu Page Selector
 * For a provided page, display selectors for the menus to add it to
 * This object is read-only and is based upon the 'page' object passed in the $options
 * @header
 */
class CMS_MenuPageSelector extends ExoUI_DataObject
{
	public $library;
	public $page;

	public $menus;
	public $menu_pages;

	public function __construct($id, $options = array())
	{
		parent::__construct($id, $options);

		$this->library = new CMS_Library();

		$this->menus = $this->library->get_menus();

		// if a page is given, apply it
		if (array_key_exists('page', $options))
		{
			$this->page = $options['page'];
		}
	}
	
	public function populate_with_parents($obj, $items, $parent_id = 0, $depth = 1)
	{
		if ($parent_id == 0)
		{
			$obj->add_option('Root', 0);
		}

		foreach ($items as $item)
		{
			if ($this->page && $item->id == $this->page->id)
			{
				continue;
			}

			if ($item->parent_id == $parent_id)
			{
				$obj->add_option(str_repeat('-', $depth) . ' ' . $item->menu_page_title . ($item->menu_page_rank > 0 ? (' - Rank: ' . $item->menu_page_rank) : ''), $item->menu_page_id);
				$this->populate_with_parents($obj, $items, $item->menu_page_id, $depth + 1);
			}
		}
	}

	public function set_value($value)
	{
		// FIXME: this has no effect, maybe in the future
		throw new Exception('CMS_MenuPageSelector cannot be given a value');
		return FALSE;
	}

	public function get_value()
	{
		if (!isset($this->parent) || !$this->parent->is_submitted())
		{
			throw new Exception('CMS_MenuPageSelector can not be get_value()d until its form is submitted');
		}
		$data = array();
		foreach ($this->menus as $menu)
		{
			$active_key = 'active_' . $menu->id;
			$parent_key = 'parent_' . $menu->id;
			$title_key = 'title_' . $menu->id;
			$rank_key = 'rank_' . $menu->id;

			$obj = new stdClass;
			$obj->menu_id = $menu->id;

			if (array_key_exists($active_key, $_REQUEST))
			{
				$obj->active = TRUE;
				$obj->parent_id = @$_REQUEST[$parent_key];
				$obj->title = @$_REQUEST[$title_key];
				$obj->rank = @$_REQUEST[$rank_key];
			} else {
				$obj->active = FALSE;
				$obj->parent_id = 0;
				$obj->title = NULL;
				$obj->rank = 0;
			}
			$data[] = $obj;
		}
		return $data;
	}

	public function display_raw()
	{
		$o = '';
		foreach ($this->menus as $menu)
		{
			$menu_pages = $this->library->get_menu_pages($menu->id);

			// find the menu page entry for this menu
			$entry = NULL;
			foreach ($menu_pages as $item)
			{
				if ($this->page && $item->page_id == $this->page->id && $item->menu_id == $menu->id)
				{
					$entry = $item;
					break;
				}
			}

			$active = new ExoUI_Checkbox('active_' . $menu->id, array(
				'label' => 'Active',
				'return' => 'boolean'
			));
			$active->add_option($menu->name, 1);

			$parent = new ExoUI_Select('parent_' . $menu->id, array(
				'label' => 'Parent'
			));
			$this->populate_with_parents($parent, $menu_pages);

			$title = new ExoUI_Textbox('title_' . $menu->id, array(
				'label' => 'Title',
				'help' => 'Text to display in a menu'
			));
			$rank = new ExoUI_Textbox('rank_' . $menu->id, array(
				'label' => 'Rank',
				'help' => 'A numeric value to position the item against its siblings'
			));

			if ($entry)
			{
				$active->set_value(1);
				$parent->set_value($entry->parent_id);
				$title->set_value($entry->menu_page_title);
				$rank->set_value($entry->menu_page_rank);
			} else {
				$rank->set_value(0);
				if ($this->page)
				{
					$title->set_value($this->page->title);
				}
			}

			$o.= '<div class="menu">';
			$o.= '<h3><span class="active">' . $active->display_raw() . '</span></h3>';
			$o.= $parent->display();
			$o.= $title->display();
			$o.= $rank->display();
			$o.= '</div>';
		}
		return $o;
	}
}
