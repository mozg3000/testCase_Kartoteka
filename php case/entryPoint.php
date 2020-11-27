<?php
require_once('./vendor/autoload.php');
use utiles\MyNumber;
use services\RecieptService;
use models\Reciept;
/*
// Задание 1
$number = new MyNumber(1109);
if($number->isSimple())print_r('yes');
else print_r('no');
*/

//Задание 2
$recieptService = new RecieptService();
$dataArray = [
	'totalPrice' => 3627,
	'vat' => 18
];
$reciept = new Reciept($dataArray);
print_r($recieptService->calculatePriceWithoutVat($reciept));