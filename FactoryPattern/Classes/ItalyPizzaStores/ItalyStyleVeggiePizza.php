<?php

    namespace FactoryPattern\Classes\ItalyPizzaStores;

    use FactoryPattern\Classes\Abstracts\Pizza as APizza;

    class ItalyStyleVeggiePizza extends APizza {

        function __construct() {

            parent::__construct();

            $this->name = "Italy Style Veggie Pizza";
            $this->dough = "Extra Thin Crust Dough";
            $this->sauce = "Marinara Sauce";

            array_push($this->toppings, "Mushrooms");
            array_push($this->toppings, "Onions");
            array_push($this->toppings, "Red Peppers");
            array_push($this->toppings, "Reggiano Parmesan Cheese");
        }
    }