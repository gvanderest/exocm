ExoSkeleton PHP 5.3 Framework
=============================

Features
--------
- Entity passthrough class for property definition
- RESTful application interfacing
- Basic templating inclusion via View class
- Routing definition and loading and application arguments
- Environment definition and loading
- Database interface classes extending PDO

Coming Soon
-----------
- Formatted data output (xml, json, etc.)
- Caching of requests on a per-application basis

Coming Maybe
------------
- Basic authentication support

Dreams
------
- Event handling and proxying

Affiliated Projects
-------------------
- Existence PHP ORM - http://exodus.io/orm
- ExoTest Unit Testing Framework - http://exodus.io/test
- ExoUI Form/UI Toolkit - http://exodus.io/ui

HOW TO USE THIS DAMN THING
--------------------------
Add route to app/config/routes.php:

	Route::add('example', array(
		'pattern' => '/example',
		'class' => 'Example\Application',
		'method' => 'hello_world'
	));

Create a new class in app/modules/Example/Application.php

	namespace Example;
	class Application
	{
		public function hello_world()
		{
			return 'Hello World';
		}
	}
