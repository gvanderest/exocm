<?php
/**
 * Moneris Payment Form
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
class Store_Driver_Moneris_PaymentForm extends ExoUI_Form
{
	public function __construct($id = 'payment', $options = array())
	{
		parent::__construct($id, $options);

		$this->card_number = new ExoUI_Textbox('card_number', array(
			'validations' => array('required', 'integer')
		));

		$this->full_name = new ExoUI_Textbox('full_name', array(
			'validations' => array('required')
		));

		$this->submit = new ExoUI_Submit('submit', array(
			'value' => 'Process Payment'
		));

		$this->add(array(
			$this->card_number,
			$this->full_name,
			$this->submit
		));
	}
}
