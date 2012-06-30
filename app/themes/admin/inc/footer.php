		</div> <!-- #body -->
		<div id="footer">
			<?php
			$_library = new CMS_Library();
			$_framework = $_library->get_module('Exo');
			$_cms = $_library->get_module('CMS');
			?>
			<div id="copyright"><em>Copyright &copy; <?= date('Y') ?> <a href="<?= $_cms_company_url ?>" target="_blank"><?= $_cms_company ?></a></em></div> <!-- #copyright -->
		</div> <!-- #footer -->
	</div> <!-- #container -->
</div> <!-- #wrapper -->

	</body>
</html>

