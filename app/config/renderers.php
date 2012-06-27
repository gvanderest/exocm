<?php
/**
 * Register Format Renderers
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
namespace Exo;

Renderer::add('xml', array(
	'class' => 'Exo\Renderer\XML'
));

Renderer::add('json', array(
	'class' => 'Exo\Renderer\JSON'
));

Renderer::add(array('html', 'default'), array(
	'class' => 'Exo\Renderer\HTML'
));


