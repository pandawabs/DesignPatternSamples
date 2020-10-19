<?php

    namespace FactoryPattern\Classes\NYPizzaStores;

    use FactoryPattern\Classes\Abstracts\Pizza as APizza;

    class NYStyleCheesePizza extends APizza {

        function __construct() {

            parent::__construct();

            $this->name = "NY Style Sauce and Cheese Pizza";
            $this->dough = "Thick Crust Dough";
            $this->sauce = "Plum Tomato Sauce";

            array_push($this->toppings, "Shredded Mozzarella Cheese");
        }
    }