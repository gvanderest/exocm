<?php
/**
 * Real Estate Listing Add Form
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
class RealEstate_Listings_AddForm extends RealEstate_Listings_EditForm
{
	public function __construct($id = 'add_form', $args = array())
	{
		parent::__construct($id, $args);

		$this->submit->set_value('Add Listing');
	}
}
