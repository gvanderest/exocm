<?php
/**
 * Blog Post Model
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
namespace Blog\Post;
class Model extends \Exo\Database\Model
{
	public function get_post($options) { return $this->get_posts($options); }
	public function get_posts($options = array())
	{
		return $this->db->select('blog_posts', $options);
	}

	public function add_post($data)
	{
		return $this->db->insert('blog_posts', $data);
	}

	public function edit_post($id, $data)
	{
		return $this->db->update('blog_posts', $id, $data);
	}

	public function delete_post($id)
	{
		return $this->db->delete('blog_posts', $id);
	}
}
