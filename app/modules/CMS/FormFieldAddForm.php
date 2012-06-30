<?php
/**
 * CMS Form Field Add Form
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
class CMS_FormFieldAddForm extends ExoUI_Form
{
	public $library;

	public function __construct($id = 'add_field', $options = array())
	{
		$this->library = new CMS_Library();
		
		$this->name = new ExoUI_Textbox('name', array(
			'validations' => array('required')
		));

		$this->rank = new ExoUI_Textbox('rank', array(
			'validations' => array('required')
		));

		$this->type = new ExoUI_Select('type', array(
			'validations' => array('required')
		));
		foreach ($this->library->get_contact_form_field_types() as $type)
		{
			$this->type->add_option($type->name, $type->id);
		}

		$this->submit = new ExoUI_Submit('submit');

		$this->add(array(
			$this->name,
			$this->rank,
			$this->type,
			$this->submit
		));
	}	
}
