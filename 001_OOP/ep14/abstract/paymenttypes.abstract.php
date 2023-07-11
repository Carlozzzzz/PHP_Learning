<?php
abstract class Visa { // cannot create instance
    public function visaPayment() {
        return "Perform a payment";
    }

    abstract public function getPayment();
}