<?php require_once($this->theme_path . '/inc/header.php'); ?>

<h1>Listings Example</h1>
<?php if (count($this->data['listings']) > 0): ?>
	<table class="realestate">
		<?php foreach ($this->data['listings'] as $listing): ?>
			<tr>
				<?php $image_path = EXO_ASSETS_URL . '/listings/' . $listing->id . '/' . $listing->image; ?>
				<?php $image_url = str_replace(EXO_BASE_PATH, '', EXO_ASSETS_URL) . '/listings/' . $listing->id . '/' . $listing->image; ?>
				<td class="image"><img src="<?= $image_url ?>" alt="" /></td>
				<td>
					<a href="/listings/details/<?= $listing->id ?>"><?= $listing->name ?></a><br />
					Price: $<?= number_format($listing->price, 0) ?>
				</td>
			</tr>	
		<?php endforeach; ?>
	</table>
<?php else: ?>
	<p>There are currently no listings to display.</p>
<?php endif; ?>

<style>
td.image { width: 200px; height: 200px; text-align: center; }
.image img { max-width: 200px; max-height: 200px; line-height: 200px; vertical-align: middle; text-align: center; }
</style>

<?php require_once($this->theme_path . '/inc/footer.php'); ?>
