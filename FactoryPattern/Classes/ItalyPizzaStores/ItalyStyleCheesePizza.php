<?php

    namespace FactoryPattern\Classes\ItalyPizzaStores;

    use FactoryPattern\Classes\Abstracts\Pizza as APizza;

    class ItalyStyleCheesePizza extends APizza {

        function __construct() {

            parent::__construct();

            $this->name = "Italy Style Sauce and Cheese Pizza";
            $this->dough = "Extra Thin Crust Dough";
            $this->sauce = "Marinara Sauce";

            array_push($this->toppings, "Reggiano Parmesan Cheese");
        }
    }