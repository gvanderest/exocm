<?php
/**
 * CMS Application
 * @header
 */
namespace CMS;
use Exo\Response;
use CMS\Library;
use CMS\View;
class Application extends \Exo\Application
{
	const DEFAULT_PAGE_SLUG = 'home';
	const DEFAULT_TEMPLATE = 'default';

	public $library;

	public function __construct($request)
	{
		parent::__construct($request);
		$this->library = new Library($this);
		$this->view = new View($this);
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
				$response->http_code = Response::HTTP_NOT_FOUND_CODE;
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
