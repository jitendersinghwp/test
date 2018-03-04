<?php

class abc{
	public $str;
	public static $methods = array('strpos', 'strlen', 'strtoupper');
	function dd($ar){
		$this->str = $ar;
	}
	public function __call($met, $arg){
		if(in_array($met, self::$methods)){
			array_unshift($arg, $this->str);
			return call_user_func_array($met, $arg);
		}else{
			return null;
		}
	}
}

$abc = new abc;
$abc->str = "Jitender Singh";
echo $abc->strlen();
