<?php

    namespace FactoryPattern\Classes\Abstracts;

    use FactoryPattern\Classes\Abstracts\Pizza;

    abstract class PizzaStore {

        public function orderPizza(string $pizza_type): Pizza {

            $pizza = $this->createPizza($pizza_type);

            $pizza->prepare();
            $pizza->bake();
            $pizza->cut();
            $pizza->box();

            return $pizza;
        }

        abstract function createPizza(string $type): Pizza;
    }