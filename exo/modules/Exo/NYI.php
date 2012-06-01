<?php
/**
 * Not Yet Implemented Exception
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */

namespace Exo;
class NYI extends \Exception
{
	public function __construct()
	{
		parent::__construct('Not Yet Implemented');
	}
}
