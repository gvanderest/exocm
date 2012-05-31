<?php
/**
 * ExoSkeleton Exception
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
namespace Exo;
class Exception extends \Exception 
{ 
	public function __construct($message, Request $request = NULL)
	{
		parent::__construct($message);
		$this->request = $request;
	}

	public function getRequest()
	{
		return $this->request;
	}
}
