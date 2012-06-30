<?php
/**
 * CMS Gallery Image Editor
 * @author Guillaume VanderEst <guillaume@vanderst.org>
 */
class CMS_UI_GalleryImageManager extends ExoUI_Object
{
	public $images;

	/**
	 * Construct UI elements for each entry
	 * @param string $id
	 * @param array $options
	 * @return void
	 */
	public function __construct($id = 'images', $options = array())
	{
		if (!isset($options['value']))
		{
			throw new Exception('CMS_UI_GalleryImageManager must be provided a value');
		}
		parent::__construct($id, $options);

		// for any deletions, delete them
		if ($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$library = new CMS_Library();
			foreach ($this->value as $image)
			{
				if (array_key_exists($image->id . '_delete', $_POST))
				{
					$library->delete_gallery_image($image->id);
				}

				if (array_key_exists($image->id . '_rank', $_POST))
				{
					$library->edit_gallery_image($image->id, (object)array('rank' => $_POST[$image->id . '_rank']));
				}
			}
		}
	}

	/**
	 * Get values
	 * @param void
	 * @return array of objects
	 */
	public function get_value()
	{
		return NULL;
	}

	/** 
	 * Display grid of images with some values for each one
	 * @param void
	 * @return string html
	 */
	public function display()
	{
		ob_start();
		?>
		<div class="CMS_UI_GalleryImageManager">
			<h2>Gallery Images</h2>
			<div class="images">
				<?php if (count($this->value) == 0): ?>
					<p>There are currently no images.</p>
				<?php else: ?>
					<?php foreach ($this->value as $image): ?>
						<?php $delete = new ExoUI_Checkbox($image->id . '_delete', array('label' => 'Delete')); ?>
						<?php $delete->add_option('Delete'); ?>
						<?php $rank = new ExoUI_Textbox($image->id . '_rank', array('label' => 'Rank')); ?>
						<?php $rank->set_value($image->rank); ?>
						<div class="image">
							<div class="image"><img src="<?= EXO_ASSETS_URL ?>/galleries/<?= $image->gallery_id ?>/<?= $image->filename ?>" alt="" /></div>
							<div class="rank">Rank: <?= $rank->display_raw() ?></div> <!-- .rank -->
							<div class="delete"><?= $delete->display_raw() ?></div> <!-- .rank -->
						</div> <!-- .image -->
					<?php endforeach; ?>
				<?php endif; ?>
			</div> <!-- .images -->
		</div> <!-- .CMS_UI_GalleryImageManager -->
		<?php
		$output = ob_get_clean();
		return $output;
	}
}
