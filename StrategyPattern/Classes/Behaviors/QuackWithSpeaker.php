<?php

    namespace StrategyPattern\Classes\Behaviors;

    use StrategyPattern\Classes\Behaviors\Interfaces\Quack as IQuackBehavior;

    class QuackWithSpeaker implements IQuackBehavior {

        public function quack() {

            print("High-Volumed Quack!".PHP_EOL);
        }
    }