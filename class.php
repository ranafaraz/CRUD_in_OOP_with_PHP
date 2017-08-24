<?php
  
  Class  Car{
    public $model;
	public $color;
	public $speed=16;
	
	function speedUp(){
		echo $this->speed+1 ."<br>";
		}
		
    function speedDown(){
		echo $this->speed-1;
		}
	}
	$car = new car;
	$car->speedDown();
	$car->speedUp();
?>