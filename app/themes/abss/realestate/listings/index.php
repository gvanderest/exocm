<?php require_once($this->theme_path . '/inc/header.php') ?>

<h1>Listings Example</h1>
<?php if (count($this->data['listings']) > 0): ?>
	<table class="realestate">
		<?php foreach ($this->data['listings'] as $listing): ?>
			<tr>
				<td>Image</td>
				<td>
					<a href="<?= $this->link_to_self(array('details', $listing->id)); ?>"><?= $listing->name ?></a><br />
					Price: $<?= number_format($listing->price, 0) ?>
				</td>
			</tr>	
		<?php endforeach; ?>
	</table>
<?php else: ?>
	<p>There are currently no listings to display.</p>
<?php endif; ?>

<?php require_once($this->theme_path . '/inc/footer.php') ?>
