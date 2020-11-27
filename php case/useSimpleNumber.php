<?php
require_once('./vendor/autoload.php');
use utiles\MyNumber;
use services\RecieptService;
use models\Reciept;
/*
$number = new MyNumber(1109);
if($number->isSimple())print_r('yes');
else print_r('no');
*/
$recieptService = new RecieptService();
$dataArray = [
	'totalPrice' => 3627,
	'vat' => 18
];
$reciept = new Reciept($dataArray);
print_r($recieptService->calculatePriceWithoutVat($reciept));