<?php
/**
 * Blog Application
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
namespace Blog;
use CMS\View;
use Blog\Post\Model as PostModel;
class Application extends \Exo\Application
{
	public static $restful = TRUE;

	public function __construct($request)
	{
		$this->view = new View($this);
		parent::__construct($request);
	}

	public function get_index()
	{
		$model = new PostModel();
		$this->data['posts'] = $posts = $model->get_posts(array(
			'sort' => 'date_created DESC'
		));
		return $this->render('blog/index');
	}	

	public function get_post()
	{
		$post_id = @$this->request->arguments[0];
		$model = new PostModel();
		$this->data['post'] = $post = $model->get_post($post_id);
		if ($post)
		{
			return $this->render('blog/post');
		}
		return $this->error();
	}
}
