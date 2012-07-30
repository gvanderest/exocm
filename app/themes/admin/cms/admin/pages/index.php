<?php include($this->theme_path . '/inc/header.php'); ?>

<h1>Pages</h1>
<?= breadcrumb(array('Pages' => '')) ?>

	<div id="cms-add">
		<ul>
			<li><a href="<?= $this->url_to_self('pages/add/menu') ?>">Add Menu</a></li>
			<li><a href="<?= $this->url_to_self('pages/add/page') ?>">Add Page</a></li>
		</ul>
	</div> <!-- #cms-add -->

<!-- display the list of all menus, and their pages -->
<?php
function display_sidebar_item($_page, $view, $depth = 0)
{
	$indents = str_repeat('<span class="indent"></span>', $depth);
	?>
	<?php $page_classes = array(); ?>
	<?php if (!$_page->active) { $page_classes[] = 'inactive'; } ?>
	<?php if (isset($_page->menu_page_type) && $_page->menu_page_type == 'url'): ?>
		<tr>
			<td><?= $indents ?><?= $_page->menu_page_title ?> (<?= $_page->menu_page_url ?>)</td>
			<td>
				<a href="<?= $view->url_to_self(array('pages/edit/link', $_page->menu_page_id)) ?>">Edit</a>
				| <a href="<?= $view->url_to_self(array('pages/delete/link', $_page->menu_page_id)); ?>" onclick="return confirm('Are you sure you wish to delete this link?');">Delete</a>
			</td>
		</tr>
	<?php else: ?>
		<tr>
			<?php if (isset($_page->menu_page_title)): ?>
				<td><?= $indents ?><?= $_page->menu_page_title ?> (<?= $_page->slug ?>)</td>
			<?php else: ?>
				<td><?= $indents ?><?= $_page->title ?> (<?= $_page->slug ?>)</td>
			<?php endif; ?>
			<td>
				<a href="<?= $view->url_to_self(array('pages/edit/page', $_page->page_id)) ?>">Edit</a>
				| <a href="<?= $view->url_to_self(array('pages/delete/page', $_page->page_id)); ?>" onclick="return confirm('Are you sure you wish to delete this page?');">Delete</a>
			</td>
		</tr>
	<?php endif; ?>
	<?php
}

function recursively_draw_sidebar_menu($view, $menu, $menu_pages, $parent_id = 0, $depth = 0)
{
	?>
		<?php $_pages = array(); ?>

		<?php foreach ($menu_pages as $menu_page): ?>
			<?php if ($menu_page->menu_id == $menu->id && $menu_page->parent_id == $parent_id) { $_pages[] = $menu_page; } ?>
		<?php endforeach; ?>

		<?php if (count($_pages) > 0): ?>
			<?php if (count($_pages) > 0): ?>
				<?php foreach ($_pages as $_page): ?>
					<?php display_sidebar_item($_page, $view, $depth); ?>
					<?= recursively_draw_sidebar_menu($view, $menu, $menu_pages, $_page->menu_page_id, $depth + 1); ?>
				<?php endforeach; ?>
			<?php endif; ?>
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
		<table>
			<?php foreach ($menus as $menu): ?>
				<tr>
					<th><?= $menu->name ?> (<?= $menu->slug ?>)</th>
					<th>
						<a href="<?= $this->url_to_self(array('pages', 'edit', 'menu', $menu->id)); ?>">Edit</a>
						| <a onclick="" href="<?= $this->url_to_self(array('pages', 'delete', 'menu', $menu->id)); ?>"onclick="return confirm('Are you sure you wish to delete this menu and remove association to all pages?');">Delete</a>
					</th>
				</tr>
				<?= recursively_draw_sidebar_menu($this, $menu, $menu_pages); ?>
			<?php endforeach; ?>
			<?php if (count($orphans) > 0): ?>
				<tr>
					<th colspan="2">Orphan Pages</th>
				</tr>
				<?php foreach ($orphans as $orphan): ?>
					<?= display_sidebar_item($orphan, $this); ?>
				<?php endforeach; ?>
			<?php endif; ?>
		</table>
	</div> <!-- #cms-menus -->
</div> <!-- #cms-sidebar -->


<?php include($this->theme_path . '/inc/footer.php'); ?>
