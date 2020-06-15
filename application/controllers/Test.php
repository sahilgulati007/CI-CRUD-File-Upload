<?php 
   class Test extends CI_Controller {  
	
      public function index() { 
         //echo "This is default function."; 

         $this->load->view('test');
      } 
  
      public function hello() { 
         echo "This is hello function."; 
      } 
      public function insert(){
      	$this->load->database();
      	$data = array( 
		   'roll_no' => '1', 
		   'stud_name' => 'Virat' 
		); 

		$this->db->insert("stud", $data);
      }
      public function view(){
         $query = $this->db->get("stud"); 
         $data['records'] = $query->result();
         
      }
   } 
?>