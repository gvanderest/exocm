<?php
/**
 * CMS Library for all CMS-related calls
 * @header
 */
class CMS_Library
{
	const FORM_FIELD_TEXTBOX = 'textbox';
	const FORM_FIELD_TEXTAREA = 'textarea';
	const FORM_FIELD_SELECT = 'select';
	const FORM_FIELD_CHECKBOX = 'checkbox';

	const PAGE_VERSIONS_KEPT = 5;

	public $assets_base_path = NULL;
	protected $application;

	public function __construct($application = NULL)
	{
		$this->db = new Exo\Database\Connection();
		$this->assets_base_path = \Exo\ASSETS_PATH;
		$this->application = $application;
	}

	/**
	 * Add user
	 * @param mixed $data
	 * @return id
	 */
	public function add_user($data)
	{
		return $this->db->insert('users', $data);
	}	

	/**
	 * Edit user
	 * @param int $id
	 * @param mixed $data
	 * @return bool
	 */
	public function edit_user($id, $data)
	{
		if (empty($data->password)) { unset($data->password); }

		return $this->db->update('users', $id, $data);
	}	

	/**
	 * Get a user
	 * @param int $id
	 * @return array objects
	 */
	public function get_user($id)
	{
		return $this->db->select('users', $id);
	}

	/**
	 * Get all of the users
	 * @return array objects
	 */
	public function get_users()
	{
		return $this->db->select('users');
	}

	/**
	 * Delete user
	 * @param int $id
	 * @return bool
	 */
	public function delete_user($id)
	{
		return $this->db->delete('cms_users', $id);
	}	

	/**
	 * Get the files in a path
	 * @param string $path
	 * @return array of objects, see get_path_entries
	 */
	public function get_path_files($path)
	{
		$all = $this->get_path_entries($path);
		$array = array();
		foreach ($all as $entry)
		{
			if ($entry->type == 'file')
			{
				$array[] = $entry;
			}
		}
		return $array;
	}

	/**
	 * Get the directories in a path
	 * @param string $path
	 * @return array of objects, see get_path_entries
	 */
	public function get_path_dirs($path)
	{
		$all = $this->get_path_entries($path);
		$array = array();
		foreach ($all as $entry)
		{
			if ($entry->type == 'dir')
			{
				$array[] = $entry;
			}
		}
		return $array;
	}

	/**
	 * Get all of the entries in a path
	 * @param string $path
	 * @return array of objects with attributes:
	 * - path - full path to directory
	 * - name - name of directory or file
	 * - type - 'file' or 'dir'
	 * - extension - the last segment of a file
	 * - size - in bytes
	 */
	public function get_path_entries($path)
	{
		$entries = array();

		// can't be accessed
		if (!is_dir($path) || !is_readable($path)) { return $entries; }

		$dh = opendir($path);
		while ($record = readdir($dh))
		{
			// don't count these, they're not important
			if (in_array($record, array('.', '..'))) { continue; }
			
			$entry = new stdClass;
			$entry->path = $path . '/' . $record;
			$entry->assets_path = strpos($path, $this->assets_base_path) !== FALSE ? str_replace($this->assets_base_path, '', $entry->path) : NULL;
			$entry->name = $record;
			$entry->type = is_dir($entry->path) ? 'dir' : 'file';
			$entry->extension = end(explode('.', $entry->name));
			$entry->size = filesize($entry->path);

			$entries[] = $entry;
		}
		return $entries;
	}		

	/**
	 * Get a unique page slug from a base slug
	 * @param string $base_slug
	 * @return string unique slug
	 */
	public function get_unique_page_slug($base_slug)
	{
		$existing_pages = $this->db->select('cms_pages', array(
			'where' => array(array('slug', 'starts_with', $base_slug))
		));

		$existing_slugs = array();
		foreach ($existing_pages as $page)
		{
			$existing_slugs[] = $page->slug;
		}

		for ($x = 0; TRUE; $x++)
		{
			$slug = $base_slug . ($x > 0 ? ('-' . $x) : '');
			if (!in_array($slug, $existing_slugs))
			{
				return $slug;
			}
		}
		return NULL;
	}

