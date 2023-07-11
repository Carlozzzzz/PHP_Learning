<?php

namespace Person;
class Person {

    // Properties
    private $name;

    // Method
    public function setName(string $name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

}