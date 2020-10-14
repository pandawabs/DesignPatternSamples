<?php

    namespace DecoratorPattern\Classes\Beverages;

    use DecoratorPattern\Classes\Beverages\Abstracts\Beverage;

    class HotChocolate extends Beverage {

        function __construct() {

            $this->description = "Hot Chocolate";
        }

        public function cost(): int {

            return 16000;
        }
    }