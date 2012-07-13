<?php
/**
 * CMS Administrative Application
 * @header
 */
use CMS_Application as Exo_Application;
use Exo\Auth as Exo_Auth;
class CMS_Admin_Application extends Exo\Auth\Application
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

		$this->library = new CMS_Library($this);
		$this->view = new CMS_Admin_View($this);

		$this->account = $this->auth->get_user_account();
	}

	public function init()
	{
		$method = @$this->request->arguments[1];
		if (!$method) { $method = self::DEFAULT_METHOD; }
		$args = array_slice($this->request->arguments, 1);
		if (method_exists($this, $method))
		{
			return ($this->$method($args));
		}
		return new Exo_NotFoundResponse();
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
		$request = $this->request;
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
		return $this->admin($request->arguments[0]);
	}

	public function logout()
	{
		$this->auth->deauthenticate();
		$this->redirect_to_self(array(self::LOGIN_ARGUMENT));
	}

	public function login()
	{
		// display login form
		$this->data['form'] = $form = new CMS_Admin_LoginForm();

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

	public function admin($slug)
	{
		// load the appropriate admin application
		$application = $this->library->get_application_by_slug($slug);

		if ($application)
		{
			$class = $application->class;
			$object = new $class($this->request);
			$object->data['title'] = $application->name;
			return $object->init($this->request);
		}

		return $this->error();
	}
}
