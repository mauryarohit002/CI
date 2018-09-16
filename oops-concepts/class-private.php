<?php 
	class connection{
		var $host="localhost";
		var $user="root";
		var $password="";
		var $database="ci4";

		var $conn="";
		function __construct(){
			$this->conn= new mysqli($this->host,$this->user,$this->password,$this->database);
			// print_r($this->conn);
			session_start();
			// echo session_id();
		}

		function __destruct(){
			$ans=$this->conn->close();
			// var_dump($ans);
		}

		function set($x){
			echo $this->conn;
			$this->host=$x;
			echo $this->conn;

		}

	}
	$obj= new connection();
	// print_r($obj);
	echo $obj->host;
	$obj->host="hello";
	echo $obj->host;

	// $obj->set("a","b","c","d");
 ?>