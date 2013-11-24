<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Criteria extends CI_Controller
{
	
	public function __construct() {
		parent::__construct();
		$this->load->model('criteria_m','criteria');
		$this->load->model('event_m','event');
		if(!$this->session->userdata('valid'))
		{
			redirect('/user/login');
		}
	}
	
	function index()
	{
		$data = new stdClass();
		$data->event = $this->event->all();
		$data->criteria = $this->criteria->all();
		
		$navigation = new stdClass();
		$navigation->navigation = admin_navigation();
		
		render_layout('admin/criteria/list',$navigation,$data);
	}
	
	function doAdd()
	{
		$this->criteria->add($_POST);
		redirect('admin/criteria');
	}
	
	function add()
	{
		$data = new stdClass();
		
		$navigation = new stdClass();
		$navigation->navigation = admin_navigation();
		
		render_layout('admin/criteria/add',$navigation,$data);
	}
	
	function edit($id)
	{
		$data = new stdClass();
		$data->event = $this->event->all();
		$data->criteria = $this->criteria->get($id);
		$data->id = $id;
		
		$navigation = new stdClass();
		$navigation->navigation = admin_navigation();
		
		render_layout('admin/criteria/edit',$navigation,$data);
	}
	
	function doEdit()
	{
		$this->criteria->update($_POST["id"],$_POST);
		redirect('admin/criteria/');
	}
	
	function delete($id)
	{
		$this->criteria->delete($id);
		redirect('admin/criteria/');
	}
}