	/**
	 * Get the cleaned-up files path based on the requested path, preventing altering system paths
	 * @param string $path requested path
	 * @return string full path to assets folder
	 */
	public function get_assets_path($append)
	{
		$full_path = $this->assets_base_path;
		if ($append === NULL)
		{
			return $full_path;
		}
		$append = str_replace('../', '', $append);
		$append = trim($append, '/');
		$full_path .= '/' . $append;
		return $full_path;
	}

	/**
	 * Get the templates available for CMS
	 * @param string $theme (optinal) if not provided, will try to be detected
	 * @return array of objects
	 */
	public function get_templates($theme = NULL)
	{
		$templates = array();

		if ($theme === NULL)
		{
			$route = \Exo\Route::get('default');
			$theme = $route->theme;
		}

		$path = \Exo\APP_THEMES_PATH . '/' . $theme . '/cms';
		$dh = opendir($path);
		while ($entry = readdir($dh))
		{
			if (!is_dir($path . '/' . $entry))
			{
				// FIXME: use a constant for suffix
				$suffix = '.php';
				if (preg_match('/' . $suffix . '$/', $entry))
				{
					$template = new stdClass;
					$template->name = substr($entry, 0, strlen($entry) - strlen($suffix));

					$templates[] = $template;
				}
			}
		}

		return $templates;
	}

	/**
	 * Set the menu_page entries for a page, based on an array of objects
	 * @param int $page_id
	 * @param array $menu_pages example: array(
	 *	(object)array(
	 *		'active' => TRUE,			// whether or not this menu's entry is active, if one exists, remove it
	 *		'menu_id' => 1,				// the menu the entry is going into (or exists in already)
	 *		'parent_id' => 0,			// if 0, root, otherwise the ID of the menu_page_id item to be used as parent
	 *		'title' => 'Menu Item',		// text to show in the menu
	 *		'rank' => 100				// the rank of the entry
	 *  )
	 * )
	 * @return bool
	 */
	public function set_page_menu_entries($page_id, $menu_pages)
	{
		// for each menu page entry
		foreach ($menu_pages as $menu_page)
		{
			$entry = $this->get_page_menu_entry($page_id, $menu_page->menu_id);

			// all that needs to change is.. rank, parent_id, and title (if it's an update)
			$data = array(
				'menu_id' => $menu_page->menu_id, // overkill, but on insert it would be needed
				'page_id' => $page_id,
				'rank' => $menu_page->rank,
				'parent_id' => $menu_page->parent_id,
				'name' => $menu_page->title
			);

			// if the entry is active...
			if ($entry)
			{
				if ($menu_page->active) // and an entry already exists, update it
				{
					if (!$this->db->update('cms_menu_pages', $entry->id, $data))
					{
						return FALSE;
					}

				} else { // if the entry is inactive and an entry exits, delete it and move all children up a menu level

					if (!$this->delete_menu_page($entry->id))
					{
						return FALSE;
					}
				}
			} elseif ($menu_page->active) { // and there is no entry, but there should be.. add it!

				if (!$this->db->insert('cms_menu_pages', $data))
				{
					return FALSE;
				}
			}
		}
		return TRUE;
	}

	/**
	 * Delete a menu_page entry and move all the item's children up a level
	 * @param int $id menu_page id
	 * @return bool
	 */
	public function delete_menu_page($id)
	{
		// get the parent of this menu_page
		$sql = "
			SELECT parent_id
			FROM cms_menu_pages
			WHERE id = :id
		";
		$query = $this->db->prepare($sql);
		$result = $query->execute(array(':id' => $id));
		$parent = $query->fetch();

		if (!$parent)
		{
			return FALSE;
		}
		$parent_id = $parent->parent_id;

		$sql = "
			UPDATE cms_menu_pages
			SET parent_id = :parent_id
			WHERE parent_id = :id
		";
		$query = $this->db->prepare($sql);
		$result = $query->execute(array(':parent_id' => $parent_id, ':id' => $id));

		if (!$result)
		{
			return FALSE;
		}

		if (!$this->db->delete('cms_menu_pages', $id))
		{
			return FALSE;
		}

		return TRUE;
	}

