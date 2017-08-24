<?php
     class Ac{
		 public $model = " Dell";
		 public $speed = 23;
		 
		function __construct($model){
			echo "The model is = ".$model . "<br>";
			echo "The speed is = " . $this->speed ;
			
		}
	 }
	 $ac = new Ac("HP");
	// $ac->model ="HP";
	 
?>