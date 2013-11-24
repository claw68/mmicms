<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('valid'))
		{
			redirect('/user/login');
		}
	}
	
	public function index()
	{
		$data = new stdClass();
		$navigation = new stdClass();
		$navigation->navigation = admin_navigation();
		render_layout('admin/dashboard/view',$navigation,$data);
	}
}
/* End of file dashboard.php */
/* Location: ./application/controllers/admin/dashboard.php */