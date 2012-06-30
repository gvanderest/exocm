<?php
/**
 * CMS Gallery Creation Form
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
class CMS_GalleryAddForm extends ExoUI_Form
{
	public $library;

	public function __construct($id = 'add_form', $options = array())
	{
		parent::__construct($id, $options);

		$this->library = new CMS_Library();

		$this->name = new ExoUI_Textbox('name');

		$this->slug = new ExoUI_SlugTextbox('slug', array(
			'source' => $this->name
		));

		$this->submit = new ExoUI_Submit('submit', array(
			'value' => 'Add Gallery'
		));

		$this->add(array(
			$this->name,
			$this->slug,
			$this->submit
		));
	}
}
