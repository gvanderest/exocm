<?php
/**
 * CMS Page Content
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
class CMS_Tag_Content extends CMS_Tag
{
	public function init($args)
	{
		return $this->application->data['page']->content;
	}
}
