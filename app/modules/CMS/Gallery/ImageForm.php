<?php
/**
 * CMS Gallery Image Add Form
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
namespace CMS\Gallery;
use CMS\Library;
use ExoUI\Upload;
use ExoUI\Submit;
class ImageForm extends \ExoUI\Form
{
	public function __construct($id = 'add_gallery_image', $options = array())
	{
		$this->library = new Library();

		parent::__construct($id, $options);

		$this->filename = new Upload('filename');

		$this->submit = new Submit('submit', array(
			'value' => 'Add Image'
		));

		$this->add(array(
			$this->filename,
			$this->submit
		));
	}
}
