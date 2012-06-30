<?php
/**
 * CMS File Manager Upload Form
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
class CMS_FileUploadForm extends ExoUI_Form
{
	public function __construct($id = 'file_upload_form', $options = array())
	{
		parent::__construct($id);

		$this->file = new ExoUI_Upload('file', array(
			'label' => 'Upload File'
		));

		$this->name = new ExoUI_Textbox('name', array(
			'label' => 'Filename',
			'help' => 'If you wish to name the file something else, type it here'
		));

		$this->submit = new ExoUI_Submit();

		$this->add(array(
			$this->file,
			$this->name,
			$this->submit
		));
	}
}
