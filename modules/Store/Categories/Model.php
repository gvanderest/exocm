<?php
/**
 * Store Categories Model
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
class Store_Categories_Model extends Exo_Library
{
	public function get_categories($options = array())
	{
		return $this->db->select('store_categories', $options);
	}

	public function get_category($id)
	{
		return $this->db->select('store_categories', $id);
	}
}
