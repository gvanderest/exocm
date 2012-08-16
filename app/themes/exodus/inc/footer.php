	</div> <!-- #container -->
	<div id="social-section">
		<div id="social-content">
			<div id="social-options">
				<div id="contact">
					<h2>Contact Us</h2>
					<p>Phone: 250-319-9835<br />Email: <a href="mailto:info@exo.me">info@exo.me</a><br /><br />#216 - 1185 Hugh Allan Drive<br />Kamloops, BC, V1S 1T3</p>
				</div> <!-- #contact -->
				<div id="social-media">
					<h2>Social Media</h2>
					<ul>
						<li class="facebook"><a href="https://www.facebook.com/exodusmedia" target="_blank">Like us on Facebook</a></li>
						<li class="twitter"><a href="http://twitter.com/exodusmedia" target="_blank">Follow us on Twitter</a></li>
						<li class="googleplus"><a href="https://plus.google.com/104191084384130307589" target="_blank">Circle us on Google+</a></li>
						<li class="linkedin"><a href="http://www.linkedin.com/company/1402038">Follow us on LinkedIn</a></li>
					</ul>
				</div> <!-- #social-media -->
				<div id="client-help">
					<h2>Sections</h2>
					<?= 
					$view->display_menu('main', array(
						'entry_method' => function ($page, $classes = array()) {
							return '<li class="' . implode(' ', $classes) . '"><a href="/' . $page->slug . '">' . $page->title . '</a></li>';
						}
					));
					?>
				</div> <!-- #client-help -->
				<div id="disclaimer">
					<h2>Disclaimer</h2>
					<p>Any rates or pricing displayed on this website are examples.  Exodus Media reserves the right to change pricing at any time.</p>
				</div> <!-- #disclaimer -->
			</div> <!-- #social-options -->
		</div> <!-- #social-content -->
	</div> <!-- #social-section -->
	<div id="footer">
		<div id="footer-content">
			<div id="copyright">
				<p>Copyright &copy; <?= date('Y') ?> <a href="http://exo.me/">Exodus Media</a>. All rights reserved.</p>
			</div> <!-- #copyright -->
			<?php
			/*
			<div id="footer-links">
				<ul>
					<li><a href="#">Sitemap</a></li>
					<li><a href="#">Terms of Use</a></li>
					<li><a href="#">Privacy Policy</a></li>
				</ul>
			</div> <!-- #footer-links -->
			*/
			?>
		</div> <!-- #footer-content -->
	</div> <!-- #footer -->
</div> <!-- #wrapper -->

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-30832116-5']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

	</body>
</html>
