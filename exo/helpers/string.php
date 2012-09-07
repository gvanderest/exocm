<?php
/**
 * String Functions
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */

if (!function_exists('urlify'))
{
	/**
	 * Make a URL (slug) out of a string
	 * @param string $input
	 * @return string formatted string
	 */
	function urlify($string, $length = 50)
	{
		return substr(trim(preg_replace('#[^a-z]+#', '-', strtolower($string)), '-'), 0, $length);
	}
}

if (!function_exists('ellipsis'))
{
	/**
	 * Shorten a string to a certain length
	 * @param string $text
	 * @param int $length (optional) defaults to 50
	 * @param string $symbol (optional) ellipsis symbol, defaults to '...'
	 * @return string output
	 */
	function ellipsis($text, $length = 50, $symbol = '...')
	{
		if (strlen($text) > $length)
		{
			return substr($text, 0, $length) . $symbol;
		}
		return $text;
	}
}
