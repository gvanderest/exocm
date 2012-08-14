<?php
$_cms_info = array();

$_cms_info['exodus'] = array(
	'title' => 'exodus <strong>media</strong>', 
	'subtitle' => 'Content Management System',
	'title_suffix' => 'Exodus Media',
	'company' => 'Exodus Media',
	'company_url' => 'http://exo.me/'
);

$_cms_info['koch'] = array(
	'title' => 'koch <em>ink</em>', 
	'subtitle' => 'Content Management System',
	'title_suffix' => 'koch ink',
	'company' => 'koch ink',
	'company_url' => 'http://www.kochink.com/',
	'custom_css' => 'koch.css'
);

$_cms_info['pulse'] = array(
	'title' => 'pulse<em>group</em>', 
	'title_suffix' => 'Pulse Group CMS',
	'company' => 'Pulse Group',
	'company_url' => 'http://www.pulsegroup.ca/',
	'custom_css' => 'pulse.css'
);

$_cms_info_index = 'exodus';
if ($_SERVER['HTTP_HOST'] == 'koch.exo.cm')
{
	$_cms_info_index = 'koch';
}

if (@$_GET['theme'] && array_key_exists(@$_GET['theme'], $_cms_info))
{
	$_cms_info_index = @$_GET['theme'];
}

foreach ($_cms_info[$_cms_info_index] as $key => $value)
{
	$field = '_cms_' . $key;
	$$field = $value;
}
