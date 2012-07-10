<?php
/**
 * Real Estate Listings Administrator
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
class RealEstate_Listings_Admin extends CMS_Admin_Application
{
	public function __construct($request)
	{
		parent::__construct($request);
		$this->library = new RealEstate_Library();
	}

	public function delete($args)
	{
		$id = @$args[1];
		$result = $this->library->delete_listing($id);
		$this->redirect_to_module(array());
	}

	public function add()
	{
		$this->data['form'] = $form = new RealEstate_Listings_AddForm();

		if ($form->is_submitted())
		{
			if ($form->is_valid())
			{
				$data = $form->get_data();
				$result = $this->library->add_listing($data);
				if ($result)
				{
					$form->image->set_upload_path(EXO_ASSETS_PATH . '/listings/' . $result);
					$form->image->move_file();
					$this->redirect_to_module(array());
				}
			}
		}

		return $this->view->render('realestate/admin/listings/add');
	}

	public function edit($args)
	{
		$id = @$args[1];
		$this->data['listing'] = $listing = $this->library->get_listing($id);
		$this->data['form'] = $form = new RealEstate_Listings_EditForm();
		$form->set_default_data($listing);
		$form->image->set_upload_path(EXO_ASSETS_PATH . '/listings/' . $id);

		if ($form->is_submitted())
		{
			if ($form->is_valid())
			{
				$data = $form->get_data();
				$result = $this->library->edit_listing($id, $data);
				if ($result)
				{
					$form->image->move_file();
					$this->redirect_to_module(array());
				}
			}
		}

		return $this->view->render('realestate/admin/listings/edit');
	}

	public function index($args)
	{
		$this->data['listings'] = $listings = $this->library->get_listings();
		return $this->view->render('realestate/admin/listings/index');
	}
}
