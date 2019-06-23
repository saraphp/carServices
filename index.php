<?php
use \Assessment\Services\CarInspection;

require_once __DIR__.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php';


$myCar = new CarInspection('sara');

$myCar->setCost(50);

echo $myCar->totalCost() .'$'.'<br>';
echo $myCar->totalFeedBack().'<br>';


$service1 =  new \Assessment\Services\OilChange();
$service1->setCost(85);
$services =[
    $service1,
];

$car2 = new CarInspection('Eshaan',$services);
echo $car2->totalCost() .'$'.'<br>';
echo $car2->totalFeedBack().'<br>';
