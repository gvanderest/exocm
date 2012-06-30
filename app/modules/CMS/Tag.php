<?php
/**
 * CMS Tag
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
abstract class CMS_Tag
{
	public $application;

	public function __construct($application = NULL)
	{
		$this->application = $application;
	}
}
