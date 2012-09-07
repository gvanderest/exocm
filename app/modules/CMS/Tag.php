<?php
/**
 * CMS Tag
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
namespace CMS;
abstract class Tag
{
	public $application;

	public function __construct($application = NULL)
	{
		$this->application = $application;
	}
}
