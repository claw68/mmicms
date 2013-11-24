<?php
class Score_m extends CI_Model 
{
	var $eventcrittable = 'score_event_criteria';
	var $scoreusertable = 'score_cont_judge';
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	function delete($id)
	{
		$this->db->delete($this->scoreusertable, array('id' => $id));
	}
	
	function add($data)
	{
		$this->db->insert($this->scoreusertable, $data);
		return $this->db->insert_id();
	}
	
	function all()
	{
		$query = $this->db->get($this->scoreusertable);
		$results =  $query->result_array();
		return $results;
	}
	
	function update($id,$data)
	{
		$this->db->where('id', $id);
		$this->db->update($this->scoreusertable, $data);
	}
	
	function get($id)
	{
		$query = $this->db->get_where($this->scoreusertable, array('id' => $id));
		$results =  $query->result_array();
		return $results[0];
	}
}