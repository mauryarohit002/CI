<?php
	// echo base_url();
// echo CI_VERSION;  
?>

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
  <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

 <form method="post" action="<?php echo base_url();?>index.php/amit/count">  
  <div class="col-md-4">  
  <div class="form-group">  
    <label for="name">Name:</label>  
    <input type="text" class="form-control" name="name">  
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" name="email">
  </div>
  <div class="form-group"> 
    <label for="pass">Password:</label>
    <input type="password" class="form-control" name="pass"> 
  </div>
  <div class="form-group">
  <button type="submit" class="btn btn-default">Submit</button>
  </div>  
</div>  
</form>   
 <?php  
echo'<table class="table">  
      <table class="table table-striped table-hover table-bordered">  
        <thead><tr style="text-align:center;">  
         <th><h4>Id</h4></th> 
        <th><h4>Name</h4></th> 
        <th><h4>Email</h4></th>  
        <th><h4>pass</h4></th> 
        <th><h4>Action</h4></th>  
        <th><h4>Action</h4></th>  
        </tr></thead><tbody>';  
  foreach($userlist->result() as $re){  
     echo '<tr style="text-align:center;">  
              <td>'.$re->id.'</td>  
              <td>'.$re->name.'</td> 
              <td>'.$re->email.'</td>  
              <td>'.$re->pass.'</td> 
              <td><a type="button" class="btn btn-success" href="'.base_url('index.php/amit/delete/'.$re->id).'">Delete</a></td>  
              <td><a type="button" class="btn btn-success"  href="'.base_url('index.php/amit/edit/'.$re->id).'">Edit</a></td> 
             </tr>';  
      
} 
 echo '</tbody> 
        </table>';        
?>  
 