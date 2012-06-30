<?php
/**
 * CMS Page Add Form
 * @header
 */
class CMS_PageAddForm extends CMS_PageEditForm
{
	public function __construct($id = 'add_page', $options = array())
	{
		parent::__construct($id, $options);

		$this->submit->set_value('Add Page');
	}
}
