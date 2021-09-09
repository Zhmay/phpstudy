<?php


abstract class Product
{
    private $name;
    protected $price;
    private $discount = 0;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    protected function getProduct() {
        return "<hr><b>О товаре:</b><br>
            Наименование: {$this->name}<br>
            Цена со скидкой: {$this->getPrice()}<br>";
    }

    public function getName()
    {
        return $this->name;
    }

    private function getPrice()
    {
        return $this->price - ($this->discount / 100 * $this->price);
    }

    private function getDiscount(): int
    {
        return $this->discount;
    }

    protected function setDiscount(int $discount)
    {
        $this->discount = $discount;
    }
}