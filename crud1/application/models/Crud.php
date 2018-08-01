<?php
	
	class crud extends CI_Model{
		public function __construct()	
		{	
			parent::__construct();	
		}	
		function index(){	
			return $this->db->get('login');	
		}

		function insert_data($data){

			//echo "test";

			$this->db->insert("login",$data);
		}

		function deletedata($id)	
		{	
			$this->db->where("id",$id);	
			$this->db->delete("login");	
		}	
		function editdata($data){	
			// print_r($data);
			$this->db->where("id",$data['id']);	
			$this->db->update("login",$data);	
		}	
 		 function find_item($id)	
     	{	
         return $this->db->get_where('login', array('id' => $id))->row();	
     	}

	}
?>