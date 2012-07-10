<?php

if (!function_exists('breadcrumb'))
{
	/**
	 * Display a quick breadcrumb trail list
	 * @param array $crumbs keys are the text, values are the URLs
	 * @return string
	 */
	function breadcrumb($crumbs)
	{
		$output = '';
		if (count($crumbs) == 0)
		{
			return $output;
		}
		$output .= '<span class="breadcrumb">';
		$count = 0;
		foreach ($crumbs as $text => $url)
		{
			if (is_array($url))
			{
				$text = $url[0];
				$url = $url[1];
			}
			$count++;
			if ($count > 1)
			{
				$output .= '<span class="separator">';
				$output .= '&gt;';
				$output .= '</span>';
			}
			$output .= '<span class="crumb">';
			$output .= '<a href="' . $url . '">';
			$output .= $text;
			$output .= '</a>';
			$output .= '</span>';
		}
		$output .= '</span>';
		return $output;
	}
}
