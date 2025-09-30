<?php

/***************************
  Sample using an FDF file
****************************/
require(__DIR__ .'/../vendor/autoload.php');

$pdf = new FPDM(__DIR__ .'/template.pdf', __DIR__ .'/fields.fdf');
$pdf->Merge();
$pdf->Output();
