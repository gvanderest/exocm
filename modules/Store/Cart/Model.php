<?php
/**
 * Store Cart Model
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
class Store_Cart_Model extends Exo_Model
{
	public $session;

	public function __construct()
	{
		parent::__construct();

		$this->session = new Exo_Session('store_cart');
		if (!is_array($this->session->products))
		{
			$this->session->products = array();
		}
	}

	/**
	 * Get the entries in the cart
	 * @param void
	 * @return array two-dimensional array with sku and quantity keys
	 */
	public function get_cart_entries()
	{
		if (!is_array($this->session->products))
		{
			$this->session->products = array();
		}
		foreach ($this->session->products as $index => $product)
		{
			if ($product <= 0)
			{
				unset($this->session->products[$index]);
			}
		}
		return $this->session->products;
	}

	/**
	 * Remove an entry from the cart
	 * @param string $sku
	 * @return void
	 */
	public function remove_cart_entry($sku)
	{
		unset($this->session->products[$sku]);
	}

	/**
	 * Clear all cart entries
	 * @param void
	 * @return void
	 */
	public function clear_cart_entries()
	{
		$this->session->products = array();
	}

	/**
	 * Add an entry to the shopping cart
	 * @param string $sku
	 * @param int $quantity
	 * @return void
	 */
	public function add_cart_entry($sku, $quantity)
	{
		if (!is_array($this->session->products) || !array_key_exists($sku, $this->session->products))
		{
			$this->session->products[$sku] = 0;
		}
		$this->session->products[$sku] += $quantity;
	}

	/**
	 * Get a cart and all its contents
	 * @param void
	 * @return array of objects
	 */
	public function get_cart_products()
	{
		$entries = $this->get_cart_entries();

		$products_model = new Store_Products_Model();
		$products = $products_model->get_product_combos(array(
			'where' => array('combo_sku' => array_keys($entries))
		));

		foreach ($products as $index => $product)
		{
			$product->quantity = $entries[$product->combo_sku];
			$product->total_price = $product->quantity * $product->combo_price;
			$product->total_weight = $product->quantity * $product->combo_weight;
		}

		return $products;
	}
}
