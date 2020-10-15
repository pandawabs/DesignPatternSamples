<?php
    define('__DIR_ROOT__', dirname(__FILE__));

    require_once(__DIR_ROOT__.'/Classes/Data/Weather.php');
    require_once(__DIR_ROOT__.'/Classes/Interfaces/Display.php');
    require_once(__DIR_ROOT__.'/Classes/Interfaces/Observable.php');
    require_once(__DIR_ROOT__.'/Classes/Interfaces/Observer.php');
    require_once(__DIR_ROOT__.'/Classes/WeatherStation.php');
    require_once(__DIR_ROOT__.'/Classes/SimpleDisplay.php');
    require_once(__DIR_ROOT__.'/Classes/StatisticsDisplay.php');
    require_once(__DIR_ROOT__.'/Classes/Main.php');