<?php
/**
 * User Edit Form
 * @header
 */
namespace CMS\User;
use ExoUI\Upload;
use ExoUI\Textbox;
use ExoUI\Email;
use ExoUI\Password;
use ExoUI\Submit;
class Form extends \ExoUI\Form
{
	public $user;
	public $photo;
	public $first_name;
	public $last_name;
	public $email;
	public $username;
	public $password;
	public $submit;

	public function __construct($id = 'edit', $options = array())
	{
		parent::__construct($id, $options);

		if (array_key_exists('user', $options))
		{
			$this->user = $options['user'];
		}

		$this->photo = new Upload('photo');

		$this->first_name = new Textbox('first_name', array(
			'validations' => array('required')
		));

		$this->last_name = new Textbox('last_name', array(
			'validations' => array('required')
		));

		$this->email = new Email();

		$this->username = new Textbox('username');

		$this->password = new Password();

		$this->submit = new Submit('submit', array('value' => 'Edit User'));

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
