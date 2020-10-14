<?php

    namespace DecoratorPattern\Classes\Beverages;

    use DecoratorPattern\Classes\Beverages\Abstracts\Beverage;

    class Milkshake extends Beverage {

        function __construct() {

            $this->description = "Milkshake";
        }

        public function cost(): int {

            return 15000;
        }
    }