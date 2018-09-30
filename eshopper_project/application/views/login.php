<?php 
	$this->load->view("header")
	 ?>
<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form action="#" id="login">
							<input type="email" name="uemail" placeholder="Email Address"/>
							<input type="password" name="upass" placeholder="Password"/>
							<button type="button" class="login btn btn-default">Signup</button>
						</form>
						<div class="login_error"></div>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form action="#" id="register">
							<input type="text" name="uname" placeholder="Name"/>
							<input type="email" name="uemail" placeholder="Email Address"/>
							<input type="password" name="upass" placeholder="Password"/>
							<input type="password" name="uc_pass"  placeholder="confirm password"/>
							<input type="text" placeholder="mobile no" name="umobile" />
							<button type="button" class="register btn btn-default">Signup</button>
						</form>
						<div class="register_error"></div>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->

	<?php 
	$this->load->view("footer")
	 ?>