<?php 

    namespace FactoryPattern\Classes;

    use FactoryPattern\Classes\NYPizzaStores\NYPizzaStore;
    use FactoryPattern\Classes\ItalyPizzaStores\ItalyPizzaStore;

    class Main {

        public static function init() {

            print("----------------------------------------------".PHP_EOL);
            print("FACTORY PATTERN SAMPLE".PHP_EOL);
            print("----------------------------------------------".PHP_EOL);

            //Stores are open!
            $pizza_store_ny = new NYPizzaStore();
            $pizza_store_italy = new ItalyPizzaStore();

            //Ethan wants NY Style Cheese Pizza
            $pizza = $pizza_store_ny->orderPizza("cheese");
            print("Ethan ordered a ".$pizza->getName().PHP_EOL);

            print(PHP_EOL);

            //Joel wants Italy Style Cheese Pizza
            $pizza = $pizza_store_italy->orderPizza("cheese");
            print("Joel ordered a ".$pizza->getName().PHP_EOL);
        }
    }