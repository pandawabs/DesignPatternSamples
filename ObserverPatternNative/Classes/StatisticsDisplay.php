<?php

    namespace ObserverPatternNative\Classes;

    use ObserverPatternNative\Classes\Interfaces\Display as IDisplay;
    use ObserverPatternNative\Classes\WeatherStation;

    class StatisticsDisplay implements \SplObserver, IDisplay {

        private array $_temperatures;
        private string $_temperatureUnit;
        private array $_humidities;
        private array $_pressures;
        private ?\SplSubject $_observable;

        function __construct() {

            $this->_temperatures = array();
            $this->_temperatureUnit = 'C';
            $this->_humidities = array();
            $this->_pressures = array();
            $this->_observable = NULL;
        }

        public function observe(\SplSubject &$observable) {

            $this->_observable = $observable;
            $observable->attach($this);
        }

        public function stopObserve() {

            $this->_observable->detach($this);
            $this->_observable = NULL;
            print("Statistic Display: Stopped observe".PHP_EOL);
        }

        public function update(\SplSubject $observable) {

            if($observable instanceof WeatherStation)
            {
                $data = $observable->getWeatherData();
                $this->_temperatureUnit = $data->temperatureUnit;
                \array_push($this->_temperatures, $data->temperature);
                \array_push($this->_humidities, $data->humidity);
                \array_push($this->_pressures, $data->pressure);
                $this->display();
            }
        }

        public function display() {
            
            print("+ Statistics Display".PHP_EOL);

            if(\count($this->_temperatures) > 0 && \count($this->_humidities) > 0 && \count($this->_pressures) > 0)
            {
                $temps = \array_filter($this->_temperatures);
                $humids = \array_filter($this->_humidities);
                $press = \array_filter($this->_pressures);

                printf("Avg/Max/Min temperature: %.1f/%.1f/%.1f %s".PHP_EOL, \array_sum($temps)/\count($temps), \max($temps), \min($temps), $this->_temperatureUnit);
                printf("Avg/Max/Min humidity: %.1f/%.1f/%.1f %%".PHP_EOL, \array_sum($humids)/\count($humids), \max($humids), \min($humids));
                printf("Avg/Max/Min pressure: %.0f/%.0f/%.0f hPa".PHP_EOL, \array_sum($press)/\count($press), \max($press), \min($press));
            }
            else
                print("No data found.".PHP_EOL);
        }
    }