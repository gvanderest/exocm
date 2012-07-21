<?php
/**
 * Authentication Class
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
namespace Exo;
use Exo\Account\Model as AccountModel;
class Auth
{
	/**
	 * Get the account of the currently logged in user
	 * @param void
	 * @return mixed object if logged in, NULL if not
	 */
	public function get_user_account() 
	{ 
		$model = new AccountModel();
		$user_id = @$_SESSION['account_id'];
		if ($user_id)
		{
			return $model->get_account($user_id);
		}
		return NULL;
	}

	public function user_has_permission($permission) 
	{ 
		$account = $this->get_user_account();
		return $account !== NULL;
	}

	/**
	 * Authenticate the login credentials
	 * @param object $data
	 * @return bool
	 */
	public function authenticate($data)
	{
		$model = new AccountModel();
		$account = $model->get_account(array(
			'where' => array('username' => $data->username)
		));
		if (!$account || $account->password != $data->password)
		{
			return FALSE;
		}

		$_SESSION['account_id'] = $account->id;
		return $account;
	}

	/**
	 * De-Authenticate
	 * @param void
	 * @return bool
	 */
	public function deauthenticate()
	{
		unset($_SESSION['account_id']);
		return TRUE;
	}
}
