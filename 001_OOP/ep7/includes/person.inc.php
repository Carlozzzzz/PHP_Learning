<?php

class Person {
    
    // Properties
    private $name;

    public function __construct($name) {
        $this->name = $name;
        echo "This class has instantiated <br>";
    }

    // Method
    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name . "<br>";
    }

    public function __destruct(){
        echo "This is the end of the class.<br>";
    }
}