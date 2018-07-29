<?php
	
	class crud extends CI_Model{

		function insert_data($data){

			//echo "test";

			$this->db->insert("users",$data);
		}

	}
?>