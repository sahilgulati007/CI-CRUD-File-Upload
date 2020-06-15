<?php
class Emp_Controller extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
	}
	public function index(){
		$query = $this->db->get('emp');
		$data['records'] = $query->result();

		$this->load->helper('url');
		$this->load->view('emp/emp_view',$data);
	}
	public function add_emp_view(){
		$this->load->helper('form');
		$this->load->view('emp/emp_add');
	}
	public function add_emp(){
		$this->load->model('Emp_Model');
		$data=array(
				'emp_name'=> $this->input->post('emp_name'),
				'emp_address'=> $this->input->post('emp_address'),
				'emp_mob'=> $this->input->post('emp_mob'),
				'emp_email'=> $this->input->post('emp_email')
			);
		$this->Emp_Model->insert($data);

		$query=$this->db->get('emp');
		$data['records']=$query->result();
		$this->load->view('emp/emp_view',$data);
	}
	
	public function delete_emp(){
		$this->load->model('Emp_Model');
		$empid=$this->uri->segment('3');
		$this->Emp_Model->delete($empid);

		$query=$this->db->get('emp');
		$data['records']=$query->result();
		$this->load->view('emp/emp_view',$data);
	}
	public function update_emp_view(){
		$this->load->helper('form');
		$empid=$this->uri->segment('3');
		$query=$this->db->get_where('emp',array('emp_id' => $empid ));
		$data['records']=$query->result();
		$this->load->view('emp/edit_emp_view',$data);
	}
	public function update_emp(){
		$this->load->model('Emp_Model');
		$data=array(
				'emp_name'=> $this->input->post('emp_name'),
				'emp_address'=> $this->input->post('emp_address'),
				'emp_mob'=> $this->input->post('emp_mob'),
				'emp_email'=> $this->input->post('emp_email'),
			);
		$empid= $this->input->post('emp_id');
		$this->Emp_Model->update($data,$empid);

		$query=$this->db->get('emp');
		$data['records']=$query->result();
		$this->load->view('emp/emp_view',$data);
	}
}
