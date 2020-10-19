<?php
    define('__DIR_ROOT__', dirname(__FILE__));

    require_once(__DIR_ROOT__.'/Classes/Abstracts/Pizza.php');
    require_once(__DIR_ROOT__.'/Classes/Abstracts/PizzaStore.php');
    require_once(__DIR_ROOT__.'/Classes/ItalyPizzaStores/ItalyPizzaStore.php');
    require_once(__DIR_ROOT__.'/Classes/ItalyPizzaStores/ItalyStyleCheesePizza.php');
    require_once(__DIR_ROOT__.'/Classes/ItalyPizzaStores/ItalyStyleClamPizza.php');
    require_once(__DIR_ROOT__.'/Classes/ItalyPizzaStores/ItalyStylePepperoniPizza.php');
    require_once(__DIR_ROOT__.'/Classes/ItalyPizzaStores/ItalyStyleVeggiePizza.php');
    require_once(__DIR_ROOT__.'/Classes/NYPizzaStores/NYPizzaStore.php');
    require_once(__DIR_ROOT__.'/Classes/NYPizzaStores/NYStyleCheesePizza.php');
    require_once(__DIR_ROOT__.'/Classes/NYPizzaStores/NYStyleClamPizza.php');
    require_once(__DIR_ROOT__.'/Classes/NYPizzaStores/NYStylePepperoniPizza.php');
    require_once(__DIR_ROOT__.'/Classes/NYPizzaStores/NYStyleVeggiePizza.php');
    require_once(__DIR_ROOT__.'/Classes/Main.php');