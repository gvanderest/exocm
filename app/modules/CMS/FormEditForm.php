<?php
/**
 * CMS Contact Form Edit Form
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
class CMS_FormEditForm extends CMS_FormAddForm
{
	public function __construct($id = 'edit_form', $options = array())
	{
		parent::__construct($id, $options);

		$this->submit->set_value('Edit Form');
	}
}
