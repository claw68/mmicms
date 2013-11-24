<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller
{
	
	public function __construct() {
		parent::__construct();
		$this->load->model('user_m','user');
		if(!$this->session->userdata('valid'))
		{
			redirect('/user/login');
		}
	}
	
	function index()
	{
		$data = new stdClass();
		$data->user = $this->user->all();
		
		$navigation = new stdClass();
		$navigation->navigation = admin_navigation();
		
		render_layout('admin/user/list',$navigation,$data);
	}
	
	function doAdd()
	{
		$this->user->add($_POST);
		redirect('admin/user');
	}
	
	function add()
	{
		$data = new stdClass();
		
		$navigation = new stdClass();
		$navigation->navigation = admin_navigation();
		
		render_layout('admin/user/add',$navigation,$data);
	}
	
	function edit($id)
	{
		$data = new stdClass();
		$data->user = $this->user->get($id);
		$data->id = $id;
		
		$navigation = new stdClass();
		$navigation->navigation = admin_navigation();
		
		render_layout('admin/user/edit',$navigation,$data);
	}
	
	function doEdit()
	{
		$this->user->update($_POST["id"],$_POST);
		redirect('admin/user/');
	}
	
	function delete($id)
	{
		$this->user->delete($id);
		redirect('admin/user/');
	}
}