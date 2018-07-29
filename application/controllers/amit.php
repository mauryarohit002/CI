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
			$this->load->view('index');
		}

		function count(){

			// print_r($_POST);
			$this->load->model('crud');
			$this->crud->insert_data($_POST);
		}
	}

?>