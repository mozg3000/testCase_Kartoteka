<?php
namespace models;
class Reciept implements \interfaces\RecieptInterface{
	private $totalPrice;
	private $vat;
	public function __construct(array $recieptDataArray){
		$this->totalPrice = $recieptDataArray['totalPrice'];
		$this->vat = $recieptDataArray['vat'];
	}
	public function getTotalPrice(){
		return $this->totalPrice;
	}
	public function getVat(){
		return ($this->vat)/100;
	}
}