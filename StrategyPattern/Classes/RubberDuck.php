<?php

    namespace StrategyPattern\Classes;

    use StrategyPattern\Classes\Duck;
    use StrategyPattern\Classes\Behaviors\FlyNoWay;
    use StrategyPattern\Classes\Behaviors\Squeak;

    class RubberDuck extends Duck {

        function __construct() {

            $this->flyBehavior = new FlyNoWay();
            $this->quackBehavior = new Squeak();
        }

        public function display() {

            print("I'm a rubber duck.".PHP_EOL);
        }

        public function doFloat() {

            print("I'm floating on the water.".PHP_EOL);
        }
    }