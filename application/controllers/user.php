<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_m','user');
	}
	
	public function index()
	{
		$user = $this->session->userdata('user');
		if($this->session->userdata('valid'))
		{
			if($user['role'] == 'Administrator'){
				redirect('/admin/dashboard');
			}
			else if ($user['role'] == 'Tabulator')
			{
				redirect('/tabulator/dashboard');
			}
			else {
				redirect('/tabulation');
			}
		}
		else{
			redirect('/user/login');
		}
	}
	
	public function login_action()
	{
		$user = $this->user->get_user_by_login($this->input->post('username'),$this->input->post('password'));
		if($user)
		{
			$this->session->set_userdata('user', $user);
			$this->session->set_userdata('valid', TRUE);
			if($user['role'] == 'Administrator'){
				redirect('/admin/dashboard');
			}
			else if ($user['role'] == 'Tabulator')
			{
				redirect('/tabulator/dashboard');
			}
			else {
				redirect('/tabulation');
			}
		}
		else
		{
			redirect("/user/login/error");
		}
	}
	
	public function login($message = "")
	{
		if($this->session->userdata('valid'))
		{
			redirect('/user/');
		}
		$data = new stdClass();
		
		$navigation = new stdClass();
		$navigation->navigation = Array();
		
		render_layout('template/login',$navigation,$data);
	}
	
	public function logout()
	{
		$this->session->set_userdata('user', Array());
		$this->session->set_userdata('valid', FALSE);
  		redirect('/user/login');
	}
}
/* End of file user.php */
/* Location: ./application/controllers/user.php */