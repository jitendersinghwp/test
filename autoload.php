<?php

	spl_autoload_register(function($className){

		include $className.'.php';
	});

	$classOne = new classOne();
	
	$classTwo = new classTwo();