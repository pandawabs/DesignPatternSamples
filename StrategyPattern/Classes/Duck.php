<?php

    namespace StrategyPattern\Classes;

    use StrategyPattern\Classes\Behaviors\Interfaces\Fly as FlyBehavior;
    use StrategyPattern\Classes\Behaviors\Interfaces\Quack as QuackBehavior;
    use StrategyPattern\Classes\Behaviors\FlyWithWings;
    use StrategyPattern\Classes\Behaviors\Quack;

    class Duck {

        protected FlyBehavior $flyBehavior;
        protected QuackBehavior $quackBehavior;

        function __construct() {

            $this->flyBehavior = new FlyWithWings();
            $this->quackBehavior = new Quack();
        }

        final public function setFlyBehavior($fly_behavior) {

            $this->flyBehavior = $fly_behavior;
        }
        
        final public function setQuackBehavior($quack_behavior) {

            $this->quackBehavior = $quack_behavior;
        }

        public function display() {

            print("I'm a regular duck.".PHP_EOL);
        }

        public function doFly() {

            $this->flyBehavior->fly();
        }
        
        public function doQuack() {

            $this->quackBehavior->quack();
        }
    }