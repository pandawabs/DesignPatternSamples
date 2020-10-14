<?php

    namespace DecoratorPattern\Classes\Beverages;

    use DecoratorPattern\Classes\Beverages\Abstracts\Beverage;

    class LatteCoffee extends Beverage {

        function __construct() {

            $this->description = "Latte Coffee";
        }

        public function cost(): int {

            return 17000;
        }
    }