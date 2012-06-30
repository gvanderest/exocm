<?php
/**
 * File Manager Folder Creation Form
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
class CMS_FolderForm extends ExoUI_Form
{
	public function __construct($id = 'folder_form', $options = array())
	{
		parent::__construct($id);

		$this->folder = new ExoUI_Textbox('folder', array(
			'label' => 'Folder Name',
			'validations' => array('required')
		));

		$this->submit = new ExoUI_Submit();

		$this->add(array(
			$this->folder,
			$this->submit
		));
	}
}
