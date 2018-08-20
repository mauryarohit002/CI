<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eshopper extends CI_Controller {

	public function index()
	{
		$this->load->model('eshopper_model');
		$br = $this->eshopper_model->getBrands();
		// print_r($br);
		// exit;
		$cat = $this->eshopper_model->getCategories();
		$product = $this->eshopper_model->getProducts();
		$this->load->view('index',array(
			"brkey"=>$br,
			"catkey"=>$cat,
			"prokey"=>$product
		));
	}
}
