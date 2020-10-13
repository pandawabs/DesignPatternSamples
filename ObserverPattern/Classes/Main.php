<?php 

    namespace ObserverPattern\Classes;

    use ObserverPattern\Classes\WeatherStation;
    use ObserverPattern\Classes\{SimpleDisplay,StatisticsDisplay};

    class Main {

        public static function init() {

            $weather_station = new WeatherStation();
            $display_simple = new SimpleDisplay();
            $display_statistic = new StatisticsDisplay();

            $display_simple->attach($weather_station);
            $display_statistic->attach($weather_station);

            //Weather station updating the data. Let the magic happens...
            $weather_station->setMeasurements(22.0, 91.0, 1001.0, 'C');
            $weather_station->setMeasurements(29.0, 85.0, 1001.0, 'C');
            $weather_station->setMeasurements(27.4, 87.0, 1052.0, 'C');
            $weather_station->setMeasurements(32.0, 67.0, 1043.0, 'C');

            //Ups! Statistic display offline
            $display_statistic->detach();

            $weather_station->setMeasurements(30.0, 72.0, 1011.0, 'C');
            $weather_station->setMeasurements(26.0, 80.0, 1002.0, 'C');

        }
    }