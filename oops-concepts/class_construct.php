<?php 
ini_set('display_error',1)
error_reporting(E_ALL);
if(!class_exists("tata")){

	class tata{
		public $ceo="rahul";
		function tata(){
			echo "test";
		}

		function __construct($x="",$y=""){
			echo "test1".$x.$y;
		}

		function __destruct(){
			echo "dest";
		}
	}

}
// class tata{
// 		public $ceo="rahul";
// 		function tata(){
// 			echo "test2";
// 		}
// 	}	


$idcard= new tata(10,20);

print_r($idcard);

$idcard= new tata();

?>
<h1>hello</h1>

