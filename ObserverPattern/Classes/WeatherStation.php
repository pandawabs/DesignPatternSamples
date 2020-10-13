<?php

    namespace ObserverPattern\Classes;

    use ObserverPattern\Classes\Data\Weather as WeatherData;
    use ObserverPattern\Classes\Interfaces\Observable as IObservable;
    use ObserverPattern\Classes\Interfaces\Observer as IObserver;

    class WeatherStation implements IObservable {

        private \SplObjectStorage $observers;
        private WeatherData $weatherData;

        function __construct() {

            $this->observers = new \SplObjectStorage();
            $this->weatherData = new WeatherData();
            print("Initializing Weather Station...".PHP_EOL);
        }

        function __destruct() {

            $this->observers->rewind();

            while ($this->observers->valid())
            {
                $observer = $this->observers->current();
                $this->observers->detach($observer);
                $this->observers->next();
            }
        }

        public function register(&$observer) {

            if($observer instanceof IObserver)
            {
                $this->observers->attach($observer);
                print("Weather Station: New weather observer registered!".PHP_EOL);
            }
        }

        public function unregister(&$observer) {
            
            if($observer instanceof IObserver)
            {
                $this->observers->detach($observer);
            }
        }

        public function notify(){

            print("Weather Station: Notify observer(s)...".PHP_EOL);

            $this->observers->rewind();

            while ($this->observers->valid())
            {
                $observer = $this->observers->current();
                $observer->update($this->weatherData);

                $this->observers->next();
            }
        }

        public function onMeasurementsChanged() {

            if($this->observers->count() > 0)
                $this->notify();
        }

        //Function for testing
        public function setMeasurements($temperature, $humidity, $pressure, $temp_unit) {

            $this->weatherData->temperature = $temperature;
            $this->weatherData->temperatureUnit = $temp_unit;
            $this->weatherData->humidity = $humidity;
            $this->weatherData->pressure = $pressure;

            print(PHP_EOL."Weather Station: Update weather data of station...".PHP_EOL);
            $this->onMeasurementsChanged();
        }
    }