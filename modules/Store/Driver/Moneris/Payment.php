<?php
/**
 * Moneris Payment Driver
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
class Store_Driver_Moneris_Payment
{
	public $application;

	public function __construct($application)
	{
		$this->application = $application;
	}

	public function get_payment_form()
	{
		return new Store_Driver_Moneris_PaymentForm();
	}

	public function process_payment($order)
	{
		return TRUE;
	}

	public function process_response($order)
	{
	}
}
