<?php
/**
 * CMS Admin Login Form
 * @header
 */
namespace CMS\Admin;
use ExoUI\Textbox;
use ExoUI\Password;
use ExoUI\Checkbox;
use ExoUI\Submit;
class LoginForm extends \ExoUI\Form
{
	public $username;
	public $password;
	public $remember;
	public $submit;

	public function __construct()
	{
		parent::__construct('login');

		$this->username = new Textbox('username', array(
			'validations' => array('required')
		));

		$this->password = new Password('password', array(
			'validations' => array('required')
		));

		$this->remember = new Checkbox('remember', array(
			'options' => array('1' => 'Remember Me'),
			'label' => ''
		));

		$this->submit = new Submit('submit', array(
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
