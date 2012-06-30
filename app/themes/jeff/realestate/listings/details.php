<?php require_once($this->theme_path . '/inc/header.php'); ?>

<?php $image_path = EXO_ASSETS_URL . '/listings/' . $listing->id . '/' . $listing->image; ?>
<?php $image_url = str_replace(EXO_BASE_PATH, '', EXO_ASSETS_URL) . '/listings/' . $listing->id . '/' . $listing->image; ?>
<div class="image"><img src="<?= $image_url ?>" alt="" /></div>
<table>
<?php foreach ($listing as $key => $value): ?>
	<tr>
		<th><?= ucwords($key); ?></th>
		<td><?= $value ?></td>
	</tr>
<?php endforeach; ?>
</table>

<style>
.image { width: 200px; height: 200px; text-align: center; }
.image img { max-width: 200px; max-height: 200px; line-height: 200px; vertical-align: middle; text-align: center; }
</style>


<?php require_once($this->theme_path . '/inc/footer.php'); ?>
