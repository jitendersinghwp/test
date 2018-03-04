<?php
interface a{


}
class abc implements a{
public $name;
    public function __construct($name){
        echo $this->name = $name;
    }
} 
$pp = new abc("Jitender");
function kk(a $pp){
	$pp;
}

kk($pp);
?>
