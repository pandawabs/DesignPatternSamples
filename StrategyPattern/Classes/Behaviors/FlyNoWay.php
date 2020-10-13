<?php

    namespace StrategyPattern\Classes\Behaviors;

    use StrategyPattern\Classes\Behaviors\Interfaces\Fly as IFlyBehavior;

    class FlyNoWay implements IFlyBehavior {

        public function fly() {

            print("I can't fly!".PHP_EOL);
        }
    }