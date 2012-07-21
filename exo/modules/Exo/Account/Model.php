<?php
/**
 * Accounts Model
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
namespace Exo\Account;
class Model extends \Exo\Database\Model
{
	/**
	 * Get an account (wrapper for get_accounts)
	 * @param mixed[optional] $id or slug
	 * @return mixed
	 * @see get_accounts()
	 */
	public function get_account($id) { return $this->get_accounts($id); }

	/**
	 * Get accounts
	 * @param mixed[optional] $id or slug
	 * @return mixed
	 */
	public function get_accounts($options = array())
	{
		return $this->db->select_one('users', $options);
	}
}
