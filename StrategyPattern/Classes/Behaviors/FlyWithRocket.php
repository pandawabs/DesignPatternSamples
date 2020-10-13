<?php

    namespace StrategyPattern\Classes\Behaviors;

    use StrategyPattern\Classes\Behaviors\Interfaces\Fly as IFlyBehavior;

    class FlyWithRocket implements IFlyBehavior {

        public function fly() {

            print("I'm flying fast, powered by rocket!".PHP_EOL);
        }
    }