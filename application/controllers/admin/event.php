<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Event extends CI_Controller
{
	
	public function __construct() {
		parent::__construct();
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
		
		$navigation = new stdClass();
		$navigation->navigation = admin_navigation();
		
		render_layout('admin/event/list',$navigation,$data);
	}
	
	function doAdd()
	{
		$this->event->add($_POST);
		redirect('admin/event');
	}
	
	function add()
	{
		$data = new stdClass();
		
		$navigation = new stdClass();
		$navigation->navigation = admin_navigation();
		
		render_layout('admin/event/add',$navigation,$data);
	}
	
	function edit($id)
	{
		$data = new stdClass();
		$data->event = $this->event->get($id);
		$data->id = $id;
		
		$navigation = new stdClass();
		$navigation->navigation = admin_navigation();
		
		render_layout('admin/event/edit',$navigation,$data);
	}
	
	function doEdit()
	{
		$this->event->update($_POST["id"],$_POST);
		redirect('admin/event/');
	}
	
	function delete($id)
	{
		$this->event->delete($id);
		redirect('admin/event/');
	}
}