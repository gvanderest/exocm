<?= 
$this->display_menu('main', array(
	'id' => 'topnav', 
	'active_class' => 'current',
	'page' => (isset($page) ? $page : NULL)
));
