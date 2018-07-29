<?php
	// echo base_url();
?>

<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
<?php echo validation_errors(); ?>
 <form method="post" action="http://localhost/CodeIgniter-3.1.9/CodeIgniter-3.1.9/index.php/amit/count">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="text" class="form-control" name="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" name="pwd">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form> 

<?php 
  
  foreach($xyz as $key => $value) {
     echo $value['email'];
     echo $value['pwd'];
     echo "<br>";
  }
 ?>