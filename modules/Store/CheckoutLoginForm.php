<?php
/**
 * Checkout Login Form
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */

class Store_CheckoutLoginForm extends ExoUI_Form
{
	public function __construct($id = 'checkout_login', $options = array())
	{
		parent::__construct($id, $options);

		$this->username = new ExoUI_Textbox('username');

		$this->password = new ExoUI_Password('password');

		$this->submit = new ExoUI_Submit('submit');

		$this->add(array(
			$this->username,
			$this->password,
			$this->submit
		));
	}
}
