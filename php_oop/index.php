<?php

use interfaces\IGadget;
use classes\{NotebookProduct, BookProduct};

//require_once 'classes/Car.php';
//require_once 'classes/File.php';
//require_once 'classes/Product.php';
//require_once 'classes/NotebookProduct.php';
//require_once 'classes/BookProduct.php';




function debug($data) {
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

//$car1 = new Car('Mitsubishi', 'белый', 4, 240, 2008);
//$car2 = new Car('BMW', 'черный', 4, 240, 2016);

//echo $car1->getCarInfo();
//echo $car2->getCarInfo();


//----------------- homeWork Class File --------------------

//$file1 = new File();

//echo $file1->writeText('new text 1');
//echo $file1->writeText('new text 2');
//echo $file1->writeText('new text 3');
//echo $file1->writeText('new text 4');


//----------------------- Class Car ------------------------
//echo Car::$countCar;
//echo Car::getPrototypeInfo();


//---------------- Модификаторы доступа --------------------

//$book = new BookProduct("Война и мир", 300, 3000);
//$notebook = new NotebookProduct('Mac mini', 25000, 'iMac');

//debug($book);
//debug($notebook);

//echo $book->getProduct('book');
//echo $notebook->getProduct();


//---------------- Автозагрузка и пространства имен ------------------

//function autoloaderClass($class) {
//    $class = str_replace("\\", "/", $class);
//    $file = __DIR__ . "/{$class}.php";
//    if(file_exists($file)) {
//        require_once $file;
//    }
//}
//
//spl_autoload_register('autoloaderClass');

require_once __DIR__ . '/vendor/autoload.php';

//------------------ Интерфейсы и контроль типов ---------------------

function offerCase(IGadget $product) {
    echo "<p>Предлагаем чехол для гаджета {$product->getName()}</p>";
}
$book = new BookProduct("Война и мир", 300, 3000);
$notebook = new NotebookProduct('Mac mini', 25000, 'iMac');
offerCase($notebook);
debug($book);
debug($notebook);
//echo $notebook->getProduct();



