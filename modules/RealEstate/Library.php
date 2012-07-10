<?php
/**
 * Real Estate Model and Functionality
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
class RealEstate_Library extends Exo_Library
{
	/**
	 * Get all listings
	 * @return array
	 */
	public function get_listings($options = array()) 
	{ 
		return $this->db->select_all('realestate_listings', $options);
	}

	/**
	 * Get listing
	 * @param int $id
	 * @return object or NULL on failure
	 */
	public function get_listing($id) 
	{ 
		return $this->db->select_one('realestate_listings', $id);
	}

	/**
	 * Edit listing
	 * @param int $id
	 * @param mixed $data
	 * @return bool
	 */
	public function edit_listing($id, $data) 
	{ 
		return $this->db->update('realestate_listings', $id, $data);
	}

	/**
	 * Add listing
	 * @param mixed $data
	 * @return int id
	 */
	public function add_listing($data) 
	{ 
		return $this->db->insert('realestate_listings', $data);
	}

	/**
	 * Delete a listing
	 * @param int $id
	 * @return bool
	 */
	public function delete_listing($id) 
	{ 
		return $this->db->delete('realestate_listings', $id);
	}
}
