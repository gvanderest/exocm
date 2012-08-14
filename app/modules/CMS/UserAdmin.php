<?php
/**
 * CMS User Administrator
 * @header
 */
class CMS_UserAdmin extends CMS_Admin_Application
{
	public function __construct($request)
	{
		parent::__construct($request);
	}

	public function init($request)
	{
		$verb = @$request->arguments[1];
		$id = @$request->arguments[2];

		if (!$verb) { $verb = 'index'; }

		return $this->$verb($id);
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
		$form = $this->data['form'] = new CMS_UserEditForm('edit', array(
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

	public function index($request)
	{
		$users = $this->data['users'] = $this->library->get_users();
		return $this->view->render('cms/admin/users/index');
	}
}
