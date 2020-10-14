<?php

    namespace DecoratorPattern\Classes\Beverages;

    use DecoratorPattern\Classes\Beverages\Abstracts\Beverage;

    class Espresso extends Beverage {

        function __construct() {

            $this->description = "Espresso";
        }

        public function cost(): int {

            return 14000;
        }
    }