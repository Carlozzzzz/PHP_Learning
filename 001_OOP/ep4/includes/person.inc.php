<?php

class Person {
    protected $first = "Carliis"; // access with same class and child class
    public $last = "Nielsen";
    private $age = "28";

}

class Pet extends Person{
    public function owner() {
        $message = $this->last;
        return $message;
    }
}