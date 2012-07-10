<?php
/**
 * Form to add items to a cart
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
class Store_Products_AddToCartForm extends ExoUI_Form
{
	public function __construct($id = 'add_to_cart', $options = array())
	{
		parent::__construct($id, $options);

		$this->skus = new ExoUI_Select('sku', array(
			'label' => 'Select Product',
			'validations' => array('required')
		));
		$this->skus->add_option(NULL, 'Select Product..');

		$this->quantity = new ExoUI_Textbox('quantity');

		$this->submit = new ExoUI_Submit('submit', array(
			'value' => 'Add To Cart'
		));

		$this->add(array(
			$this->skus,
			$this->quantity,
			$this->submit
		));
	}
}
