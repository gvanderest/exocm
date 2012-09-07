<?php
/**
 * CMS Gallery Creation Form
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
namespace CMS\Gallery;
use CMS\Library;
use ExoUI\Textbox;
use ExoUI\Slug;
use ExoUI\Submit;
class Form extends \ExoUI\Form
{
	public $library;
	public $name;
	public $slug;
	public $submit;

	public function __construct($id = 'add_form', $options = array())
	{
		parent::__construct($id, $options);

		$this->library = new Library();

		$this->name = new Textbox('name');

		$this->slug = new Slug('slug', array(
			'source' => $this->name
		));

		$this->submit = new Submit('submit', array(
			'value' => 'Add Gallery'
		));

		$this->add(array(
			$this->name,
			$this->slug,
			$this->submit
		));
	}
}
