<!-- Trigger the modal with a button --> 
 <!-- Modal --> 
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
  <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    
   
   <!-- Modal content-->  
 
    <div class="container">  <?php  
    // print_r($data['userlist']);
     // foreach($userlist->item() as $re){ ?> 
        <form method="post" action="<?php echo base_url();?>index.php/amit/update"> 
          <div class="form-group">  
            <label for="ID">Id:</label> 
            <input type="text" class="form-control" name="id" value="<?php echo $data['userlist']->id; ?>" readonly> 
          </div>  
          <div class="form-group">  
            <label for="email">Name:</label>  
            <input type="text" class="form-control" name="name" value="<?php echo $data['userlist']->name; ?>"> 
          </div>  
          <div class="form-group">  
            <label for="email">Email address:</label> 
            <input type="email" class="form-control" name="email" value="<?php echo $data['userlist']->email; ?>">  
          </div>  
          <div class="form-group">  
            <label for="pass">Password:</label>  
        <input type="password" id="pwd" class="form-control" name="pass" value="<?php echo $data['userlist']->pass; ?>"> 
        <button type="button" onclick="showHide()" id="eye">
            <img src="<?php echo base_url();?>assets/img/eye.png" alt="eye"/>
         </button>
          </div>  
          <button type="submit" class="btn btn-default">Submit</button> 
        </form> 
        <?php// } ?>
     
    <div class="modal-footer">  
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
    </div>
    </div> 
    
    <script type="text/javascript">
     function show() {
    var p = document.getElementById('pwd');
    p.setAttribute('type', 'text');
}

function hide() {
    var p = document.getElementById('pwd');
    p.setAttribute('type', 'password');
}

var pwShown = 0;

document.getElementById("eye").addEventListener("click", function () {
    if (pwShown == 0) {
        pwShown = 1;
        show();
    } else {
        pwShown = 0;
        hide();
    }
}, false);
    </script>
    