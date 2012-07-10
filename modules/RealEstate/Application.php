<?php
/**
 * Real Estate Application
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
class RealEstate_Application extends CMS_Application
{
	public function __construct($request)
	{
		parent::__construct($request);
		$this->library = new RealEstate_Library();
	}

	public function index()
	{
		$method = @$this->request->arguments[0];
		$id = @$this->request->arguments[1];

		if ($method)
		{
			return $this->$method($id);
		}

		$listings = $this->data['listings'] = $this->library->get_listings();
		return $this->view->render('realestate/listings/index');
	}

	public function details($id)
	{
		$this->data['listing'] = $listing = $this->library->get_listing($id);
		if (!$listing)
		{
			return new Exo_NotFoundResponse();
		}
		return $this->view->render('realestate/listings/details');
	}
}
