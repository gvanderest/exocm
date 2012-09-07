<?php
/**
 * File Manager Folder Creation Form
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
namespace CMS\File;
use ExoUI\Textbox;
use ExoUI\Submit;
class FolderForm extends \ExoUI\Form
{
	public $folder;
	public $submit;

	public function __construct($id = 'folder_form', $options = array())
	{
		parent::__construct($id);

		$this->folder = new Textbox('folder', array(
			'label' => 'Folder Name',
			'validations' => array('required')
		));

		$this->submit = new Submit();

		$this->add(array(
			$this->folder,
			$this->submit
		));
	}
}