	/**
	 * Get the menu page entry for a page and menu combo
	 * @param int $page_id
	 * @param int $menu_id
	 * @return object or FALSE if none
	 */
	public function get_page_menu_entry($page_id, $menu_id)
	{
		$sql = "
			SELECT *
			FROM cms_menu_pages
			WHERE page_id = :page_id
				AND menu_id = :menu_id
		";
		$query = $this->db->prepare($sql);
		$result = $query->execute(array(':page_id' => $page_id, ':menu_id' => $menu_id));
		if ($result)
		{
			return $query->fetch();
		}
		return FALSE;
	}

	/**
	 * Edit a menu
	 * @param int $id menu id
	 * @param object $data
	 * @return int menu id
	 */
	public function edit_menu($id, $data)
	{
		return $this->db->update('cms_menus', $id, $data);
	}

	/**
	 * Create a menu
	 * @param object $data
	 * @return int menu id
	 */
	public function add_menu($data)
	{
		return $this->db->insert('cms_menus', $data);
	}

	/**
	 * Get a module's informatio
	 * @param string $namespace
	 * @return object
	 */
	public function get_module($namespace)
	{
		$paths = array(
			\Exo\EXO_PATH . '/app/modules/' . $namespace . '/module.xml',
			\Exo\EXO_PATH . '/exo/modules/' . $namespace . '/module.xml'
		);
		foreach ($paths as $path)
		{
			if (file_exists($path))
			{
				$xml = @simplexml_load_file($path);
				return $xml;
			}
		}
		return NULL;
	}

	/**
	 * Get the pinnacle page of a menu
	 * @param string $slug menu url
	 * @param int $child_id
	 * @return object pinnacle page or NULL if none found
	 */
	public function get_menu_page_pinnacle($slug, $child_id)
	{
		$menu = $this->get_menu_by_slug($slug);
		$pages = $this->get_menu_pages($menu->id);
		$entry = $this->get_page_menu_entry($child_id, $menu->id);
		if (!$entry)
		{
			return NULL;
		}
		$parents = array_merge($this->recursively_get_parents($pages, $entry->id), array($entry->id));
		$pinnacle_id = array_key_exists(1, $parents) ? $parents[1] : -1;
		foreach ($pages as $page)
		{
			if ($page->menu_page_id == $parents[1])
			{
				return $this->get_page($page->id);
			}
		}
		return NULL;
	}

	/**
	 * Get a menu by its name
	 * @param string $name
	 * @return object
	 */
	public function get_menu_by_slug($name)
	{
		//return $this->orm->get('cms_page', $options);
		$sql = "
			SELECT id
			FROM cms_menus
			WHERE slug = :name
		";
		$result = $this->db->get_one($sql, array(':name' => $name));
		if (!$result)
		{
			return NULL;
		}
		return $this->get_menu($result->id);
	}

	/**
	 * Get all menus
	 * @return array of objects indexed by menu id
	 */
	public function get_menus()
	{
		$sql = "
			SELECT M.*
			FROM cms_menus M
		";
		$result = $this->db->get_all($sql);
		return $result;
	}

	/**
	 * Get a menu
	 * @param int $id
	 * @return 
	 */
	public function get_menu($id)
	{
		$sql = "
			SELECT M.*
			FROM cms_menus M
			WHERE id = :id
			LIMIT 0, 1
		";
		$result = $this->db->get_one($sql, array(':id' => $id));
		return $result;
	}

	/**
	 * Get all pages from a menu
	 * @param int $menu_id (optional)
	 * @return object
	 */
	public function get_menu_pages($menu_id = NULL)
	{
		$sql = "
			SELECT MP.menu_id, MP.rank menu_page_rank, MP.parent_id, MP.name menu_page_title, MP.id menu_page_id, MP.type menu_page_type, MP.url menu_page_url, MP.target menu_page_target, PC.*, P.*, P.id page_id
			FROM cms_menu_pages MP
			LEFT JOIN cms_pages P ON MP.page_id = P.id
			LEFT JOIN (
				SELECT *
				FROM cms_page_versions
				ORDER BY id DESC
			) PC ON P.id = PC.page_id
		";
		$values = array();

		if ($menu_id !== NULL)
		{

			$sql .= " WHERE MP.menu_id = :menu_id ";
			$values[':menu_id'] = $menu_id;
		}

		$sql .= "
			GROUP BY P.id
			ORDER BY MP.rank ASC
		";

		$result = $this->db->get_all($sql, $values);
		return $result;
	}

