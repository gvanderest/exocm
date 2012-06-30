<?php
/**
 * Gallery Tag
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
class CMS_Tag_Gallery extends CMS_Tag
{
	public $library;

	public function init($args)
	{
		$this->library = new CMS_Library();

		$output = '';
		$gallery = $this->library->get_gallery($args['id']);

		// gallery not found!
		if (!$gallery) { return $output; }

		$images = $this->library->get_gallery_images($gallery->id, array('sort' => 'rank ASC'));

		// otherwise, display everything
		ob_start();
		?>
		<div class="CMS_Tag_Gallery" id="gallery-<?= $gallery->slug ?>">
			<h2><?= $gallery->name ?></h2>
			<?php if (count($images) > 0): ?>
				<ul class="images">
					<?php foreach ($images as $image): ?>
						<?php $url = EXO_ASSETS_URL . '/galleries/' . $gallery->id . '/' . $image->filename; ?>
						<li><a href="<?= $url ?>" target="_blank"><img src="<?= $url ?>" alt="" /></a></li>
					<?php endforeach; ?>
				</ul>
			<?php else: ?>
				<p>There are no images in this gallery.</p>
			<?php endif; ?>
		</div> <!-- .CMS_Tag_Gallery -->
		<?php
		$output .= ob_get_clean();
		return $output;
	}
}
