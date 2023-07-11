<?php

class Home {

    // Properties
    private $barangay;
    private $street;

    public function __construct($barangay, $street) {
        $this->barangay = $barangay;
        $this->street = $street;
    }

    // Method
    public function setBarangay($barangay) {
        $this->barangay = $barangay;
    }

    public function getBarangay() {
        return $this->barangay;
    }

    public function displayInfo(){
        return "Barangay : {$this->barangay}, Street : {$this->street} <br>";
    }

}