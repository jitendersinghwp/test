<?php
	function __autoload($classname){
		echo 'hi';
		include("{$classname}.php");
	}

?>