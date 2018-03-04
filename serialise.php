<?php

class abc{
	public $name;
	public function set_name($name){
		$this->name = $name;
	}
	public function get_name(){
		return $this->name;
	}
}
$abc = new abc;
$abc->set_name("Jitender");
echo $abc->get_name();
$s = serialize($abc);
echo "This object has been ".$s;
$b = unserialize($s);
echo $b->get_name();