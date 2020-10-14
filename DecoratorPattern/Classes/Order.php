<?php

    namespace DecoratorPattern\Classes;

    use DecoratorPattern\Classes\Beverages\Abstracts\Beverage;

    class Order {

        protected string $for;
        private \SplObjectStorage $_beverages;

        function __construct(string $for) {

            $this->for = $for;
            $this->_beverages = new \SplObjectStorage();
        }

        function __destruct() {

            $this->_beverages->rewind();

            while ($this->_beverages->valid())
            {
                $beverage = $this->_beverages->current();
                $this->_beverages->detach($beverage);
                $this->_beverages->next();
            }
        }

        public function add(Beverage $beverage) {

            $this->_beverages->attach($beverage);
            print("Order: Added ".$beverage->getDescription().PHP_EOL);
        }

        public function remove(Beverage $beverage) {

            $this->_beverages->detach($beverage);
            print("Order: Removed ".$beverage->getDescription().PHP_EOL);
        }

        public function checkout(){

            $total = 0;

            print(PHP_EOL."ORDER for ".$this->for.PHP_EOL);
            print("----------------------------------------------".PHP_EOL);

            $this->_beverages->rewind();

            while ($this->_beverages->valid())
            {
                $beverage = $this->_beverages->current();
                $total += $beverage->cost();
                print($beverage->getDescription().' | IDR '.$beverage->cost().PHP_EOL);

                $this->_beverages->next();
            }

            print("----------------------------------------------".PHP_EOL);
            print("Total IDR ".$total);
        }
    }