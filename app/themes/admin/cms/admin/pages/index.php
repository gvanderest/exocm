<?php require_once($this->theme_path . '/inc/header.php'); ?>

<h1>Pages</h1>
<?= breadcrumb(array('Pages' => '')) ?>

	<div id="cms-add">
		<ul>
			<li><a href="<?= $this->get_self_url('pages/add/menu') ?>">Add Menu</a></li>
			<li><a href="<?= $this->get_self_url('pages/add/page') ?>">Add Page</a></li>
		</ul>
	</div> <!-- #cms-add -->

<!-- display the list of all menus, and their pages -->
<?php
function display_sidebar_item($_page, $view)
{
	?>
	<?php $page_classes = array(); ?>
	<?php if (!$_page->active) { $page_classes[] = 'inactive'; } ?>
	<?php if (isset($_page->menu_page_type) && $_page->menu_page_type == 'url'): ?>
		<li class="<?= $_page->menu_page_type ?>"><span class="<?= implode(' ', $page_classes) ?>"><?= $_page->menu_page_title ?> (<?= $_page->menu_page_url ?>)</span> [<a href="<?= $view->get_self_url(array('pages/edit/link', $_page->menu_page_id)) ?>">Edit</a>] [<a href="<?= $view->get_self_url(array('pages/delete/link', $_page->menu_page_id)); ?>" onclick="return confirm('Are you sure you wish to delete this link?');">Delete</a>]</li>
	<?php else: ?>
		<li class="<?= $_page->menu_page_type ?>"><span class="<?= implode(' ', $page_classes) ?>"><?= isset($_page->menu_page_title) ? $_page->menu_page_title : $_page->title ?>
			<?php if (isset($_page->menu_page_title) && $_page->title != $_page->menu_page_title) { ?><span class="actual_page_title">(Page: <?= $_page->title ?>)</span><?php } ?>
		</span> [<a href="<?= $view->get_self_url(array('pages/edit/page', $_page->id)) ?>">Edit</a>] [<a href="<?= $view->get_self_url(array('pages/delete/page', $_page->id)) ?>" onclick="return confirm('Are you sure you wish to delete this page?')">Delete</a>]</li>
	<?php endif; ?>
	<?php
}

function recursively_draw_sidebar_menu($view, $menu, $menu_pages, $parent_id = 0)
{
	?>
		<?php $_pages = array(); ?>
		<?php foreach ($menu_pages as $menu_page): ?>
			<?php if ($menu_page->menu_id == $menu->id && $menu_page->parent_id == $parent_id) { $_pages[] = $menu_page; } ?>
		<?php endforeach; ?>

		<?php if (count($_pages) > 0): ?>
			<ul>

				<?php if (count($_pages) > 0): ?>
					<ul>
						<?php foreach ($_pages as $_page): ?>
							<?php display_sidebar_item($_page, $view); ?>
							<?= recursively_draw_sidebar_menu($view, $menu, $menu_pages, $_page->menu_page_id); ?>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
			</ul>
		<?php endif; ?>
	<?php
}

$orphans = array();
foreach ($this->data['pages'] as $page)
{
	$found = false;
	foreach ($this->data['menu_pages'] as $menu_page)
	{
		if ($menu_page->page_id == $page->id) 
		{ 
			$found = true;
			break;
		}
	}
	if ($found)
	{
		continue;
	}
	$orphans[] = $page;
}
?>
<div id="cms-sidebar">
	<div id="cms-menus">
		<?php foreach ($menus as $menu): ?>
			<p><strong><?= $menu->name ?> (<?= $menu->slug ?>)</strong> [<a href="<?= $this->get_self_url(array('pages/edit/menu', $menu->id)) ?>">Edit</a>] [<a href="<?= $this->get_self_url(array('pages/delete/menu', $menu->id)) ?>" onclick="return confirm('Are you sure you wish to delete this menu and remove association to all pages?');">Delete</a>]</p>
			<?= recursively_draw_sidebar_menu($this, $menu, $menu_pages); ?>
		<?php endforeach; ?>
		<?php if (count($orphans) > 0): ?>
		<p><strong>Orphan Pages</strong></p>
		<ul>
			<?php foreach ($orphans as $orphan): ?>
				<?= display_sidebar_item($orphan, $this); ?>
			<?php endforeach; ?>
		</ul>
		<?php endif; ?>
	</div> <!-- #cms-menus -->
</div> <!-- #cms-sidebar -->


<?php require_once($this->theme_path . '/inc/footer.php'); ?>
