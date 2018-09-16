<?php 

define("HOST","localhost");
define("USER","root");
define("PASSWORD","");
define("DATABASE","ci4");


	class connection{
		var $conn="";
		 function __construct(){

		 	$this->conn=new mysqli(HOST,USER,PASSWORD,DATABASE);
		 	print_r($this->conn);
		 }
		 function __destruct(){
		 	$ans=$this->conn->close();
		 	var_dump($ans);
		 }
	}

	$obj=new connection();


 ?>