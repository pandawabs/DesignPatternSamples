<?php

    namespace StrategyPattern\Classes\Behaviors;

    use StrategyPattern\Classes\Behaviors\Interfaces\Quack as IQuackBehavior;

    class MuteQuack implements IQuackBehavior {

        public function quack(){

            print("I can't quack!".PHP_EOL);
        }
    }