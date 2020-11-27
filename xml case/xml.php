<?php
try{
	$xml = simplexml_load_file ('./test.xml');
	print_r(extractArrayDataFromXml($xml));
}catch(Trowable $e){
	echo $e->getMessage();
}

function extractArrayDataFromXml(SimpleXMLElement $xml):array{
	$id = (int)extractBankruptId($xml);
	$bankruptType = extractBankruptType($xml);
	$fio = extractFIO($xml);
	$lotsData = extractLotsData($xml);
	return [
		'Должник' => [
			'id' => $id,
			'тип' => $bankruptType,
			'имя' => $fio
		],
		'Список лотов' => $lotsData
	];
}
function extractLotsData(SimpleXMLElement $xml){
	$table = $xml->MessageInfo->Auction->LotTable;
	$lots = $table->xpath('AuctionLot');
	$lotsData = array_map(function($lot){
		$data[] = $lot->Order->__toString();
		$data[] = $lot->StartPrice->__toString();
		$data[] = trim($lot->Description->__toString());
		return $data;
	}, $lots);
	return $lotsData;
}
function extractBankruptId(SimpleXMLElement $xml):string{
	return $xml->BankruptInfo->BankruptPerson->attributes()->Id->__toString();
}
function extractBankruptType(SimpleXMLElement $xml):string{
	return $xml->BankruptInfo->attributes()->BankruptType;
}
function extractFIO(SimpleXMLElement $xml):string{
	$BankruptAttr = $xml->BankruptInfo->BankruptPerson->attributes();
	$lastname = $BankruptAttr->LastName->__toString();
	$firstname = $BankruptAttr->FirstName->__toString();
	$middlename = $BankruptAttr->MiddleName->__toString();
	return "$lastname $firstname $middlename";
}
//*/