<?php
/**
 * Blog Category Admin
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
namespace Blog\Category;
use CMS_Admin_Application as Application;
class Admin extends Application
{
	public static $restful = TRUE;

	public function get_index()
	{
		return $this->render('blog/category/admin/index');
	}
}
