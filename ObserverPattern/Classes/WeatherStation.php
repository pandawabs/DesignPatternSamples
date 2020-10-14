<?php

    namespace ObserverPattern\Classes;

    use ObserverPattern\Classes\Data\Weather as WeatherData;
    use ObserverPattern\Classes\Interfaces\Observable as IObservable;
    use ObserverPattern\Classes\Interfaces\Observer as IObserver;

    class WeatherStation implements IObservable {

        private \SplObjectStorage $_observers;
        private WeatherData $_weatherData;

        function __construct() {

            $this->_observers = new \SplObjectStorage();
            $this->_weatherData = new WeatherData();
            print("Initializing Weather Station...".PHP_EOL);
        }

        function __destruct() {

            $this->_observers->rewind();

            while ($this->_observers->valid())
            {
                $observer = $this->_observers->current();
                $this->_observers->detach($observer);
                $this->_observers->next();
            }
        }

        public function register(IObserver &$observer) {

            $this->_observers->attach($observer);
            print("Weather Station: New weather observer registered!".PHP_EOL);
        }

        public function unregister(IObserver &$observer) {
            
            $this->_observers->detach($observer);
        }

        public function notify(){

            print("Weather Station: Notify observer(s)...".PHP_EOL);

            $this->_observers->rewind();

            while ($this->_observers->valid())
            {
                $observer = $this->_observers->current();
                $observer->update($this->_weatherData);

                $this->_observers->next();
            }
        }

        public function onMeasurementsChanged() {

            if($this->_observers->count() > 0)
                $this->notify();
        }

        //Function for testing
        public function setMeasurements(float $temperature, float $humidity, float $pressure, string $temp_unit) {

            $this->_weatherData->temperature = $temperature;
            $this->_weatherData->temperatureUnit = $temp_unit;
            $this->_weatherData->humidity = $humidity;
            $this->_weatherData->pressure = $pressure;

            print(PHP_EOL."Weather Station: Update weather data of station...".PHP_EOL);
            $this->onMeasurementsChanged();
        }
    }