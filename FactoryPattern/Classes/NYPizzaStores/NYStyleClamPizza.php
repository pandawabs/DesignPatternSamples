<?php

    namespace FactoryPattern\Classes\NYPizzaStores;

    use FactoryPattern\Classes\Abstracts\Pizza as APizza;

    class NYStyleClamPizza extends APizza {

        function __construct() {

            parent::__construct();

            $this->name = "NY Style Clam Pizza";
            $this->dough = "Thick Crust Dough";
            $this->sauce = "Plum Tomato Sauce";

            array_push($this->toppings, "Clams");
            array_push($this->toppings, "Onions");
            array_push($this->toppings, "Red Peppers");
        }
    }