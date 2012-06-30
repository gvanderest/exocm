<?php
/**
 * Edit a CMS Page
 * @header
 */

class CMS_PageEditForm extends CMS_Form
{
	public function __construct($id = 'edit_page', $options = array())
	{
		parent::__construct($id, $options);

		$this->submit = new ExoUI_Submit();

		$this->title = new ExoUI_Textbox('title', array(
			'validations' => array('required')
		));

		$this->slug = new ExoUI_Textbox('slug', array(
			'help' => "SEO friendly URL string, e.g.: 'home' or 'about-us'",
			'validations' => array('slug', 'required')
		));

		$this->content = new ExoUI_HTMLEditor('content', array(
			'toolbar' => 'extended'
		));

		$this->template = new ExoUI_Select('template');
		foreach ($this->library->get_templates() as $template)
		{
			$this->template->add_option(ucwords($template->name), $template->name);
		}

		$this->menu_pages = new CMS_MenuPageSelector('menu_pages', array(
			'page' => array_key_exists('page', $options) ? $options['page'] : NULL,
			'label' => 'Menus'
		));

		$this->active = new ExoUI_Checkbox('active', array(
			'options' => array(1 => 'Active')
		));

		$this->add(array(
			$this->template,
			$this->title,
			$this->slug,
			$this->content,
			$this->active,
			$this->menu_pages,
			$this->submit
		));
	}
}
