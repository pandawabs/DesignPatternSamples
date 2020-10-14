<?php

    namespace DecoratorPattern\Classes\Beverages\Abstracts;

    use DecoratorPattern\Classes\Beverages\Abstracts\Beverage as ABeverage;

    abstract class BeverageAddOn extends ABeverage {

        protected ABeverage $beverage;
        
        function __construct(ABeverage $beverage) {

            $this->beverage = $beverage;
        }
    }
    