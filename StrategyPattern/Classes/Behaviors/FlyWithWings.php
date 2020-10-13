<?php

    namespace StrategyPattern\Classes\Behaviors;

    use StrategyPattern\Classes\Behaviors\Interfaces\Fly as IFlyBehavior;

    class FlyWithWings implements IFlyBehavior {

        public function fly(){

            print("I'm flying high with my wings!".PHP_EOL);
        }
    }