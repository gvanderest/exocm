<?php
/**
 * CMS File Manager Upload Form
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
namespace CMS\File;
use ExoUI\Upload;
use ExoUI\Textbox;
use ExoUI\Submit;
class UploadForm extends \ExoUI\Form
{
	public $file;
	public $name;
	public $submit;

	public function __construct($id = 'file_upload_form', $options = array())
	{
		parent::__construct($id);

		$this->file = new Upload('file', array(
			'label' => 'Upload File'
		));

		$this->name = new Textbox('name', array(
			'label' => 'Filename',
			'help' => 'If you wish to name the file something else, type it here'
		));

		$this->submit = new Submit();

		$this->add(array(
			$this->file,
			$this->name,
			$this->submit
		));
	}
}
