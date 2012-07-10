<?php
/**
 * Store Products Model
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
class Store_Products_Model extends Exo_Library
{
	public function get_products_by_category($id)
	{
		$ids = $this->db->select_field('product_id', 'store_category_products', array('category_id' => $id));
		return $this->db->select('store_products', array('id' => $ids));
	}

	public function get_product_combos($options)
	{
		return $this->db->select('(
			SELECT P.*, 
				S.id combo_id,
				S.sku combo_sku,
				S.name combo_name,
				S.price combo_price,
				S.weight combo_weight
			FROM store_skus S
			LEFT JOIN store_products P ON S.product_id = P.id
		) Z', $options);
	}

	public function get_product_combo($id)
	{
		return $this->get_products_combo($id);
	}

	public function get_products($options)
	{
		return $this->db->select('store_products', $options);
	}

	public function get_product($id)
	{
		return $this->get_products($id);
	}

	public function add_product($data)
	{
		return $this->db->insert('store_products', $data);
	}

	public function edit_product($id, $data)
	{
		return $this->db->update('store_products', $id, $data);
	}

	public function delete_product($id)
	{
		return $this->db->delete('store_products', $id);
	}

	public function add_product_type($data) { return $this->db->insert('store_product_type', $data); }
	public function delete_product_type($id) { return $this->db->delete('store_product_type', $data); }
	public function edit_product_type($id, $data) { return $this->db->update('store_product_type', $id, $data); }
	public function get_product_type($id) { return $this->db->select('store_product_type', $id); }
}
