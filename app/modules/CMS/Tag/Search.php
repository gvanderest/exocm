<?php
/**
 * CMS Search
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
namespace CMS\Tag;
use CMS\Library;
class Search extends \CMS\Tag
{
	public function init($args)
	{
		$model = new Library();
		$query = @$_GET['q'];
		$results = $model->search_pages($query);
		ob_start();
		?>
			<div class="search-results">
				<?php if (count($results) == 0): ?>
					<p>There are no search results for your terms</p>
				<?php else: ?>
					<?php foreach ($results as $page): ?>
						<div class="result">
							<h2><a href="/<?= $page->slug ?>"><?= $page->title ?></a></h2>
							<p><?= str_ireplace($query, '<strong>' . $query . '</strong>', ellipsis(strip_tags($page->content), 300)) ?></p>
						</div> <!-- .result -->
					<?php endforeach; ?>
				<?php endif; ?>
			</div> <!-- .search-results -->
		<?php
		return ob_get_clean();
	}
}
