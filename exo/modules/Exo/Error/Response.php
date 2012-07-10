<?php
/**
 * 404 Error Response
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */

namespace Exo\Error;
class Response extends \Exo\Response
{
	protected $http_code = self::HTTP_NOT_FOUND_CODE;
	protected $http_message = self::HTTP_NOT_FOUND_MESSAGE;
}
