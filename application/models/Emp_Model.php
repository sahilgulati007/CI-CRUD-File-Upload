<?php
class Emp_Model extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	public function insert($data){
		if($this->db->insert('emp',$data)){
			return true;
		}
	}
	public function update($data, $empid){
		$this->db->set($data);
		$this->db->where('emp_id',$empid);
		$this->db->update('emp',$data);
	}
	public function delete($empid){
		if($this->db->delete('emp','emp_id='.$empid)){
			return true;
		}
	}
}