	/**
	 * Get all pages
	 * @param mixed $options (optional)
	 * @return object
	 */
	public function get_pages($options = array())
	{
		//return $this->orm->get('cms_page', $options);
		$sql = "
			SELECT PC.*, P.*
			FROM cms_pages P
			LEFT JOIN (
				SELECT *
				FROM cms_page_versions
				ORDER BY id DESC
			) PC ON P.id = PC.page_id
			GROUP BY P.id
		";
		return $this->db->get_all($sql);
	}

	/**
	 * Get a page
	 * @param mixed $options (optional) if integer, by id, if string, by slug
	 * @return object
	 */
	public function get_page($options = array())
	{
		//return $this->orm->get('cms_page', $options);
		$sql = "
			SELECT PC.*, P.*
			FROM cms_pages P
			LEFT JOIN (
				SELECT *
				FROM cms_page_versions
				ORDER BY id DESC
			) PC ON P.id = PC.page_id
		";
		$values = array();
		if (is_numeric($options))
		{
			$sql .= ' WHERE P.id = :id ';
			$values[':id'] = $options;
		} elseif (is_string($options)) {
			$sql .= ' WHERE P.slug = :slug ';
			$values[':slug'] = $options;
		}
		$sql .= ' GROUP BY PC.page_id ';
		return $this->db->get_one($sql, $values);
	}

	/**
	 * Update a page by adding a new version
	 * @param int $id page id
	 * @param object $data
	 * @return int version id
	 */
	public function add_page_version($id, $data)
	{
		$data->page_id = $id;
		return $this->db->insert('cms_page_versions', $data);
	}

	/**
	 * Get a CMS application (admin) by its slug
	 * @param string $slug
	 * @return object application
	 */
	public function get_application_by_slug($slug)
	{
		$sql = "
			SELECT *
			FROM cms_applications
			WHERE slug = :slug
		";
		$result = $this->db->get_one($sql, array(':slug' => $slug));
		return $result;
	}

	/**
	 * Delete all page versions
	 * @param int $id page id
	 * @return bool
	 */
	public function delete_page_versions($id)
	{
		$sql = "
			DELETE FROM cms_page_versions
			WHERE page_id = :id
		";
		return $this->db->query($sql, array(':id' => $id));
	}

	/**
	 * Delete a menu and all its links to pages
	 * @param int $id menu id
	 * @return bool
	 */
	public function delete_menu($id)
	{
		$sql = "
			DELETE FROM cms_menu_pages
			WHERE menu_id = :id
		";
		$this->db->query($sql, array(':id' => $id));

		$sql = "
			DELETE FROM cms_menus
			WHERE id = :id
		";
		return $this->db->query($sql, array(':id' => $id));
	}	

	/**
	 * Delete a page and all its versions
	 * @param int $id page id
	 * @return bool
	 */
	public function delete_page($id)
	{
		if (!$this->delete_page_versions($id))
		{
			return FALSE;
		}

		$sql = "
			DELETE FROM cms_menu_pages
			WHERE page_id = :id
		";
		$this->db->query($sql, array(':id' => $id));

		$sql = "
			DELETE FROM cms_pages
			WHERE id = :id
		";
		return $this->db->query($sql, array(':id' => $id));
	}	

	/** 
	 * Get all applications
	 * @return array of objects
	 */
	public function get_applications()
	{
		$sql = "
			SELECT *
			FROM cms_applications
			ORDER BY rank ASC
		";
		$result = $this->db->get_all($sql);
		return $result;
	}

	/**
	 * Create a page
	 * @param object $data page data
	 * @return bool
	 */
	public function add_page($data)
	{
		return $this->db->insert('cms_pages', $data);
	}

	/**
	 * Update a page
	 * @param int $id page id
	 * @param object $data page data
	 * @return bool
	 */
	public function edit_page($id, $data)
	{
		return $this->db->update('cms_pages', $id, $data);
	}

	/**
	 * Test if a page is active and visible in a menu
	 * @param object $page
	 * @return bool page is considered "active" and should be displayed
	 */
	public function page_is_visible($page)
	{
		return $page->active;
	}
	
