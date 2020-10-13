<?php

    namespace ObserverPattern\Classes;

    use ObserverPattern\Classes\Data\Weather as WeatherData;
    use ObserverPattern\Classes\Interfaces\Observable as IObservable;
    use ObserverPattern\Classes\Interfaces\Observer as IObserver;
    use ObserverPattern\Classes\Interfaces\Display as IDisplay;

    class SimpleDisplay implements IObserver, IDisplay {

        private float $temperature;
        private string $temperatureUnit;
        private float $humidity;
        private float $pressure;
        private ?IObservable $observable;

        function __construct() {

            $this->temperature = 0;
            $this->temperatureUnit = 'C';
            $this->humidity = 0;
            $this->observable = NULL;
        }

        public function attach(&$observable) {

            if($observable instanceof IObservable)
            {
                $this->observable = $observable;
                $observable->register($this);
            }
        }

        public function detach() {

            $this->observable->unregister($this);
            $this->observable = NULL;
            print("Simple Display: Detached from Observable!".PHP_EOL);
        }

        public function update($data) {

            if($data instanceof WeatherData)
            {
                $this->temperature = $data->temperature;
                $this->temperatureUnit = $data->temperatureUnit;
                $this->humidity = $data->humidity;
                $this->pressure = $data->pressure;
                $this->display();
            }
        }

        public function display() {

            print(PHP_EOL."+ Simple Display".PHP_EOL);
            printf("Current weather: %.1f%s degrees and %.1f%% humidity".PHP_EOL, $this->temperature, $this->temperatureUnit, $this->humidity);
        }
    }