<?php
$_cms_info = array();

$_cms_info['exodus'] = array(
	'title' => 'exo<strong>cm</strong>', 
	'subtitle' => 'Content Management System',
	'title_suffix' => 'ExoCM',
	'company' => 'Exodus Media',
	'company_url' => 'http://exo.me/'
);

$_cms_info['koch'] = array(
	'title' => 'koch ink <em>design</em>', 
	'subtitle' => 'Content Management System',
	'title_suffix' => 'koch ink',
	'company' => 'koch ink',
	'company_url' => 'http://www.kochink.com/',
	'custom_css' => 'koch.css'
);

$_cms_info_index = 'koch';
foreach ($_cms_info[$_cms_info_index] as $key => $value)
{
	$field = '_cms_' . $key;
	$$field = $value;
}
