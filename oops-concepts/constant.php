<?php 

class parameter{
const HOST="localhost";
const USER="root";
const PASSWORD="";
const DATABASE="ci4";
}

	class connection extends parameter{
		var $conn="";
		 function __construct(){

		 	// $this->conn=new mysqli(parameter::HOST,parameter::USER,parameter::PASSWORD,parameter::DATABASE);
		 	// print_r($this->conn);
		 }
		 function __destruct(){
		 	// $ans=$this->conn->close();
		 	// var_dump($ans);
		 }
	}

	$obj=new connection();
	print_r($obj);

 ?>