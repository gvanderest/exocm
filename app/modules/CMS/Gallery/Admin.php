<?php
/** 
 * CMS Gallery Administrator
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
namespace CMS\Gallery;
class Admin extends \CMS\Admin\Application
{
	const DEFAULT_TEMPLATE = 'default';

	public function index()
	{
		$request = $this->request;
		$action = @$request->arguments[1];
		$noun = @$request->arguments[2];
		$id = @$request->arguments[3];

		$method = implode('_', array($action, $noun));

		switch ($method)
		{
			case 'delete_gallery':
			case 'edit_gallery':
			case 'add_gallery':
			case 'delete_image':
				return $this->$method($id);

			case '_':
				$this->data['galleries'] = $galleries = $this->library->get_galleries();
				return $this->view->render('cms/admin/galleries/index');

			default:
				return $this->error();
		}
	}

	public function edit_gallery($id)
	{
		$this->data['images'] = $images = $this->library->get_gallery_images($id, array('sort' => 'rank ASC'));
		$this->data['gallery_form'] = $gallery_form = new Form('edit_gallery', array('images' => $images, 'application' => $this));
		$this->data['gallery'] = $gallery = $this->library->get_gallery($id);
		$this->data['image_form'] = $image_form = new ImageForm();
		$gallery_form->set_default_data($gallery);
		$image_form->filename->set_upload_path(\Exo\ASSETS_PATH . '/galleries/' . $id);

		if ($gallery_form->is_submitted())
		{
			if ($gallery_form->is_valid())
			{
				$data = $gallery_form->get_data();
				$result = $this->library->edit_gallery($id, $data);
				if ($result)
				{
					$this->redirect_to_self(array('galleries/edit/gallery/' . $id));
				} else {
					$this->errors->add('Database error while updating gallery');
				}
			}
		}

		if ($image_form->is_submitted())
		{
			if ($image_form->is_valid())
			{
				$data = $image_form->get_data();
				$result = $this->library->add_gallery_image($id, $data);
				if ($result)
				{
					$image_form->filename->move_file();
					$this->redirect_to_self(array('galleries/edit/gallery/' . $id));
				}	
			}		
		}

		return $this->view->render('cms/admin/galleries/edit_gallery');
	}

	public function add_gallery()
	{
		$this->data['form'] = $form = new CMS_GalleryAddForm(array('application' => $this));

		if ($form->is_submitted())
		{
			if ($form->is_valid())
			{
				$data = $form->get_data();
				$result = $this->library->add_gallery($data);
				if ($result)
				{
					$this->redirect_to_self(array('galleries'));
				} else {
					$this->errors->add('Database error while creating gallery');
				}
			}
		}

		return $this->view->render('cms/admin/galleries/add_gallery');
	}

	public function delete_gallery($id)
	{
		$this->library->delete_gallery($id);
		$this->redirect_to_self(array('galleries'));
	}

	public function delete_image($id)
	{
		$image = $this->library->get_gallery_image($id);
		if ($image)
		{		
			$this->library->delete_gallery_image($id);
			$this->redirect_to_self(array('galleries/edit/gallery/' . $image->gallery_id));
		}			
		$this->redirect_to_self(array('galleries'));
	}
}
