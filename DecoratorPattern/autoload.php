<?php
    define('__DIR_ROOT__', dirname(__FILE__));

    require_once(__DIR_ROOT__.'/Classes/Beverages/Abstracts/Beverage.php');
    require_once(__DIR_ROOT__.'/Classes/Beverages/Abstracts/BeverageAddOn.php');
    require_once(__DIR_ROOT__.'/Classes/Beverages/Espresso.php');
    require_once(__DIR_ROOT__.'/Classes/Beverages/HotChocolate.php');
    require_once(__DIR_ROOT__.'/Classes/Beverages/IcedCoffee.php');
    require_once(__DIR_ROOT__.'/Classes/Beverages/LatteCoffee.php');
    require_once(__DIR_ROOT__.'/Classes/Beverages/Milkshake.php');
    require_once(__DIR_ROOT__.'/Classes/Beverages/AddOns/CrumbledCookies.php');
    require_once(__DIR_ROOT__.'/Classes/Beverages/AddOns/IceCream.php');
    require_once(__DIR_ROOT__.'/Classes/Beverages/AddOns/WhippedCream.php');
    require_once(__DIR_ROOT__.'/Classes/Order.php');
    require_once(__DIR_ROOT__.'/Classes/Main.php');