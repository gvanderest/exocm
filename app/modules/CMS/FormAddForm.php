<?php
/**
 * CMS Contact Form Creation Form
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
class CMS_FormAddForm extends ExoUI_Form
{
	public $library;

	public function __construct($id = 'add_form', $options = array())
	{
		parent::__construct($id, $options);

		$this->library = new CMS_Library();

		$this->slug = new ExoUI_Textbox('slug', array(
			'validations' => array('required')
		));

		$this->name = new ExoUI_Textbox('name', array(
			'validations' => array('required')
		));

		$this->emails = new ExoUI_Textbox('emails', array(
			'help' => 'List of email addresses to send form results to, separated by comma',
			'validations' => array('required')
		));

		$this->success_message = new ExoUI_HTMLEditor('success_message');

		$this->submit = new ExoUI_Submit('submit', array(
			'value' => 'Add Form'
		));

		$this->add(array(
			$this->name,
			$this->slug,
			$this->emails,
			$this->success_message,
			$this->submit
		));
	}
}
