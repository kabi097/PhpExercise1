<?php

class NumberInput {
    private $array = [];

    function __construct($array) {
        $this->array = array_merge($this->array, array_filter($array,'is_int'));
    }

    public function addNumber($number) {
        return array_push($this->array, $number);
        $this->array;
    }

    function addNumbers(Array $array) {
        $this->array = array_merge($this->array, array_filter($array,'is_int'));
        return $this->array;
    }

    public function threeTimesEven() {
        //Check if three times even numbers is bigger than double the odd numbers
        return 3*array_sum(array_filter($this->array, function($value) { return !($value & 1); })) > 2*array_sum(array_filter($this->array, function($value) { return $value & 1; }));
    }
}