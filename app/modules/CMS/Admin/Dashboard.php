<?php
/**
 * CMS Admin Dashboard
 * @header
 */
namespace CMS\Admin;
class Dashboard extends Application
{
	public function index()
	{
		return $this->render('cms/admin/dashboard');
	}
}
