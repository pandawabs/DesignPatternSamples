<?php

    namespace DecoratorPattern\Classes\Beverages\AddOns;

    use DecoratorPattern\Classes\Beverages\Abstracts\BeverageAddOn;

    class WhippedCream extends BeverageAddOn {

        public function getDescription(): string {

            return $this->beverage->getDescription()." + Whipped Cream";
        }

        public function cost(): int {

            return $this->beverage->cost() + 5000;
        }
    }