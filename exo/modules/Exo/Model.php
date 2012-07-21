<?php
/**
 * Model
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
namespace Exo;
class Model extends Entity
{
	/**
	 * The application using the model
	 * @var Exo\Application
	 */
	protected $application;

	public function __construct($application = NULL)
	{
		$this->application = $application;
	}
}
