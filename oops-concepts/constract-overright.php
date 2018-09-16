<?php 

	trait pdf{
		function showpdf(){
			echo "test12";
		}
	}
trait exel{}
trait sms{}


abstract class parameter{
const HOST="localhost";
const USER="root";
const PASSWORD="";
const DATABASE="ci4";
function __construct(){
		 echo "<h1>parameter</h1>";
		 }

}

	abstract class connection extends parameter{
		var $conn="";
		 function __construct(){
		 	parent::__construct();
		 	$this->conn=new mysqli(parameter::HOST,parameter::USER,parameter::PASSWORD,parameter::DATABASE);
		 	print_r($this->conn);
		 }
		 function __destruct(){
		 	
		 	$ans=$this->conn->close();
		 	var_dump($ans);
		 }
	}

	final class helper extends connection{
		use pdf;
		use exel;
		use sms;


		function insert($table,$col,$val){
			$sql="insert into $table ($col) values($val)";
			$ans=$this->conn->query($sql);
			var_dump($ans);
		}
		function __construct(){
			connection::__construct();
		 echo "<h1>helper</h1>";
		 }

	}


	$obj=new helper();
	// print_r($obj);
	$obj->insert("login","email,password","'test','123'");
	$obj->showpdf();
 ?>