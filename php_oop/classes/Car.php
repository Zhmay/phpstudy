<?php

namespace classes;

    class Car {
        public $brand;
        public $color;
        public $wheels;
        public $speed;
        public $year;

        public static $countCar = 0;
        const TEST_CAR = 'Прототип';
        const TEST_CAR_SPEED = 300;

        public function __construct($brand, $color, $wheels, $speed, $year)
        {
            $this->brand = $brand;
            $this->color = $color;
            $this->wheels = $wheels;
            $this->speed = $speed;
            $this->year = $year;

            self::$countCar++;
        }

        public static function getCount() {
            return self::$countCar;
        }

        public static function getPrototypeInfo() {
            return "<h3>Данные тестового авто:</h3>
                Наименование: " . self::TEST_CAR . " <br>
                Скорость: ". self::TEST_CAR_SPEED ."<br>
            ";
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