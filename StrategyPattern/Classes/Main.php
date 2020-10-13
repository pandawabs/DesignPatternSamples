<?php 

    namespace StrategyPattern\Classes;

    use StrategyPattern\Classes\Behaviors\{FlyNoWay,FlyWithRocket,FlyWithWings};
    use StrategyPattern\Classes\Behaviors\{Quack,QuackWithSpeaker,Squeak};
    use StrategyPattern\Classes\{Duck,RobotDuck,RubberDuck};

    class Main {

        public static function init() {

            print("----------------------------------------------".PHP_EOL);
            print("STRATEGY PATTERN SAMPLE".PHP_EOL);
            print("----------------------------------------------".PHP_EOL);

            $regular_duck = new Duck();
            $robot_duck = new RobotDuck();
            $rubber_duck = new RubberDuck();

            print("- Regular Duck:".PHP_EOL);
            $regular_duck->display();
            $regular_duck->doFly();
            $regular_duck->doQuack();
            
            print(PHP_EOL."- Rubber Duck:".PHP_EOL);
            $rubber_duck->display();
            $rubber_duck->doFly();
            $rubber_duck->doQuack();
            $rubber_duck->doFloat();

            print(PHP_EOL."- Robot Duck:".PHP_EOL);
            $robot_duck->display();
            $robot_duck->doFly();
            $robot_duck->doQuack();

            print(PHP_EOL."++ Let's make some changes on Regular Duck:".PHP_EOL);
            $regular_duck->setFlyBehavior(new FlyWithRocket());
            $regular_duck->setQuackBehavior(new QuackWithSpeaker());
            $regular_duck->display();
            $regular_duck->doFly();
            $regular_duck->doQuack();
            
            print(PHP_EOL."++ Let's make some changes on Rubber Duck:".PHP_EOL);
            $rubber_duck->setFlyBehavior(new FlyWithRocket());
            $rubber_duck->setQuackBehavior(new QuackWithSpeaker());
            $rubber_duck->display();
            $rubber_duck->doFly();
            $rubber_duck->doQuack();
            $rubber_duck->doFloat();

            print(PHP_EOL."++ Let's make some changes on Robot Duck:".PHP_EOL);
            $robot_duck->setFlyBehavior(new FlyNoWay());
            $robot_duck->setQuackBehavior(new Squeak());
            $robot_duck->display();
            $robot_duck->doFly();
            $robot_duck->doQuack();
        }
    }