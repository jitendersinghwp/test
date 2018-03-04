<?php
namespace dd\tt\bb;
class postman{
	public $name;
	public function __construct( $name ){
		$this->name = $name;
	}
}
use dd\tt\bb\postman as pp;
$n = new pp('hh');
echo $n->name;