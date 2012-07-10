<?php
/**
 * Authentication-Based Application
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
namespace Exo\Auth;
use Exo\Auth as Auth;
class Application extends \Exo\Application
{
	protected $auth;

	public function __construct($request)
	{
		parent::__construct($request);
		$this->auth = new Auth();
		$this->account = $this->auth->get_user_account();
	}
}
