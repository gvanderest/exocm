<?php
/**
 * Example Application
 * @header
 */
class Example_Application
{
	/**
	 * Just an example 'Hello Word' application
	 * @param array $args (optinal)
	 */
	public function index($args)
	{
		print('Hello World!');

		echo '<pre>';
		var_dump($args);
		echo '</pre>';
	}
}
