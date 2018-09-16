<?php

	class tata{
		//member
		//properties

		var $ceo="deepak";
		//metods

		function hr(){
			echo "hr work";
		}


	}

$re= new tata();
print_r($re);
$re->hr();
echo $re->ceo;

?>