<?php
/**
 * Store View
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
class Store_View extends CMS_View
{
	public function display_product_image($product)
	{
		return '{image}';
	}

	public function display_price($amount)
	{
		return '$' . number_format($amount, 2);
	}
}
