<?php

    namespace DecoratorPattern\Classes\Beverages\AddOns;

    use DecoratorPattern\Classes\Beverages\Abstracts\BeverageAddOn;

    class IceCream extends BeverageAddOn {

        public function getDescription(): string {

            return $this->beverage->getDescription()." + Ice Cream";
        }

        public function cost(): int {

            return $this->beverage->cost() + 3500;
        }
    }