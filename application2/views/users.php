<?php 

echo $this->session->userdata('username');
 ?>

 <a href="<?php echo base_url('index.php/amit/logout')?>">Logout</a>