<?php

    namespace ObserverPatternNative\Classes;

    use ObserverPatternNative\Classes\Interfaces\Display as IDisplay;
    use ObserverPatternNative\Classes\WeatherStation;

    class SimpleDisplay implements \SplObserver, IDisplay {

        private float $_temperature;
        private string $_temperatureUnit;
        private float $_humidity;
        private float $_pressure;
        private ?\SplSubject $_observable;

        function __construct() {

            $this->_temperature = 0;
            $this->_temperatureUnit = 'C';
            $this->_humidity = 0;
            $this->_pressure = 0;
            $this->_observable = NULL;
        }

        public function observe(\SplSubject &$observable) {

            $this->_observable = $observable;
            $observable->attach($this);
        }

        public function stopObserve() {

            $this->_observable->detach($this);
            $this->_observable = NULL;
            print("Simple Display: Stopped observe".PHP_EOL);
        }

        public function update(\SplSubject $observable) {

            if($observable instanceof WeatherStation)
            {
                $data = $observable->getWeatherData();
                $this->_temperature = $data->temperature;
                $this->_temperatureUnit = $data->temperatureUnit;
                $this->_humidity = $data->humidity;
                $this->_pressure = $data->pressure;
                $this->display();
            }
        }

        public function display() {

            print(PHP_EOL."+ Simple Display".PHP_EOL);
            printf("Current weather: %.1f%s degrees | %.1f%% humidity | %.0f hPa".PHP_EOL, $this->_temperature, $this->_temperatureUnit, $this->_humidity, $this->_pressure);
        }
    }