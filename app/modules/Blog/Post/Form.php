<?php
/**
 * Blog Post Form
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
namespace Blog\Post;
use ExoUI\Textbox;
use ExoUI\Textarea;
use ExoUI\Date;
use ExoUI\Checkbox;
use ExoUI\Submit;
use ExoUI\HTML;
class Form extends \ExoUI\Form
{
	public $title;
	public $author;
	public $body;
	public $date_created;
	public $active;
	public $submit;

	public function __construct($id = 'post', $options = array())
	{
		$this->title = new Textbox('title');

		$this->author = new Textbox('author');

		$this->body = new HTML('body');

		$this->date_created = new Date('date_created');

		$this->active = new Checkbox('active');
		$this->active->add_option(1, 'Published');

		$this->submit = new Submit();

		$this->add(array(
			$this->title,
			$this->author,
			$this->body,
			$this->date_created,
			$this->active,
			$this->submit
		));
	}
}
