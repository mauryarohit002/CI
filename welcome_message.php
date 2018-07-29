<?php 
// echo "hello";
$this->load->helper('html');
$this->load->helper('date');
$this->load->helper('security');
$this->load->helper('text');
$this->load->helper('form');
$this->load->helper('array');
$this->load->helper('number');
$this->load->helper('string');
$this->load->helper('my');
 ?>

 <h1>hello</h1>

 <?php
 echo br(2);

 $data = "200005";
 echo nice_date($data,'Y-m-d');

 echo days_in_month(06, 2018);
 // echo now('India');

 echo do_hash(1234);

 $arr=["good","bad","are"];
  echo word_censor("hello boys how are you",$arr,"*****");

  echo form_input("username","amit");
  echo form_password("username","amit");
  echo form_upload("path","");

$data=["Amit","Nirav","Dipak","vaja"];
echo random_element($data);

echo byte_format(1024*1024);

echo random_string('alnum',5);

pre($arr);

 ?>
 <h1>hello</h1>