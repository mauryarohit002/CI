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
    <label for="email">Name:</label>  
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
        <th><h4>email</h4></th>  
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
              <td><a type="button" class="btn btn-success reid" data-toggle="modal" data-target="#myModal" href="'.base_url('index.php/amit/edit/'.$re->id).'">Edit</a></td> 
             </tr>';  
      
} 
 echo '</tbody> 
        </table>';        
?>  
 <!-- Trigger the modal with a button --> 
 <!-- Modal --> 
    
  <div id="myModal" class="modal fade" role="dialog"> 
<div class="modal-dialog modal-md"> 
   <!-- Modal content-->  
  <div class="modal-content"> 
    <div class="modal-header">  
      <button type="button" class="close" data-dismiss="modal">&times;</button> 
      <h4 class="modal-title">Modal Header</h4> 
    </div>  
    <div class="modal-body">  
        <form method="post" action="<?php echo base_url('index.php/amit/update');?>"> 
          <div class="form-group">  
            <label for="ID">Id:</label> 
            <input type="text" class="form-control" name="id" value="" readonly=""> 
          </div>  
          <div class="form-group">  
            <label for="name">Name:</label>  
            <input type="text" class="form-control" name="name" value=""> 
          </div>  
          <div class="form-group">  
            <label for="email">Email address:</label> 
            <input type="email" class="form-control" name="email" value="">  
          </div>  
          <div class="form-group">  
            <label for="pass">Password:</label>  
        <input type="password" class="form-control" name="pass" value=""> 
          </div>  
          <button type="submit" class="btn btn-default">Submit</button> 
        </form> 
    </div>  
    <div class="modal-footer">  
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
    </div>
    </div>
    </div>
    </div> 

    <script type="text/javascript">
      $(function(){
        // alert("rom");
        $(".reid").click(function(){

for(ax=0;ax<$('.modal-body input').length;ax++){
      var a=$(this).parent().parent().children("td:eq("+ax+")").html();
       $('.modal-body input:eq('+ax+')').val(a);
      }
          
        })

      })
    </script>