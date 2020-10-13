<?php

    namespace StrategyPattern\Classes;

    use StrategyPattern\Classes\Duck;
    use StrategyPattern\Classes\Behaviors\FlyWithRocket;
    use StrategyPattern\Classes\Behaviors\QuackWithSpeaker;

    class RobotDuck extends Duck {

        function __construct() {

            $this->flyBehavior = new FlyWithRocket();
            $this->quackBehavior = new QuackWithSpeaker();
            print("Initializing Robot Duck...".PHP_EOL);
        }

        function __destruct() {

            print("Self-destructing...".PHP_EOL);
        }

        public function display() {

            print("Hello, I am a robot duck.".PHP_EOL);
        }
    }