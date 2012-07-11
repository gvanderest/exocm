<?php
/**
 * XML Renderer
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
namespace Exo\Renderer;

use Exo\Response;
use Exo\Renderer;
use SimpleXMLElement;

class XML extends Renderer
{
	protected $view;

	public function render($data)
	{
		$response = new Response();
		$response->content_type = 'text/xml';


		$output = '';
		$output .= '<?xml version="1.0" encoding="utf-8" ?>' . "\n";
		$output .= '<response>' . "\n";
		$output .= $this->recurse_xml($data);
		$output .= '</response>';

		$response->content = $output;

		return $response;
	}

	public function recurse_xml($array, $indent = 1, $recursion_proof = array())
	{
		$output = '';
		foreach ($array as $key => $value)
		{
			if (@in_array($value, $recursion_proof)) { continue; }
			$recursion_proof[] = $value;

			if (is_numeric($key)) { $key = 'element_' . $key; }

			$output .= sprintf('%s<%s>', 
				str_repeat('  ', $indent),
				$key
			);
			if (is_array($value) || is_object($value))
			{
				$output .= "\n";
				$output .= $this->recurse_xml($value, $indent + 1, $recursion_proof);
				$output .= str_repeat('  ', $indent);
			} else {
				if (is_numeric($value))
				{
					$output .= $value;
				} else {
					$output .= '<![CDATA[' . $value . ']]>';
				}
			}
			$output .= sprintf('</%s>', $key) . "\n";
		}
		return $output;
	}
}
