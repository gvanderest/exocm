<?php
/**
 * Error Handler
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
namespace Exo;
class Error implements \Countable
{
	protected $errors = array();

	public function add($error)
	{
		if (is_object($error) && property_exists($error, 'errors'))
		{
			foreach ($error->errors as $error)
			{
				$this->add($error);
			}
			return;
		}
		$this->errors[] = $error;
	}

	public function display()
	{
		// if no errors, don't display anything
		if (count($this->errors) == 0) { return; }

		ob_start();
		?>
		<div class="Exo_Error">
			<p>The following errors have occurred:</p>
			<ul>
				<?php foreach ($this->errors as $error): ?>
					<li><?= $error ?></li>
				<?php endforeach; ?>
			</ul>
		</div> <!-- .Exo_Error -->
		<?php
		$output = ob_get_clean();
		return $output;
	}

	public function count()
	{
		return count($this->errors);
	}
}
