<?php

/***************************
  Sample using a PHP array
****************************/
require(__DIR__ .'/../vendor/autoload.php');

$fields = [
	'name'    => 'My name',
	'address' => 'My address',
	'city'    => 'My city',
	'phone'   => 'My phone number',
];

$pdf = new FPDM(__DIR__ . '/template.pdf');
$pdf->Load($fields, false); // second parameter: false if field values are in ISO-8859-1, true if UTF-8
$pdf->Merge();
$pdf->Output();
