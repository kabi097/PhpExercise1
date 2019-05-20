<?php

class NumberInput {
    private $array = [];

    function __construct(Array $array) {
        $this->addNumbers($array);
    }

    private function isNatural($number) {
        return is_int($number) && $number>=0;
    }

    public function addNumber($number) {
        if (!is_int($number)) {
            throw new InvalidArgumentException('NumberInput only accepts integers. Input was: '.$number);
        }
        array_push($this->array, $number);
        return $this->array;
    }

    function addNumbers(Array $array) {
        $array_int = array_filter($array,[$this, 'isNatural']);
        if ($array_int != $array) {
            throw new InvalidArgumentException('addNumbers only accepts array with integers only.');
        }
        $this->array = array_merge($this->array, $array_int);
        return $this->array;
    }

    public function threeTimesEven() {
        //Check if three times even numbers is greater than double the odd numbers
        return 3*array_sum(array_filter($this->array, function($value) { return !($value & 1); })) > 2*array_sum(array_filter($this->array, function($value) { return $value & 1; }));
    }
}