<?php
/**
 * Blog Admin
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
namespace Blog\Post;
use Blog\Post\Form as PostForm;
use Blog\Post\Model as PostModel;
class Admin extends \CMS\Admin\Application
{
	public static $restful = TRUE;

	public function index()
	{
		switch (@$this->request->arguments[1])
		{
			case 'delete':
			return $this->delete();

			case 'add':
			return $this->add();

			case 'edit':
			return $this->edit();

			case '':
			$model = new PostModel();
			$this->data['posts'] = $posts = $model->get_posts();
			return $this->render('blog/post/admin/index');

			default:
			return $this->error();
		}
	}

	public function add()
	{
		$this->data['form'] = $form = new PostForm();

		if ($form->is_submitted())
		{
			if ($form->is_valid())
			{
				$model = new PostModel();
				// add a post
				$data = $form->get_data();
				$data->active = $form->active->is_checked();
				$data->slug = urlify($data->title);
				$result = $model->add_post($data);
				
				if ($result)
				{
					$this->redirect_to_module();
				}
			}
		} else {
			$form->date_created->set_value(date('Y-m-d H:i:s'));
		}

		return $this->render('blog/admin/post/add');
	}

	public function edit()
	{
		$this->data['form'] = $form = new PostForm();

		$post_id = @$this->request->arguments[2];
		$model = new Model();
		$this->data['post'] = $post = $model->get_post($post_id);

		if ($form->is_submitted())
		{
			if ($form->is_valid())
			{
				$model = new PostModel();
				// add a post
				$data = $form->get_data();
				$data->active = $form->active->is_checked();
				$data->slug = urlify($data->title);
				$result = $model->edit_post($post_id, $data);
				
				if ($result)
				{
					$this->redirect_to_module();
				}
			}
		} else {
			$form->set_data($post);
		}
		return $this->render('blog/admin/post/add');
	}

	public function delete()
	{
		$post_id = @$this->request->arguments[2];
		$model = new Model();
		$result = $model->delete_post($post_id);
		$this->redirect_to_module();
	}
}
