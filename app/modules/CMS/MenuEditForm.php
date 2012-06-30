<?php
/**
 * CMS Menu Edit Form
 * @header
 */
class CMS_MenuEditForm extends CMS_MenuAddForm
{
	public function __construct($id = 'menu_edit_form', $options = array())
	{
		parent::__construct($id, $options);

		$this->submit->set_value('Edit Menu');
	}
}