	/**
	 * Recursively delete a folder
	 * @param string $path
	 * @return void
	 */
	public function recursively_delete_folder($path)
	{
		$files = glob($path . '/*');
		if (is_array($files))
		{
			foreach($files as $file) 
			{
				if(is_dir($file))
				{
					$this->recursively_delete_folder($file);
				} else {
					unlink($file);
				}
			}
		}
		rmdir($path);
	}

	/**
	 * Get the parents for a page in a menu
	 * @param object $menu
	 * @param array $pages
	 * @param int $parent_id
	 * @return array if $page is NULL, returns an empty array, otherwise, an array of page IDs
	 */
	public function recursively_get_parents($pages, $child_id)
	{
		foreach ($pages as $page)
		{
			if ($child_id == $page->menu_page_id)
			{
				return array_merge($this->recursively_get_parents($pages, $page->parent_id), array($page->parent_id));
			}
		}

		// no matches, so it's at the end.. and everything has nothing as the base parent
		return array();
	}

	/**
	 * Create a contact form
	 * @param object $data
	 * @return int id
	 */
	public function add_contact_form($data)
	{
		return $this->db->insert('cms_forms', $data);
	}

	/**
	 * Get all contact forms
	 * @param array $options (optional)
	 * @return array of objects
	 */
	public function get_contact_forms($options = array())
	{
		return $this->db->select('cms_forms', $options);
	}

	/**
	 * Get a contact form
	 * @param int $id
	 * @return object
	 */
	public function get_contact_form($id)
	{
		return $this->db->select('cms_forms', $id);
	}

	/**
	 * Get contact form field types
	 * @param void
	 * @return array of objects
	 */
	public function get_contact_form_field_types()
	{
		return array(
			(object)array('name' => 'Textbox', 'id' => self::FORM_FIELD_TEXTBOX),
			(object)array('name' => 'Multiline Textbox', 'id' => self::FORM_FIELD_TEXTAREA),
			(object)array('name' => 'Select Box', 'id' => self::FORM_FIELD_SELECT),
			(object)array('name' => 'Checklist', 'id' => self::FORM_FIELD_CHECKBOX)
		);
	}

	/**
	 * Get a contact form field type by its slug
	 * @param string $slug
	 * @return object field type
	 */
	public function get_contact_form_field_type($slug)
	{
		foreach ($this->get_contact_form_field_types() as $type)
		{
			if ($type->slug == $slug) { return $type; }
		}
		return NULL;
	}

	/**
	 * Edit a contact form field
	 * @param int $id
	 * @param object $data
	 * @return bool
	 */
	public function edit_contact_form_field($id, $data)
	{
		return $this->db->update('cms_form_fields', $id, $data);
	}

	/**
	 * Create a contact form field
	 * @param int $form_id
	 * @param object $data
	 * @return int id
	 */
	public function add_contact_form_field($form_id, $data)
	{
		$data->form_id = $form_id;
		return $this->db->insert('cms_form_fields', $data);
	}

	/**
	 * Update a contact form
	 * @param int $id
	 * @param object $data
	 * @return bool
	 */
	public function edit_contact_form($id, $data)
	{
		return $this->db->update('cms_forms', $id, $data);
	}

	/**
	 * Delete a contact form
	 * @param int $id
	 * @return bool
	 */
	public function delete_contact_form($id)
	{
		if (!$this->delete_contact_form_fields($id)) { return FALSE; }
		return $this->db->delete('cms_forms', $id);
	}

	/**
	 * Delete a contact form field
	 * @param int $id
	 * @return bool
	 */
	public function delete_contact_form_field($id)
	{
		return $this->db->delete('cms_form_fields', $id);
	}

	/**
	 * Get a contact form field
	 * @param int $id
	 * @return object
	 */
	public function get_contact_form_field($id)
	{
		return $this->db->select('cms_form_fields', $id);
	}

	/**
	 * Get contact form fields
	 * @param int $id form id
	 * @return array of objects
	 */
	public function get_contact_form_fields($id)
	{
		return $this->db->select('cms_form_fields', array('form_id' => $id));
	}

