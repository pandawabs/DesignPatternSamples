<?php

    namespace ObserverPattern\Classes\Interfaces;

    interface Observable {

        public function register(&$observer);
        public function unregister(&$observer);
        public function notify();
    }