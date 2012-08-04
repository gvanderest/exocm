<?php
/**
 * CMS Application
 * @header
 */
use Exo\Error\Response as Exo_NotFoundResponse;
class CMS_Application extends Exo\Application
{
	const DEFAULT_PAGE_SLUG = 'home';
	const DEFAULT_TEMPLATE = 'default';

	public $library;

	public function __construct($request)
	{
		parent::__construct($request);
		$this->library = new CMS_Library($this);
		$this->view = new CMS_View($this);
	}

	public function index()
	{
		$args = $this->request->arguments;

		// redirect to default page, if none is provided
		if (!array_key_exists(0, $args) || empty($args[0]))
		{
			self::redirect_to_self(array(self::DEFAULT_PAGE_SLUG));
		}

		$page = $this->library->get_page($args[0]);

		if (!$page)
		{
			try
			{
				$response = $this->render('cms/error');
				return $response;
			} catch (Exception $e) {
				return $this->error();
			}
		}

		$this->data['page'] = $response->data['page'] = $page;
		try
		{
			$response = $this->render('cms/' . $page->template, $response->data);
		} 
		// fall back to default template
		catch (Exception $e) {

			$response = $this->render('cms/' . self::DEFAULT_TEMPLATE, $response->data);
		}
		return $response;
	}
}
