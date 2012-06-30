<?php include($this->theme_path . '/inc/header.php'); ?>

<div id="slider-container">
	<div id="slider-frame"></div>
	<div id="slider">
		<?php $library = new CMS_Library(); ?>
		<?php foreach ($library->get_gallery_images('home-slider') as $pic): ?>
			<img src="<?= EXO_ASSETS_URL ?>/galleries/<?= $pic->gallery_id ?>/<?= $pic->filename ?>" alt="" />
		<?php endforeach; ?>
	</div>
</div><!-- end #slider-container -->
<div id="content" class="box">
	<?= $page->content ?>
</div><!-- end #content -->
<div class="box" id="partners">
	<table class="transparent">
		<tr>
			<td><img src="<?= $this->theme_url ?>/images/partner-microsoft.jpg" alt="" /></td>
			<td><img src="<?= $this->theme_url ?>/images/partner-vmware.jpg" alt="" /></td>
			<td><img src="<?= $this->theme_url ?>/images/partner-dell.jpg" alt="" /></td>
		</tr>
	</table>
</div><!-- end #content -->

<?php include($this->theme_path . '/inc/footer.php'); ?>
