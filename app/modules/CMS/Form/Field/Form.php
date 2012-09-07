<?php
/**
 * CMS Form Field Add Form
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
namespace CMS\Form\Field;
use CMS\Library;
use ExoUI\Textbox;
use ExoUI\Select;
use ExoUI\Submit;
class Form extends \ExoUI\Form
{
	public $library;
	public $name;
	public $rank;
	public $type;
	public $submit;

	public function __construct($id = 'add_field', $options = array())
	{
		$this->library = new Library();
		
		$this->name = new Textbox('name', array(
			'validations' => array('required')
		));

		$this->rank = new Textbox('rank', array(
			'validations' => array('required')
		));

		$this->type = new Select('type', array(
			'validations' => array('required')
		));
		foreach ($this->library->get_contact_form_field_types() as $type)
		{
			$this->type->add_option($type->name, $type->id);
		}

		$this->submit = new Submit('submit');

		$this->add(array(
			$this->name,
			$this->rank,
			$this->type,
			$this->submit
		));
	}	
}
