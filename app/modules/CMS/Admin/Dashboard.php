<?php
/**
 * CMS Admin Dashboard
 * @header
 */

class CMS_Admin_Dashboard extends CMS_Admin_Application
{
	public function init($request)
	{
		return $this->view->render('cms/admin/dashboard');
	}
}
