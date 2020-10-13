<?php

    namespace StrategyPattern\Classes\Behaviors;

    use StrategyPattern\Classes\Behaviors\Interfaces\Quack as IQuackBehavior;

    class Quack implements IQuackBehavior {

        public function quack() {

            print("Quack!".PHP_EOL);
        }
    }