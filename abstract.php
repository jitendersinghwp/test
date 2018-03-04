<?php
abstract class abc{
	public $color;
	public function setColor($color){
		$this->color = $color;
	}
	public function getColor(){
		return $this->color;
	}
	abstract public function area($h, $w);
}
class square extends abc{
	function area($h, $w){
		return $h*$w;
	}
}
$abc = new square;
// $abc->setColor("yellow");
// echo $abc->getColor();
echo $abc->area(10, 20);