	/**
	 * Delete all contact form fields
	 * @param int $id form id
	 * @return bool
	 */
	public function delete_contact_form_fields($id)
	{
		return $this->db->delete('cms_form_fields', array('form_id' => $id));
	}

	/**
	 * Get all galleries
	 * @param array $options (optional)
	 * @return array or objects
	 */
	public function get_galleries($options = array())
	{
		return $this->db->select('
			(
				SELECT g.*, COUNT(i.id) image_count
				FROM cms_galleries g
				LEFT JOIN cms_gallery_images i ON g.id = i.gallery_id
				GROUP BY g.id
			) Z
		', $options);
	}

	/**
	 * Get a single gallery, alias for get_galleries
	 * @see get_galleries()
	 */
	public function get_gallery($id) { return $this->get_galleries($id); }

	/**
	 * Create a gallery
	 * @param object $data
	 * @return int id
	 */
	public function add_gallery($data)
	{
		return $this->db->insert('cms_galleries', $data);
	}	
	
	/**
	 * Edit a gallery
	 * @param int $id
	 * @param object $data
	 * @return bool
	 */
	public function edit_gallery($id, $data)
	{
		return $this->db->update('cms_galleries', $id, $data);
	}

	/**
	 * Get a gallery's images
	 * @param int $id gallery id
	 * @return array of objects
	 */
	public function get_gallery_images($id, $options = array())
	{
		$options = array_merge(array(
			'where' => array('gallery_id' => $id)
		), $options);

		if (!is_numeric($id)) { $id = $this->get_gallery($id)->id; }
		return $this->db->select('cms_gallery_images', $options);
	}

	/**
	 * Get a gallery image
	 * @param int $id image id
	 * @return object
	 */
	public function get_gallery_image($id)
	{
		return $this->db->select('cms_gallery_images', $id);
	}

	/**
	 * Edit a gallery image
	 * @param int $id image id
	 * @param object $data
	 * @return bool
	 */ 
	public function edit_gallery_image($id, $data)
	{
		return $this->db->update('cms_gallery_images', $id, $data);
	}

	/**
	 * Add a gallery image
	 * @param int $gallery_id
	 * @param object $data
	 * @return int image id
	 */ 
	public function add_gallery_image($gallery_id, $data)
	{
		$data->gallery_id = $gallery_id;
		return $this->db->insert('cms_gallery_images', $data);
	}

	/**
	 * Delete an image
	 * @param int $id image id
	 * @return bool
	 */
	public function delete_gallery_image($id)
	{
		return $this->db->delete('cms_gallery_images', $id);
	}

	/**
	 * Delete all images from a gallery
	 * @param int $gallery_id
	 * @return bool
	 */
	public function delete_gallery_images($gallery_id)
	{
		return $this->db->delete('cms_gallery_images', array('gallery_id' => $gallery_id));
	}

	/**
	 * Delete a gallery and all of its images
	 * @param int $id gallery id
	 * @return bool
	 */
	public function delete_gallery($id)
	{
		if (!$this->delete_gallery_images($id)) { return FALSE; }
		return $this->db->delete('cms_galleries', $id);
	}

	/**
	 * Parse out page tags from content
	 * @param object $application
	 * @param string $content
	 * @return string parsed output
	 */
	public function parse_page_tags($application, $content)
	{
		// FIXME: make this use database for real
		$tags = array(
			(object)array('name' => 'cms:form', 'class' => 'CMS_Tag_ContactForm'),
			(object)array('name' => 'cms:content', 'class' => 'CMS_Tag_Content'),
			(object)array('name' => 'cms:gallery', 'class' => 'CMS_Tag_Gallery')
		);
		foreach ($tags as $tag)
		{
			$tag->name = preg_replace("#([^a-z0-9])#i", '\\\\' . "$1", $tag->name);
			preg_match_all('#&lt;' . $tag->name . ' (id="(.+?)" )?/&gt;#', $content, $matches);
			foreach ($matches[2] as $key => $id)
			{
				$class = $tag->class;
				$class = new $class($application);
				$args = array('id' => $id);
				$html = $class->init($args);
				$content = str_replace($matches[0][$key], $html, $content);
			}
		}
		return $content;
	}
}
