<?php
/**
 * CMS Gallery Image Add Form
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
class CMS_GalleryImageAddForm extends ExoUI_Form
{
	public function __construct($id = 'add_gallery_image', $options = array())
	{
		$this->library = new CMS_Library();

		parent::__construct($id, $options);

		$this->filename = new ExoUI_Upload('filename');

		$this->submit = new ExoUI_Submit('submit', array(
			'value' => 'Add Image'
		));

		$this->add(array(
			$this->filename,
			$this->submit
		));
	}
}
