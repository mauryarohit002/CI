<?php
	
	class crud extends CI_Model{
		public function __construct()	
		{	
			parent::__construct();	
		}	
		function index(){	
			return $this->db->get('users');	
		}

		function insert_data($data){

			//echo "test";

			$this->db->insert("users",$data);
		}

		function deletedata($id)	
		{	
			$this->db->where("id",$id);	
			$this->db->delete("users");	
		}	
		function editdata($data){
			// print_r($data);	
			$this->db->where("id",$data['id']);	
			$this->db->update("users",$data);	
		}	
 		 function find_item($id)	
     	{	
         return $this->db->get_where('users', array('id' => $id))->row();	
     	}

	}
?>