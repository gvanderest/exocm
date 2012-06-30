<?php
/**
 * CMS Gallery Edit Form
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
class CMS_GalleryEditForm extends CMS_GalleryAddForm
{
	public function __construct($id = 'edit_gallery', $options = array())
	{
		parent::__construct($id, $options);

		$this->images = new CMS_UI_GalleryImageManager('images', array(
			'value' => $options['images']
		));
		$this->add($this->images);

		$submit = $this->objects['submit'];
		unset($this->objects['submit']);
		$this->add($submit);

		$this->submit->set_value('Edit Gallery');
	}
}
