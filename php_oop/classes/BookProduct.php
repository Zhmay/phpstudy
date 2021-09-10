<?php

namespace classes;

class BookProduct extends Product
{
    private $pageNumber;

    public function __construct($name, $price, $pageNumber)
    {
        parent::__construct($name, $price);
        $this->pageNumber = $pageNumber;
        $this->setDiscount(5);
    }

    public function getProduct()
    {
        $out = parent::getProduct();
        $out .= "Старая цена: {$this->price}<br>";
        $out .= "Кол-во страниц: {$this->pageNumber}<br>";
        return $out;
    }

    protected function getCpu()
    {
        return $this->pageNumber;
    }
}