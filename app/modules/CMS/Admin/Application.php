<?php
/**
 * CMS Administrative Application
 * @header
 */
namespace CMS\Admin;
use Exo\Auth;
use CMS\Library;
use CMS\Admin\LoginForm;
class Application extends \Exo\Auth\Application
{
	const FORGOTTEN_ARGUMENT = 'forgotten';
	const LOGIN_ARGUMENT = 'login';
	const LOGOUT_ARGUMENT = 'logout';
	const DEFAULT_ARGUMENT = 'dashboard';
	const DEFAULT_METHOD = 'index';

	public $account;
	protected $library;

	public function __construct($request)
	{
		parent::__construct($request);

		$this->library = new Library($this);
		$this->view = new View($this);

		$this->account = $this->auth->get_user_account();
	}

	public function url_to_module($args = array())
	{
		$array = array_merge(array($this->request->arguments[0]), $args);
		return $this->url_to_self($array);
	}

	public function redirect_to_module($args = array())
	{
		$array = array_merge(array($this->request->arguments[0]), $args);
		return $this->redirect_to_self($array);
	}

	public function forgotten()
	{
		throw new Exception('Not yet implemented');
	}

	public function index()
	{
		$request = clone $this->request;
		$admin_permission = $this->auth->user_has_permission('admin');

		// if you do not have permission, redirect to login
		if (!$admin_permission)
		{
			if (in_array(@$request->arguments[0], array(self::LOGIN_ARGUMENT, self::FORGOTTEN_ARGUMENT)))
			{
				$method = $request->arguments[0];
				return $this->$method();
			} else {
				$args = array(self::LOGIN_ARGUMENT, 'r' => $this->url_to_self($this->request->arguments));
				$this->redirect_to_self($args);
			}
		}

		// redirect user to default admin panel
		if (!array_key_exists(0, $request->arguments) || empty($request->arguments[0]))
		{
			$this->redirect_to_self(array(self::DEFAULT_ARGUMENT));
		}

		// the only action that can be performed is logout
		if ($request->arguments[0] == self::LOGOUT_ARGUMENT)
		{
			return $this->logout();
		}

		// get the requested admin panel by popping the first argument off
		$slug = @$request->arguments[0];
		$application = $this->library->get_application_by_slug($slug);

		if ($application)
		{
			$request = clone $this->request;
			$method = @$request->arguments[1];
			$request->arguments = array_slice($request->arguments, 1);

			$class = $application->class;
			$object = new $class($this->request);
			$object->data['title'] = $application->name;


			// always use index()
			$method = self::DEFAULT_METHOD; 
			//if (isset($object::$restful) && @$object::$restful) { $method = $object->request->method . '_' . $method; }

			if (method_exists($object, $method))
			{
				return $object->$method();
			}
		}
		return $this->error();
	}

	public function logout()
	{
		$this->auth->deauthenticate();
		$this->redirect_to_self(array(self::LOGIN_ARGUMENT));
	}

	public function login()
	{
		// display login form
		$this->data['form'] = $form = new LoginForm();

		$this->errors->add($form->get_errors());

		// authenticate if attempted
		if ($form->is_submitted() && $form->is_valid())
		{
			// FIXME: be real data
			$data = $form->get_data();
			$result = $this->auth->authenticate($data);

			if ($result)
			{
				if (@$_GET['r'])
				{
					$this->redirect(@$_GET['r']);
				} else {
					$this->redirect_to_self(array());
				}

			} else {
				
				$this->errors->add('The login information provided is invalid');
				$form->set_valid(FALSE);
			}
		}

		return $this->render('cms/admin/login');
	}
}
