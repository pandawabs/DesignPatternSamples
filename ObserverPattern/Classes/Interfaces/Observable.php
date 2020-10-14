<?php

    namespace ObserverPattern\Classes\Interfaces;

    use ObserverPattern\Classes\Interfaces\Observer as IObserver;

    interface Observable {

        public function register(IObserver &$observer);
        public function unregister(IObserver &$observer);
        public function notify();
    }