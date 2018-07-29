<?php
	

	/**
	* 
	*/
	class Amit extends CI_Controller
	{
		
		function index()
		{
			//echo "hello";
			//print_r(this);
			$this->load->model('crud');
			$result=$this->crud->show();
			// print_r($result) ;
			$this->load->view('index',array('xyz'=>$result));

		}



		function count(){

			// print_r($_POST);
			
			$this->form_validation->set_rules('email','Email','Required|valid_email|is_unique[users.email]');
			$this->form_validation->set_rules('pwd','Password','Required|alpha_numeric|min_length[3]|max_length[12]');

			$this->form_validation->set_message('is_unique','Email already exits');

			if($this->form_validation->run()==FALSE){
				$this->load->view('index');
			}
			else{
				$this->load->model('crud');
				$this->crud->insert_data($_POST);

				$this->session->set_userdata('username',$_POST['email']);

				redirect(base_url().'index.php/amit/show');
			}


		}
		function show(){

			$this->load->view('users');
		}
		function logout(){
			$this->session->unset_userdata('username');
			$this->session->sess_destroy();
			redirect(base_url().'index.php/amit/show');
		}
	}

?>