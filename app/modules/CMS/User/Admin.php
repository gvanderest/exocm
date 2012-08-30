<?php
/**
 * CMS User Administrator
 * @header
 */
namespace CMS\User;
use CMS\User\Form as UserForm;
class Admin extends \CMS\Admin\Application
{
	public function __construct($request)
	{
		parent::__construct($request);
	}

	public function add()
	{
		$form = $this->data['form'] = new CMS_UserAddForm('add', array(
			'application' => $this
		));

		if ($form->is_submitted() && $form->is_valid())
		{
			$data = $form->get_data();
			$result = $this->library->add_user($data);

			if ($result)
			{
				$form->photo->set_upload_path(\Exo\ASSETS_PATH . '/accounts/' . $result);
				$form->photo->move_file();
				$this->redirect_to_self(array('users'));
			} else {
				$this->errors->add('Database error while editing user');
			}
		}

		return $this->view->render('cms/admin/users/add');
	}	

	public function edit($id)
	{
		$user = $this->data['user'] = $this->library->get_user($id);
		$form = $this->data['form'] = new UserForm('edit', array(
			'application' => $this
		));
		$form->set_default_data($user);
		$form->photo->set_upload_path(\Exo\ASSETS_PATH . '/accounts/' . $id);

		if ($form->is_submitted() && $form->is_valid())
		{
			$data = $form->get_data();
			$result = $this->library->edit_user($id, $data);

			if ($result)
			{
				$form->photo->move_file();
				$this->redirect_to_self(array('users'));

			} else {

				$this->errors->add('Database error while editing user');
			}
		}

		return $this->view->render('cms/admin/users/edit');
	}	

	public function delete($id)
	{
		$result = $this->library->delete_user($id);
		$this->redirect_to_self(array('users'));
	}

	public function index()
	{
		$request = $this->request;
		$verb = @$request->arguments[1];
		$id = @$request->arguments[2];

		switch ($verb)
		{
			case 'add':
			case 'delete':
			case 'edit':
				return $this->$verb($id);

			case '':
				$users = $this->data['users'] = $this->library->get_users();
				return $this->view->render('cms/admin/users/index');
		}

		return $this->error();
	}
}
