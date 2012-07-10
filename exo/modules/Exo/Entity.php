<?php
/**
 * ExoSkeleton Entity
 * Creates passthrough functions for getters and setters
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */

namespace Exo;
class Entity
{
	/**
	 * Requests to unavailable properties attempt getter calls
	 * @param string $property
	 * @return mixed the property value
	 */
	public function &__get($property)
	{
		$method = '_get_' . $property;
		if (method_exists($this, $method))
		{
			return $this->$method();
		}

		if (!property_exists($this, $property))
		{
			throw new Exception('The requested property "' . $property . '" does not exist');
		}

		return $this->$property;
	}

	/**
	 * Requests to set unavailable properties attempt setter calls
	 * @param string $property
	 * @param mixed $value
	 * @return mixed the property by reference
	 */
	public function &__set($property, $value)
	{
		$method = '_set_' . $property;
		if (method_exists($this, $method))
		{
			return $this->$method($value);
		}

		if (!property_exists($this, $property))
		{
			throw new Exception('The requested property "' . $property . '" does not exist');
		}

		$this->$property = $value;
		return $this->$property;
	}
}
