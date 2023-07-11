<?php

class FirstClass {
    // Properties
    const EXAMPLE = "You can't change this!";

    // Methods
    public static function test() {
        $testing = "This is a test!";
        return $testing;
    }
}

class SecondClass extends FirstClass{
    // Properties
    public static $staticProperty = "A static property!";

    // Methods
    public static function anotherTest() {
        echo parent::EXAMPLE . "<br>";
        echo self::$staticProperty;
    }

}

// Testing for FirstClass
$a = FirstClass::test();
echo $a;
echo "<br><br>";

// Testing for SecondClass
$b = SecondClass::EXAMPLE;
$c = SecondClass::anotherTest();
echo $c;
