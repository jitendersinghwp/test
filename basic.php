<?php

// class myClass{
// 	public const Laptop = "Dell";
// 	public static $lat = '238493849389';
// 	public $names = ["Jitender", "prateek", "raman"];
// 	protected $class = "12th";
// 	function tt(){
// 		return "ys";
// 	}
// }
// $nn = new myClass;
// echo "<pre>";
// print_r($nn);
// foreach($nn->names as $n){
// 	echo $n."<br/>";
// }
//echo myClass::Laptop;




// class a{
// 	public static $numbers = 123;
// 	function __construct(){
// 		self::$numbers++;
// 	}
// }
// $a = new a();
// $b = new a();
// $c = new a();
// echo a::$numbers;

class car{
	public $speed = 0;
	public function acclerator(){
		if($this->speed >= 100)
			return false;
		$this->speed+=10;
		return true;
		
	}
	public function getRst(){
		return $this->speed;
	}

}
$hh = new car();
echo "Hi";
echo $hh->getRst();
while($hh->acclerator()){
	echo $hh->getRst()."<br/>";
}
echo $hh->getRst();