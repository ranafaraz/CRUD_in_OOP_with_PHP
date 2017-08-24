<?php
     class Ac{
		 public $model ;
		 public $speed = 23;
		 
		function __construct($model){
			echo "The model is = ". $model . "<br>";
			echo "The speed is = " . $this->speed . "<br>";
			
		}
	 }
	 class SmartAc extends Ac{
		public $wifi;
		public $timer;
		 function __construct($model,$wifi1,$timer){
			 $this->wifi = $wifi1;
			 $this->timer = $timer;
			 parent::__construct($model);
			 
			 
		 }
	 }
	 $ac = new SmartAc("hp", "Yes", 32);
	 echo "wifi connection is = " .$ac->wifi . "<br>" ;
	 echo $ac->timer;
?>