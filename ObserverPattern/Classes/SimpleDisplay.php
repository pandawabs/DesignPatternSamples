<?php

    namespace ObserverPattern\Classes;

    use ObserverPattern\Classes\Data\Weather as WeatherData;
    use ObserverPattern\Classes\Interfaces\Observable as IObservable;
    use ObserverPattern\Classes\Interfaces\Observer as IObserver;
    use ObserverPattern\Classes\Interfaces\Display as IDisplay;

    class SimpleDisplay implements IObserver, IDisplay {

        private float $_temperature;
        private string $_temperatureUnit;
        private float $_humidity;
        private float $_pressure;
        private ?IObservable $_observable;

        function __construct() {

            $this->_temperature = 0;
            $this->_temperatureUnit = 'C';
            $this->_humidity = 0;
            $this->_pressure = 0;
            $this->_observable = NULL;
        }

        public function observe(IObservable &$observable) {

            $this->_observable = $observable;
            $observable->register($this);
        }

        public function stopObserve() {

            $this->_observable->unregister($this);
            $this->_observable = NULL;
            print("Simple Display: Stopped observe".PHP_EOL);
        }

        public function update($data) {

            if($data instanceof WeatherData)
            {
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