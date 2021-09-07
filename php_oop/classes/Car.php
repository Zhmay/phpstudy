<?php

    class Car {
        public $brand;
        public $color;
        public $wheels;
        public $speed;
        public $year;

        public function __construct($brand, $color, $wheels, $speed, $year)
        {
            $this->brand = $brand;
            $this->color = $color;
            $this->wheels = $wheels;
            $this->speed = $speed;
            $this->year = $year;
        }

        public function getCarInfo() {
            return "<h3>О моем авто:</h3>
                Марка: {$this->brand}<br>
                Цвет: {$this->color}<br>
                Кол-во колес: {$this->wheels}<br>
                Скорость: {$this->speed}<br>
                Год выпуска: {$this->year}<br>    
            ";
        }
    }