<?php

    namespace StrategyPattern\Classes\Behaviors;

    use StrategyPattern\Classes\Behaviors\Interfaces\Quack as IQuackBehavior;

    class Squeak implements IQuackBehavior {

        public function quack(){

            print("Squeak!".PHP_EOL);
        }
    }