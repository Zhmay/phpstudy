<?php

require_once 'classes/Car.php';
require_once 'classes/File.php';
require_once 'classes/Product.php';
require_once 'classes/NotebookProduct.php';
require_once 'classes/BookProduct.php';

function debug($data) {
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

//$car1 = new Car('Mitsubishi', 'белый', 4, 240, 2008);
//$car2 = new Car('BMW', 'черный', 4, 240, 2016);

//echo $car1->getCarInfo();
//echo $car2->getCarInfo();


//homeWork

//$file1 = new File();
//
//echo $file1->writeText('new text 1');
//echo $file1->writeText('new text 2');
//echo $file1->writeText('new text 3');
//echo $file1->writeText('new text 4');

//echo Car::$countCar;
//echo Car::getPrototypeInfo();

$book = new BookProduct("Война и мир", 300, 3000);
$notebook = new NotebookProduct('Mac mini', 25000, 'iMac');

debug($book);
debug($notebook);

echo $book->getProduct('book');
echo $notebook->getProduct();