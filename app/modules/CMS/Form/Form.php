<?php
/**
 * CMS Contact Form Creation Form
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
namespace CMS\Form;
use CMS\Library;
use ExoUI\Textbox;
use ExoUI\HTML;
use ExoUI\Submit;
class Form extends \ExoUI\Form
{
	public $library;
	public $slug;
	public $name;
	public $emails;
	public $success_message;
	public $submit;

	public function __construct($id = 'add_form', $options = array())
	{
		parent::__construct($id, $options);

		$this->library = new Library();

		$this->slug = new Textbox('slug', array(
			'validations' => array('required')
		));

		$this->name = new Textbox('name', array(
			'validations' => array('required')
		));

		$this->emails = new Textbox('emails', array(
			'help' => 'List of email addresses to send form results to, separated by comma',
			'validations' => array('required')
		));

		$this->success_message = new HTML('success_message');

		$this->submit = new Submit('submit', array());

		$this->add(array(
			$this->name,
			$this->slug,
			$this->emails,
			$this->success_message,
			$this->submit
		));
	}
}
