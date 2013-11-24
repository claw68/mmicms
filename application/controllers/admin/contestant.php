<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contestant extends CI_Controller
{
	
	public function __construct() {
		parent::__construct();
		$this->load->model('contestant_m','contestant');
		if(!$this->session->userdata('valid'))
		{
			redirect('/user/login');
		}
	}
	
	function index()
	{
		$data = new stdClass();
		$data->contestant = $this->contestant->all();
		
		$navigation = new stdClass();
		$navigation->navigation = admin_navigation();
		
		render_layout('admin/contestant/list',$navigation,$data);
	}
	
	function doAdd()
	{
		$_POST['picture'] = "";
		$_POST['thumbnail'] = "";
		$id = $this->contestant->add($this->input->post());
		
		if(is_uploaded_file($_FILES['picture']['tmp_name']))
		{
			$_POST['picture'] = $this->_uploadpic("picture",$id);
		}
		
		if(is_uploaded_file($_FILES['thumbnail']['tmp_name']))
		{
			$_POST['thumbnail'] = $this->_uploadpic("thumbnail",$id);
		}
		
		$this->contestant->update($id,$this->input->post());
		redirect('admin/contestant');
	}
	
	function add()
	{
		$data = new stdClass();
		
		$navigation = new stdClass();
		$navigation->navigation = admin_navigation();
		
		render_layout('admin/contestant/add',$navigation,$data);
	}
	
	function edit($id)
	{
		$data = new stdClass();
		$data->contestant = $this->contestant->get($id);
		$data->id = $id;
		
		$navigation = new stdClass();
		$navigation->navigation = admin_navigation();
		
		render_layout('admin/contestant/edit',$navigation,$data);
	}
	
	function doEdit()
	{
		$id = $this->input->post("id");
		$contestant = $this->contestant->get($id);
		
		$_POST['picture'] = $contestant['picture'];
		$_POST['thumbnail'] = $contestant['thumbnail'];
		
		if(is_uploaded_file($_FILES['picture']['tmp_name']))
		{
			unlink($contestant['picture']);
			$_POST['picture'] = $this->_uploadpic("picture",$id);
		}
		
		if(is_uploaded_file($_FILES['thumbnail']['tmp_name']))
		{
			unlink($contestant['thumbnail']);
			$_POST['thumbnail'] = $this->_uploadpic("thumbnail",$id);
		}
		
		$this->contestant->update($id,$this->input->post());
		redirect('admin/contestant/');
	}
	
	function delete($id)
	{
		$this->contestant->delete($id);
		$upload_dir = 'includes/uploads/contestant/'.$id;
		delete_files($upload_dir, true);
		rmdir($upload_dir);
		redirect('admin/contestant/');
	}
	
	private function _uploadpic($file,$id){
		$upload_dir = 'includes/uploads/contestant/'.$id.'/';
		
		if (!file_exists($upload_dir))
   			mkdir($upload_dir, 0777);
		
		$config['upload_path'] = $upload_dir;
		$config['allowed_types'] = 'jpg|jpeg|png';
		$config['overwrite'] = FALSE;
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload($file)) {
			$error = $this->upload->display_errors();
			$filename = "";
		}
		else {
			$pic = $this->upload->data();
			$filename = $pic['file_name'];
		}
		return $upload_dir.$filename;
	}
}