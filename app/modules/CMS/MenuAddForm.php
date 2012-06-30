<?php
/**
 * Menu Creation Form
 * @header
 */
class CMS_MenuAddForm extends ExoUI_Form
{
	public function __construct($id = 'add_menu', $options = array())
	{
		parent::__construct($id, $options);

		$this->name = new ExoUI_Textbox('name', array(
			'validations' => array('required')
		));

		$this->slug = new ExoUI_Textbox('slug', array(
			'help' => "An easy to reference string for the menu, e.g.: 'main' or 'footer'",
			'validations' => array('slug', 'required')
		));

		$this->submit = new ExoUI_Submit('submit', array(
			'value' => 'Add Menu'
		));

		$this->add(array(
			$this->name,
			$this->slug,
			$this->submit
		));
	}
}
