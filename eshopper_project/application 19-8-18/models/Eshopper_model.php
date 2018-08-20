<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eshopper_Model extends CI_Model {
	function getBrands()
	{
		return $this->db->get("brands")->result_array();
	}
	function getCategories()
	{
		return $this->db->get("categories")->result_array();
	}
	function getProducts()
	{
		return $this->db->get("products")->result_array();
	}
}
?>