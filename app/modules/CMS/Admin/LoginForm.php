<?php
/**
 * CMS Admin Login Form
 * @header
 */

class CMS_Admin_LoginForm extends ExoUI_Form
{
	public function __construct()
	{
		parent::__construct('login');

		$this->username = new ExoUI_Textbox('username', array(
			'validations' => array('required')
		));

		$this->password = new ExoUI_Password('password', array(
			'validations' => array('required')
		));

		$this->remember = new ExoUI_Checkbox('remember', array(
			'options' => array('1' => 'Remember Me'),
			'label' => ''
		));

		$this->submit = new ExoUI_Submit('submit', array(
			'value' => 'Login'
		));

		$this->add(array(
			$this->username,
			$this->password,
			$this->remember,
			$this->submit
		));
	}	
}
