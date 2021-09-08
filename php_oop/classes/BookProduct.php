<?php


class BookProduct extends Product
{
    public $pageNumber;

    public function __construct($name, $price, $pageNumber)
    {
        parent::__construct($name, $price);
        $this->pageNumber = $pageNumber;
    }

    public function getProduct()
    {
        $out = parent::getProduct();
        $out .= "Кол-во страниц: {$this->pageNumber}<br>";
        return $out;
    }

    public function getCpu()
    {
        return $this->pageNumber;
    }
}