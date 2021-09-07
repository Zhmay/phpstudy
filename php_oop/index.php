<?php

require_once 'classes/Car.php';
require_once 'classes/File.php';

function debug($data) {
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

$car1 = new Car('Mitsubishi', 'белый', 4, 240, 2008);
$car2 = new Car('BMW', 'черный', 4, 240, 2016);

//echo $car1->getCarInfo();
//echo $car2->getCarInfo();


//homeWork

$file1 = new File();

echo $file1->writeText('new text 1');
echo $file1->writeText('new text 2');
echo $file1->writeText('new text 3');
echo $file1->writeText('new text 4');