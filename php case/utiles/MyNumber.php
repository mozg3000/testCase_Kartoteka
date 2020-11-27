<?php
namespace utiles;

class MyNumber{
	private $number;
	public function __construct(int $number){
		$this->number = $number;
	}
	public function isSimple():bool{
		if(!$this->validateNumber()) return false;
		if($this->number === 1 || $this->number === 2) return true;
		if($this->number%2 === 0) return false;
		for($i=3; $i<$this->number; $i += 2){
			if($this->number%$i === 0) return false;
		}
		return true;
	}
	public function getMyNumber(){
		return $this->number;
	}
	public function setMyNumber(int $newValue){
		$this->number = $newValue;
	}
	private function validateNumber():bool{
		if($this->number <= 0) return false;
		return true;
	}
}