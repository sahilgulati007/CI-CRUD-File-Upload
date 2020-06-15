<?php
  
   class Form extends CI_Controller { 
	
      public function index() { 
         /* Load form helper */ 
         $this->load->helper(array('form'));
			
         /* Load form validation library */ 
         $this->load->library('form_validation');
			$this->load->helper('url');
         /* Set validation rule for name field in the form */ 
         $this->form_validation->set_rules('name', 'Name', 'required'); 
			
         if ($this->form_validation->run() == FALSE) { 
         $this->load->view('myform'); 
         } 
         else { 
            $this->load->view('formsuccess'); 
         } 
      }
      public function session(){
         $this->load->library('session');
         $newdata = array( 
            'username'  => 'sahil gulati', 
            'email'     => 'sjg@narola.email', 
            'logged_in' => TRUE
         );  

         $this->session->set_userdata($newdata);
         $this->load->view('session_view');
      }
   }
?>