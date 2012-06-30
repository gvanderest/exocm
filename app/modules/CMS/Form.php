<?php
/**
 * A CMS form, extends to have library
 * @header
 */

class CMS_Form extends ExoUI_Form
{
	public $library;

	public function __construct($id, $options = array())
	{
		parent::__construct($id, $options);
		$this->library = new CMS_Library();
	}
}
