<?php

    namespace DecoratorPattern\Classes\Beverages;

    use DecoratorPattern\Classes\Beverages\Abstracts\Beverage;

    class IcedCoffee extends Beverage {

        function __construct() {

            $this->description = "Iced Coffee";
        }

        public function cost(): int {

            return 15000;
        }
    }