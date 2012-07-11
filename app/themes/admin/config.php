<?php
$_cms_info = array(
	'exodus' => array(
		'title' => 'exo<strong>cm</strong>', 
		'subtitle' => 'Content Management System',
		'title_suffix' => 'ExoCM',
		'company' => 'Exodus Media',
		'company_url' => 'http://exo.me/'
	)
);

$_cms_info_index = 'exodus';
foreach ($_cms_info[$_cms_info_index] as $key => $value)
{
	$field = '_cms_' . $key;
	$$field = $value;
}
