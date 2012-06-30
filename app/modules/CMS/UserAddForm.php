<?php
/**
 * Add User Form
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
class CMS_UserAddForm extends CMS_UserEditForm
{
	public function __construct($id = 'edit_user', $options = array())
	{
		parent::__construct($id, $options);

		$this->submit->set_value('Add User');
	}
}
