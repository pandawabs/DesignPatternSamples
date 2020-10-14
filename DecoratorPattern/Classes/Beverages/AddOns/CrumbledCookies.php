<?php

    namespace DecoratorPattern\Classes\Beverages\AddOns;

    use DecoratorPattern\Classes\Beverages\Abstracts\BeverageAddOn;

    class CrumbledCookies extends BeverageAddOn {

        public function getDescription(): string {

            return $this->beverage->getDescription()." + Crumbled Cookies";
        }

        public function cost(): int {

            return $this->beverage->cost() + 2500;
        }
    }