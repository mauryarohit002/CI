<?php 
	$this->load->view("header")
?>
	
		
	<section>
		<div class="container">
		<h2>show cart data</h2>
		

		<?php  
						if(is_array($xyz)):
										foreach($xyz as $val):
						?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="<?php echo base_url($val['p_imgpath'])?>" alt="" />
											<h2><?php echo $val['p_amount']; ?></h2>
											<p><?php echo $val['p_desc']; ?></p>
											<a href="#" class="btn btn-default delete-to-cart"><i class="fa fa-shopping-cart"></i>delete to cart</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2><?php echo $val['p_amount']; ?></h2>
												<p><?php echo $val['p_desc']; ?></p>
												<a href="#" for="<?php echo $val['p_id']; ?>" class="btn btn-default delete-to-cart"><i class="fa fa-shopping-cart"></i>delete to cart</a>
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
						?>

		
		</div>	
	</section>
	
	<?php 
	$this->load->view("footer")
	 ?>