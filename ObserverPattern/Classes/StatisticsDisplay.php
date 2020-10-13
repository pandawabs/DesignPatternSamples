<?php

    namespace ObserverPattern\Classes;

    use ObserverPattern\Classes\Data\Weather as WeatherData;
    use ObserverPattern\Classes\Interfaces\Observable as IObservable;
    use ObserverPattern\Classes\Interfaces\Observer as IObserver;
    use ObserverPattern\Classes\Interfaces\Display as IDisplay;

    class StatisticsDisplay implements IObserver, IDisplay {

        private array $temperatures;
        private string $temperatureUnit;
        private array $humidities;
        private ?IObservable $observable;

        function __construct() {

            $this->temperatures = array();
            $this->temperatureUnit = 'C';
            $this->humidities = array();
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
            print("Statistic Display: Detached from Observable!".PHP_EOL);
        }

        public function update($data) {

            if($data instanceof WeatherData)
            {
                $this->temperatureUnit = $data->temperatureUnit;
                \array_push($this->temperatures, $data->temperature);
                \array_push($this->humidities, $data->humidity);
                $this->display();
            }
        }

        public function display() {
            
            print("+ Statistics Display".PHP_EOL);

            if(\count($this->temperatures) > 0 && \count($this->humidities) > 0)
            {
                $temps = \array_filter($this->temperatures);
                $humids = \array_filter($this->humidities);

                printf("Avg/Max/Min temperature: %.1f/%.1f/%.1f %s".PHP_EOL, \array_sum($temps)/\count($temps), \max($temps), \min($temps), $this->temperatureUnit);
                printf("Avg/Max/Min humidity: %.1f/%.1f/%.1f %%".PHP_EOL, \array_sum($humids)/\count($humids), \max($humids), \min($humids));
            }
            else
                print("No data found.".PHP_EOL);
        }
    }