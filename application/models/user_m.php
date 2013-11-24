<?php
class User_m extends CI_Model 
{
	var $table = 'user';
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	function delete($id)
	{
		$this->db->delete($this->table, array('id' => $id));
	}
	
	function add($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}
	
	function all()
	{
		$query = $this->db->get($this->table);
		$results =  $query->result_array();
		return $results;
	}
	
	function update($id,$data)
	{
		$this->db->where('id', $id);
		$this->db->update($this->table, $data);
	}
	
	function get($id)
	{
		$query = $this->db->get_where($this->table, array('id' => $id));
		$results =  $query->result_array();
		return $results[0];
	}
	
	function get_user_by_login($username,$password)
	{
		$query = $this->db->get_where($this->table, array('username' => $username, 'password' => $password));
		$results =  $query->result_array();
		if ($query->num_rows() > 0)
		{
			return $results[0];
		}
		else
		{
			return FALSE;
		}
	}
}