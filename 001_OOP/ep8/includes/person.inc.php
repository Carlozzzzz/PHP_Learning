<?php

class Person {

    // Properties
    private $name;
    private $eyeColor;
    private $age;

    // Static variables
    public static $drinkingAge = 21; // universal variable for all this Class

    public function __construct($name, $eyeColor, $age) {
        $this->name = $name;
        $this->eyeColor = $eyeColor;
        $this->age = $age;
    }

    // Method
    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function getDrinkingAge() {
        return self::$drinkingAge;
    }

    public function displayInfo(){
        return "Hi there I'm {$this->name}, my eye color is {$this->eyeColor}, and I am {$this->age}";
    }

    // Static Methods
    public static function setDrinkingAge($newDA) {
        self::$drinkingAge = $newDA;
    }

}