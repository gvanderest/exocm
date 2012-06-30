				</div><!-- end #mainleft -->
				<div id="mainright">
					<div class="box2">
					<a href="/contact"><img src="<?= $this->theme_url?>/images/banner.gif" alt=""/></a>
					</div>

					<?php $cms_library = new CMS_Library(); ?>
					<?php $_page = $cms_library->get_page('services'); ?>
					<?php $submenu = $this->display_menu('main', array('level' => 2, 'page' => $_page)); ?>
					<?php if ($submenu): ?>
						<div class="box">
						<ul>
							<?php $_cmsLibrary = new CMS_Library(); ?>
							<?php $_pinnacle = $_cmsLibrary->get_menu_page_pinnacle('main', $_page->id); ?>
							<li class="widget-container"><h2 class="widget-title"><?= $_pinnacle->title ?></h2>
								<?= $submenu ?>
							</li>
						</ul>
						</div>
					<?php endif; ?>

					<div class="box">
						<ul>
							<li class="widget-container">
								<h2 class="widget-title">Quick Links</h2>
								<ul>
									<li><a href="http://www.fastsupport.com/" target="_blank">Connect for Support</a></li>
									<li><a href="http://www.abssnetworks.com/datavault" target="_blank">Download DataVault</a></li>
									<li><a href="http://clearmail.abssnetworks.com/" target="_blank">Manage Your ClearMail Account</a></li>
								</ul>
							</li>
						</ul>
					</div><!-- end of quick links -->
					
					
				</div><!-- end #mainright -->
				<div class="clear"></div><!-- clear float -->
			</div><!-- end #main -->
		</div><!-- end #container-top -->
	</div><!-- end #wrapper-top -->
	<div id="wrapper-bottom">
		<div id="container-bottom">
			<div id="footer-bottom">
			<ul class="social">
				<li><a href="#"><img src="<?= $this->theme_url ?>/images/icon-twitter.png" alt=""/></a></li>
				<li><a href="#"><img src="<?= $this->theme_url ?>/images/icon-fb.png" alt=""/></a></li>
				<li><a href="#"><img src="<?= $this->theme_url ?>/images/icon-linkedln.png" alt=""/></a></li>
			</ul>
			Copyright &copy; <?= date('Y') ?>, ABSS Inc. All rights reserved 
			</div>
		</div><!-- end #container-bottom -->
	</div><!-- end #wrapper-bottom -->
	
	<!-- Google Analytics -->
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-30832116-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
	<!-- End of Google Analytics -->

</body>
</html>

