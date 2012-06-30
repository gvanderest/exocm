<?php
/**
 * User Edit Form
 * @header
 */
class CMS_UserEditForm extends ExoUI_Form
{
	public $user;

	public function __construct($id = 'edit', $options = array())
	{
		parent::__construct($id, $options);

		if (array_key_exists('user', $options))
		{
			$this->user = $options['user'];
		}

		$this->photo = new ExoUI_Upload('photo');

		$this->first_name = new ExoUI_Textbox('first_name', array(
			'validations' => array('required')
		));

		$this->last_name = new ExoUI_Textbox('last_name', array(
			'validations' => array('required')
		));

		$this->email = new ExoUI_EmailTextbox();

		$this->username = new ExoUI_Textbox('username');

		$this->password = new ExoUI_Password();

		$this->submit = new ExoUI_Submit('submit', array('value' => 'Edit User'));

		$this->add(array(
			$this->photo,
			$this->first_name,
			$this->last_name,
			$this->email,
			$this->username, 
			$this->password,
			$this->submit
		));
	}
}
