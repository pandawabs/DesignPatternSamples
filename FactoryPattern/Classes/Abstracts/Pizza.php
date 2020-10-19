<?php

    namespace FactoryPattern\Classes\Abstracts;

    abstract class Pizza {

        protected string $name;
        protected string $dough;
        protected string $sauce;
        protected array $toppings;

        function __construct() {

            $this->name = "Pizza";
            $this->dough = "Unknown Dough";
            $this->sauce = "Unknown Sauce";
            $this->toppings = array();
        }

        function prepare() {
            print("- Preparing ".$this->name.PHP_EOL);
            print("- Tossing dough...".PHP_EOL);
            print("- Adding sauce...".PHP_EOL);

            if(\count($this->toppings) > 0)
            {
                print("- Adding topping(s)...".PHP_EOL);

                foreach ($this->toppings as $topping) {
                    
                    print("    +".$topping.PHP_EOL);
                }
            }
        }

        function bake() {

            print("- Bake for 25 minutes at 350 degrees.".PHP_EOL);
        }

        function cut() {

            print("- Cutting the pizza into diagonal slices.".PHP_EOL);
        }

        function box() {

            print("- Place pizza in official PizzaStore box.".PHP_EOL);
        }

        function getName(): string {

            return $this->name;
        }
    }