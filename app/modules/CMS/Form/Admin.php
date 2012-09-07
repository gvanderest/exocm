<?php
/** 
 * CMS Contact Form Administrator
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */

namespace CMS\Form;
use CMS\Form\Form;
use CMS\Form\Field\Form as FieldForm;
class Admin extends \CMS\Admin\Application
{
	public function index()
	{
		$action = @$this->request->arguments[1];
		$noun = @$this->request->arguments[2];
		$id = @$this->request->arguments[3];

		$method = implode('_', array($action, $noun));

		switch ($method)
		{
			case 'add_form':
			case 'edit_form':
			case 'delete_form':
			case 'add_field':
			case 'edit_field':
			case 'delete_field':
				return $this->$method($id);

			case '_':
				$this->data['contact_forms'] = $contact_forms = $this->library->get_contact_forms();
				return $this->view->render('cms/admin/forms/index');

			default:
				return $this->error();
		}
	}

	public function delete_form($id)
	{
		$this->library->delete_contact_form($id);
		$this->redirect_to_self(array('forms'));
	}

	public function edit_form($id)
	{
		$this->data['form'] = $form = new Form(array('application' => $this));
		$this->data['contact_form'] = $contact_form = $this->library->get_contact_form($id);
		$this->data['fields'] = $fields = $this->library->get_contact_form_fields($id);
		$form->set_default_data($contact_form);

		if ($form->is_submitted())
		{
			if ($form->is_valid())
			{
				$data = $form->get_data();
				$result = $this->library->edit_contact_form($id, $data);
				if ($result)
				{
					$this->redirect_to_self(array('forms'));
				} else {
					$this->errors->add('Database error while editing form');
				}
			}
		}
		return $this->view->render('cms/admin/forms/edit');
	}

	public function add_form()
	{
		$this->data['form'] = $form = new CMS_FormAddForm(array('application' => $this));

		if ($form->is_submitted())
		{
			if ($form->is_valid())
			{
				$data = $form->get_data();
				$result = $this->library->add_contact_form($data);
				if ($result)
				{
					$this->redirect_to_self(array('forms/edit/form/' . $result));
				} else {
					$this->errors->add('Database error while creating form');
				}
			}
		}
		
		return $this->view->render('cms/admin/forms/add');
	}

	public function edit_field($id)
	{
		$this->data['field'] = $field = $this->library->get_contact_form_field($id);
		$this->data['form'] = $form = new FieldForm(array('application' => $this));
		$this->data['contact_form'] = $contact_form = $this->library->get_contact_form($id);
		$form->set_default_data($field);

		if ($form->is_submitted())
		{
			if ($form->is_valid())
			{
				$data = $form->get_data();
				$result = $this->library->edit_contact_form_field($id, $data);
				if ($result)
				{
					$this->redirect_to_self(array('forms/edit/form/' . $field->form_id));
				} else {
					$this->errors->add('Database error while updating field');
				}
			}
		}
		
		return $this->view->render('cms/admin/forms/edit-field');
	}

	public function add_field($id)
	{
		$this->data['form'] = $form = new CMS_FormFieldAddForm(array('application' => $this));
		$this->data['contact_form'] = $contact_form = $this->library->get_contact_form($id);

		if ($form->is_submitted())
		{
			if ($form->is_valid())
			{
				$data = $form->get_data();
				$result = $this->library->add_contact_form_field($id, $data);
				if ($result)
				{
					$this->redirect_to_self(array('forms/edit/form/' . $id));
				} else {
					$this->errors->add('Database error while creating field');
				}
			}
		}
		
		return $this->view->render('cms/admin/forms/add-field');
	}

	public function delete_field($id)
	{
		$field = $this->library->get_contact_form_field($id);
		if ($field)
		{
			$this->library->delete_contact_form_field($id);
		}
		$this->redirect_to_self(array('forms/edit/form/' . $field->form_id));
	}
}
