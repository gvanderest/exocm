<?php
/**
 * Edit a CMS Page
 * @header
 */
namespace CMS\Page;
use ExoUI\Submit;
use ExoUI\Textbox;
use ExoUI\HTML as HTMLEditor;
use ExoUI\Textarea;
use ExoUI\Select;
use ExoUI\Checkbox;
use CMS\MenuPageSelector;
class Form extends \CMS\Form
{
	public function __construct($id = 'edit_page', $options = array())
	{
		parent::__construct($id, $options);

		$this->submit = new Submit();

		$this->title = new Textbox('title', array(
			'validations' => array('required')
		));

		$this->slug = new Textbox('slug', array(
			'help' => "SEO friendly URL string, e.g.: 'home' or 'about-us'",
			'validations' => array('slug', 'required')
		));

		$this->content = new HTMLEditor('content', array(
			'toolbar' => 'extended',
			'width' => 960
		));

		$this->template = new Select('template');
		foreach ($this->library->get_templates() as $template)
		{
			$this->template->add_option($template->name, ucwords($template->name));
		}

		$this->menu_pages = new MenuPageSelector('menu_pages', array(
			'page' => array_key_exists('page', $options) ? $options['page'] : NULL,
			'label' => 'Menus'
		));

		$this->active = new Checkbox('active', array(
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
