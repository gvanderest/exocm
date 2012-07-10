<?php
/**
 * Realty Listings Edit Form
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */

class RealEstate_Listings_EditForm extends ExoUI_Form
{
	public function __construct($id = 'edit_listing', $args = array())
	{
		parent::__construct($id, $args);

		$this->name = new ExoUI_Textbox('name', array(
			'validations' => array('required')
		));
		
		$this->description = new ExoUI_Textarea('description');

		$this->price = new ExoUI_CurrencyTextbox('price', array('cents' => FALSE));

		$this->image = new ExoUI_Upload('image');
		$this->image->set_temp_path(EXO_TEMP_PATH);

		$this->submit = new ExoUI_Submit('submit', array(
			'value' => 'Edit Listing'
		));

		$this->add(array(
			$this->name,
			$this->description,
			$this->price,
			$this->image,
			$this->submit
		));
	}
}
