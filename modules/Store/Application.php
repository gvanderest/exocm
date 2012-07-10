<?php
/**
 * Store Application
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */

class Store_Application extends CMS_Application
{
	public function __construct($request)
	{
		$this->view = new Store_View($this);
		parent::__construct($request);

		$categories_model = new Store_Categories_Model();
		$this->data['categories'] = $categories_model->get_categories();
	}

	public function index($request)
	{
		switch (@$request->arguments[0])
		{
		case 'category': return $this->get_category(@$request->arguments[1]); break;
		case 'product': return $this->get_product(@$request->arguments[1]); break;
		case 'checkout': return $this->get_checkout(); break;
		case 'payment': return $this->get_payment(); break;
		case 'response': return $this->get_response(@$request->arguments[1]); break;
		case 'success': return $this->get_success(); break;
		case 'failure': return $this->get_failure(@$request->arguments[1]); break;
		case 'cart': return $this->get_cart(@$request->arguments[1], @$request->arguments[2]); break;
		case '': return $this->get_index(); break;

		default: 
			return $this->error();
		}
	}

	public function get_cart($action, $id)
	{
		$cart_model = new Store_Cart_Model();
		$this->data['products'] = $products = $cart_model->get_cart_products();

		return $this->view->render('store/cart');
	}

	public function get_product($slug)
	{
		$products_model = new Store_Products_Model();
		$this->data['product'] = $product = $products_model->get_product($slug);
		if (!$product) { return $this->error(); }

		$category_model = new Store_Categories_Model();

		$this->data['form'] = $form = new Store_Products_AddToCartForm();
		$form->skus->add_option('ABC123', 'Herp, Derp, Nerp');

		if ($form->is_submitted() && $form->is_valid())
		{
			$data = $form->get_data();

			$cart_model = new Store_Cart_Model();
			$cart_model->add_cart_entry($data->sku, $data->quantity);
		}

		return $this->view->render('store/product');
	}

	public function get_category($slug)
	{
		$category_model = new Store_Categories_Model();
		$this->data['category'] = $category = $category_model->get_category($slug);
		if (!$category) { return $this->error(); }

		$products_model = new Store_Products_Model();
		$this->data['products'] = $products = $products_model->get_products_by_category($category->id);

		return $this->view->render('store/category');
	}

	public function get_checkout()
	{
		$cart_model = new Store_Cart_Model();
		$this->data['products'] = $products = $cart_model->get_cart_products();

		// authentication required
		if (!$this->user)
		{
			$this->data['login_form'] = $login_form = new Store_CheckoutLoginForm();
			if ($login_form->is_submitted())
			{
				$data = $login_form->get_data();

				$this->user = $this->auth->authenticate($data);

				$this->redirect_to_self(array('checkout'));
			}
			return $this->view->render('store/login');
		}

		// TODO: find shipping addresses
		// TODO: find billing addresses

		$this->redirect_to_self(array('payment'));
	}

	public function get_payment()
	{
		// if there is no user
		// TODO: // or there is no billing address
		// TODO: // or there is no shipping address
		// TODO: // or there is no order
		// redirect back to checkout
		if (!$this->user)
		{
			$this->redirect_to_self(array('checkout'));
		}

		$driver_class = 'Store_Driver_Moneris_Payment';
		$driver = new $driver_class($this);

		$this->data['payment_form'] = $payment_form = $driver->get_payment_form();

		// fixme
		$this->data['order'] = $order = new stdClass();

		if ($payment_form->is_submitted())
		{
			if ($payment_form->is_valid())
			{
				// TODO: generate order entirely as copy, duplicate information as receipt
				// TODO: move onward(?)
				$result = $driver->process_payment($order);

				// TODO: IF IT GETS TO THIS POINT, THAT MEANS THIS IS AN API-BASED PROCESSOR
				$this->process_payment($result);
			}
		}

		return $this->view->render('store/payment');
	}

	/**
	 * Success
	 */
	public function process_payment($response)
	{
		// TODO: order was good, everything is good!
		// TODO: if order is paid in full, mark order as paid in full
		// TODO: create payment entry, so the account has a record
		// TODO: clear cart

		if (!$response)
		{
			$this->redirect_to_self(array('failure', 'unknown'));
		}

		$this->redirect_to_self(array('success'));
	}

	public function get_failure($reason)
	{
		$this->data['reason'] = $reason;
		return $this->view->render('store/failure');
	}

	public function get_success()
	{
		return $this->view->render('store/success');
	}

	public function get_response($driver_id)
	{
		// FIXME: THIS IS REALLY BAD, THE ACCOUNT IS TIMED OUT AND SO THE ORDER IS LIKELY ALSO TIMED OUT
		// FIXME: or there is no order..
		if (!$this->user)
		{
			$this->redirect_to_self(array('failure', 'timeout'));
		}

		$driver_class = 'Store_Driver_Moneris_Payment';
		$driver = new $driver_class($this);

		$result = $driver->process_result($order);
		$this->process_payment($result);
	}

	public function get_index()
	{
		$products_model = new Store_Products_Model();
		$this->data['products'] = $products = $products_model->get_products(array(
			'featured' => 1
		));

		return $this->view->render('store/index');
	}
}
