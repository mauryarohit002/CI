<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eshopper extends CI_Controller {
	public function index()
	{
		$this->load->model('eshopper_model');
		$br=$this->eshopper_model->getBrands();
		$cat=$this->eshopper_model->getCategories();
		$pro=$this->eshopper_model->getProducts();
		$this->load->view('index',array(
			"brkey"=>$br,
			"catkey"=>$cat,
			"prokey"=>$pro

		));

	}
	function filter_cat(){
		 // echo "hello";
		// print_r($_POST);
		$id=$_POST['catid'];
		$this->load->model('eshopper_model');
		$catname=$this->eshopper_model->getCategoryName($id);
		// print_r($catname);
		echo"<h2>";
		echo $catname[0]['ca_name'];
		echo"</h2>";
		$product=$this->eshopper_model->getFilterCategories($id);
		// print_r($product);
		if(is_array($product)):
			foreach($product as $val):?>
		<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="<?php echo base_url($val['p_imgpath'])?>" alt="" />
											<h2><?php echo $val['p_amount']; ?></h2>
											<p><?php echo $val['p_desc']; ?></p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2><?php echo $val['p_amount']; ?></h2>
												<p><?php echo $val['p_desc']; ?></p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
										</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
							</div>
						</div>
						<?php 
					endforeach;
				endif;
	}

	function Filter_br(){
		// echo "hello";
		// print_r($_POST);
		$id=$_POST['brid'];
		$this->load->model('eshopper_model');
		$brname=$this->eshopper_model->getBrandName($id);
		// print_r($brname);
		echo"<h2>";
		echo $brname[0]['br_name'];
		echo "</h2>";
		$probr=$this->eshopper_model->getFilterBrand($id);
		// print_r($probr);

		if(is_array($probr)):
			foreach($probr as $val):?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="<?php echo base_url($val['p_imgpath'])?>" alt="" />
											<h2><?php echo $val['p_amount']; ?></h2>
											<p><?php echo $val['p_desc']; ?></p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2><?php echo $val['p_amount']; ?></h2>
												<p><?php echo $val['p_desc']; ?></p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
										</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
							</div>
						</div>
						<?php 
					endforeach;
				endif;

	}


	function cart_action(){
		$id=$_POST['proid'];
		// print_r($id);
		if(get_cookie("product")==""){
			set_cookie("product",$id,36000,"","/");
		}
		else{
			$cookiedata=get_cookie("product");
			// echo $cookiedata
			$newdata=$cookiedata.",".$id;
			set_cookie("product",$newdata,36000,"","/");
		}
		echo "product added in cart";
	}

	function cart(){
			$cookiedata=get_cookie("product");
			// echo $cookiedata
			if($cookiedata!=""){
				$this->load->model('eshopper_model');
				//1,2,3,5
				$ans=$this->eshopper_model->getCartData($cookiedata);
				// print_r($ans);
				$this->load->view("cart",array("xyz"=>$ans));
			}
			else{
				$this->load->view("cart",array("xyz"=>""));

			}

	}

	function delete_cart_action(){
		//2
		$id=$_POST['proid'];
		// print_r($id);
		//1,2,3,4,5
		$cookiedata=explode(",",get_cookie("product"));
		// print_r($cookiedata);

		//[1,2,3,4,5]
		foreach($cookiedata as $key=> $value){
			if($value==$id){
				unset($cookiedata[$key]);
			}
		}
		//[1,2,3]
		// print_r($cookiedata);
		$newdata=implode(",", $cookiedata);
		print_r($newdata);
		set_cookie("product",$newdata,36000,"","/");


	}
}
?>