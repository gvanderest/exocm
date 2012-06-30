<?php
/**
 * CMS File Manager
 * @header
 */
class CMS_Admin_FileManager extends CMS_Admin_Application
{
	public function __construct($request)
	{
		parent::__construct($request);
	}
	
	public function init($request)
	{
		$action = @$request->arguments[1];
		$id = @$request->arguments[2];

		switch ($action)
		{
			case 'create':
			case 'delete':
				return $this->$action($id);
		default:
			return $this->index();
		}
	}

	public function delete()
	{
		$file = @$_GET['f'] ? $this->library->get_assets_path(@$_GET['f']) : NULL;
		$path = @$_GET['d'] ? $this->library->get_assets_path(@$_GET['d']) : NULL;

		if ($path && is_dir($path))
		{
			$this->library->recursively_delete_folder($path);

		} elseif ($file && file_exists($file)) {

			@unlink($file);
		}

		$this->redirect($this->view->get_module_url());
	}

	public function index()
	{
		$file_form = $this->data['file_form'] = new CMS_FileUploadForm();
		$folder_form = $this->data['folder_form'] = new CMS_FolderForm();
		$path = $this->data['path'] = $this->library->get_assets_path(@$_GET['d']);

		if ($file_form->is_submitted() && $file_form->is_valid())
		{
			$filename = $file_form->name->get_value();
			if ($filename)
			{
				$file_form->file->set_value($filename);
			}

			$file_form->file->set_upload_path($path);
			$file_form->file->move_file();
			$this->redirect($this->view->get_module_url(array('d' => @$_GET['d'])));

		} elseif ($folder_form->is_submitted() && $folder_form->is_valid()) {

			$new_folder = @$_GET['d'] . '/' . $folder_form->folder->get_value();
			$path = $this->library->get_assets_path($new_folder);
			@mkdir($path, 0777, TRUE);
			$this->redirect($this->view->get_module_url(array('d' => $new_folder)));
		}

		$dirs = $this->data['dirs'] = $this->library->get_path_dirs($path);
		$files = $this->data['files'] = $this->library->get_path_files($path);
		$entries = $this->data['entries'] = array_merge($dirs, $files); // just so they're in the order

		return $this->view->render('cms/admin/files/index');
	}
}
