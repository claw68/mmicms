<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Score extends CI_Controller
{
	
	public function __construct() {
		parent::__construct();
		$this->load->model('score_m','score');
		if(!$this->session->userdata('valid'))
		{
			redirect('/user/login');
		}
	}
	
	function index()
	{
		$data = new stdClass();
		$data->score = $this->score->all();
		
		$navigation = new stdClass();
		$navigation->navigation = admin_navigation();
		
		render_layout('admin/score/list',$navigation,$data);
	}
	
	function doAdd()
	{
		$this->score->add($_POST);
		redirect('admin/score');
	}
	
	function add()
	{
		$data = new stdClass();
		
		$navigation = new stdClass();
		$navigation->navigation = admin_navigation();
		
		render_layout('admin/score/add',$navigation,$data);
	}
	
	function edit($id)
	{
		$data = new stdClass();
		$data->score = $this->score->get($id);
		$data->id = $id;
		
		$navigation = new stdClass();
		$navigation->navigation = admin_navigation();
		
		render_layout('admin/score/edit',$navigation,$data);
	}
	
	function doEdit()
	{
		$this->score->update($_POST["id"],$_POST);
		redirect('admin/score/');
	}
	
	function delete($id)
	{
		$this->score->delete($id);
		redirect('admin/score/');
	}
}