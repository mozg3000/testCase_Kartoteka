<?php
namespace services;
class RecieptService{
	
	public function calculatePriceWithoutVat(\interfaces\RecieptInterface $reciept):float{
		$totalPrice = $reciept->getTotalPrice();
		$vat = $reciept->getVat();
		$priceWithoutVat = $totalPrice - $totalPrice*$vat;
		return $priceWithoutVat;
	}
}