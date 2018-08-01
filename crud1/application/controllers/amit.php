<?php
	

	/**
	* 
	*/
	class Amit extends CI_Controller
	{
		public function __construct(){	
			parent::__construct();	
		}

		function index()
		{
			//echo "hello";
			//print_r(this);
			// $this->load->view('index');
			$this->load->model('crud');	
			$result=$this->crud->index();	
			$data = array('userlist'=>$result);	
			$this->load->view("index",$data);	
		}
		

		function count(){

			// print_r($_POST);
			$this->load->model('crud');
			$this->crud->insert_data($_POST);
			redirect(base_url());	
				

		}
		function delete($id)	
		{	
			// echo $id;	
			$this->load->model('crud');	
			$this->crud->deletedata($id);	
			redirect(base_url());	
		}	
 		function edit($id)	
    {	
    	// print_r($_POST);

        $item = $this->Crud->find_item($id);	
       $this->load->view('Crud/edit',array('item'=>$item));	
    }
    function update(){
    	// print_r($_POST);
    	$this->load->model('crud');
    	$this->crud->editdata($_POST);
		redirect(base_url());	

    }

		
	}

?>