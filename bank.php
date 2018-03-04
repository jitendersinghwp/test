<?php
	class Bank{
		private $totalBalence = 0;

		public function makeDeposite($amount){
			return $this->totalBalence += $amount;
		}
		public function makeCredit($amount){
			if($amount < $this->totalBalence)
				return $this->totalBalence -=$amount;
			die('insufficient Balence');
		}
		public function totalBalence(){
			return $this->totalBalence;
		}
	}
	$sbi = new Bank();
	$sbi->makeDeposite(5000);
	$sbi->makeDeposite(5000);
	$sbi->makeCredit(2000);
	echo $sbi->totalBalence();