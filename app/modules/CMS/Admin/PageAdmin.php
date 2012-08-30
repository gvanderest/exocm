<?php
/** 
 * CMS Page Administrator
 * @header
 */
namespace CMS\Page;
class Admin extends \CMS\Admin\Application
{
	const DEFAULT_TEMPLATE = 'default';

	public function delete_menu($id)
	{
		$this->library->delete_menu($id);
		$this->redirect_to_self(array('pages'));
	}

	public function delete_page($id)
	{
		$this->library->delete_page($id);
		$this->redirect_to_self(array('pages'));
	}

	public function edit_menu($id)
	{
		$menu = $this->data['menu'] = $this->library->get_menu($id);
		$form = $this->data['form'] = new CMS_MenuEditForm($this);
		$form->set_default_data($menu);

		if ($form->is_submitted() && $form->is_valid())
		{
			$data = $form->get_data();
			$result = $this->library->edit_menu($id, $data);
			if ($result)
			{
				$this->redirect_to_self(array('pages'));
			}
		}
		return $this->render('cms/admin/menus/edit_menu');
	}

	public function add_menu()
	{
		$form = $this->data['form'] = new CMS_MenuAddForm($this);

		// if form is posted, validate
		if ($form->is_submitted())
		{
			if ($form->is_valid())
			{
				$data = $form->get_data();
				$result = $this->library->add_menu($data);
				if ($result)
				{
					$this->redirect_to_self(array('pages'));
				}
			}
		}
		return $this->render('cms/admin/menus/add_menu');
	}
	
	public function add_page()
	{
		$this->data['form'] = $form = new CMS_PageAddForm($this);
		$form->set_default_data(array(
			'template' => self::DEFAULT_TEMPLATE,
			'active' => 1
		));

		if ($form->is_submitted() && $form->is_valid())
		{
			$data = $form->get_data();
			$data->active = $form->active->is_checked();

			// prep page data
			$page = new stdClass;
			$page->slug = $this->library->get_unique_page_slug($data->slug);
			$page->template = $data->template;
			$page->date_created = date('Y-m-d H:i:s');
			$page->date_edited = date('Y-m-d H:i:s');
			$page->active = $data->active;

			$page_id = $this->library->add_page($page);
			if ($page_id)
			{
				// prep version data
				$version = new stdClass;
				$version->language = 'en'; // TODO: make this really selectable
				$version->title = $data->title;
				$version->content = $data->content;
				$version->published = 1; // TODO: make this logic eventually matter
				$version->date_created = date('Y-m-d H:i:s');
				$version->date_edited = date('Y-m-d H:i:s');
				$version->date_published = date('Y-m-d H:i:s'); // TODO: make this logic be selectable

				$result = $this->library->set_page_menu_entries($page_id, $data->menu_pages);
				if ($result)
				{
					$result = $this->library->add_page_version($page_id, $version);
					if ($result)
					{
						$this->redirect_to_self(array('pages'));
					} else {
						$this->errors->add('Database error while creating page version');
					}
				} else {
					$this->errors->add('Database error while adding page to menu');
				}
			} else {
				$this->errors->add('Database error while updating page');
			}

			$result = $this->library->add_page($data);
			if ($result)
			{
				$this->redirect_to_self(array('pages'));
			}
			$this->errors->add('Database error while adding page');
		}
		return $this->view->render('cms/admin/pages/add_page');
	}

	public function edit_page($id)
	{

		$this->data['page'] = $page = $this->library->get_page($id);
		if (!$page) { return $this->error(); }

		$this->data['form'] = $form = new CMS_PageEditForm($this, array('page' => $page));
		$form->set_default_data($page);

		if ($form->is_submitted() && $form->is_valid())
		{
			$data = $form->get_data();
			$data->page_id = $id;
			$data->active = $form->active->is_checked();

			// prep page data
			$page = new stdClass;
			$page->slug = $data->slug;
			$page->template = $data->template;
			$page->date_edited = date('Y-m-d H:i:s');
			$page->active = $data->active;

			// prep version data
			$version = new stdClass;
			$version->language = 'en'; // TODO: make this really selectable
			$version->title = $data->title;
			$version->content = $data->content;
			$version->published = 1; // TODO: make this logic eventually matter
			$version->date_created = date('Y-m-d H:i:s');
			$version->date_edited = date('Y-m-d H:i:s');
			$version->date_published = date('Y-m-d H:i:s'); // TODO: make this logic be selectable

			$result = $this->library->edit_page($id, $page);

			if ($result)
			{
				$result = $this->library->set_page_menu_entries($id, $data->menu_pages);
				if ($result)
				{
					$result = $this->library->add_page_version($id, $version);
					if ($result)
					{
						$this->redirect_to_self(array('pages'));

					} else {

						$this->errors->add('Database error while creating page version');
					}
				} else {
				
					$this->errors->add('Database error while updating menu_page entry');
				}
			} else {

				$this->errors->add('Database error while updating page');
			}
		}

		return $this->view->render('cms/admin/pages/edit_page');
	}

	public function index()
	{
		$request = $this->request;
		$action = @$request->arguments[1];
		$noun = @$request->arguments[2];
		$id = @$request->arguments[3];

		$method = implode('_', array($action, $noun));

		switch ($method)
		{
			case 'edit_page':
			case 'edit_menu':
			case 'add_page':
			case 'add_menu':
			case 'delete_menu';
			case 'delete_page';
				return $this->$method($id);

			case '_':
				$this->data['pages'] = $this->library->get_pages();
				$this->data['menus'] = $this->library->get_menus();
				$this->data['menu_pages'] = $this->library->get_menu_pages();

				return $this->render('cms/admin/pages/index');

			default:
				return $this->error();
		}
	}
}
