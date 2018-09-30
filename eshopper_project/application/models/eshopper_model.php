<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eshopper_model extends CI_Model {
	function getBrands(){
		return $this->db->get("brands")->result_array();
	}
	function getCategories(){
		return $this->db->get("categories")->result_array();
	} 
	function getProducts(){
		return $this->db->get("products")->result_array();
	}

	function getFilterCategories($id){
		return $this->db->get_where("products",array("p_caid"=>$id))->result_array();
	}

	function getCategoryName($id){
		return $this->db->select("ca_name")->get_where("categories",array("ca_id"=>$id))->result_array();

	}

	function getFilterBrand($id){
		return $this->db->get_where("products",array("p_brid"=>$id))->result_array();

	}
	function getBrandName($id){
		return $this->db->select("br_name")->get_where("brands",array("br_id"=>$id))->result_array();

	}

	function getCartData($cookiedata){
		$query= $this->db->query("select * from products where p_id in($cookiedata)");
		foreach($query->result_array() as $row)
		{
			// print_r($row);
			$data[]=$row;
		}
		return $data;
	}

	function insert($data,$tbl){
		print_r($data);
		echo $tbl;
		$this->db->insert($tbl,$data);
	}

	function aoth($data){
		//print_r($data);
		 $answer = $this->db->get_where('login',array('uemail'=>$data['uemail']))->result();
		 //print_r($answer);
		//$this->db->insert($tbl,$data);
		 if(empty($answer)){
		 	return 'Invalide email ID';	
		 }else{
		 		if($answer[0]->upass == $data['upass']){
		 			return TRUE;
		 		}else{
		 			return 'INvalide Password';
		 		}
		 }
	}

}
?>