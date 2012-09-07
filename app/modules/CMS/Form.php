<?php
/**
 * A CMS form, extends to have library
 * @header
 */
namespace CMS;
class Form extends \ExoUI\Form
{
	public $library;

	public function __construct($id, $options = array())
	{
		parent::__construct($id, $options);
		$this->library = new Library();
	}
}
