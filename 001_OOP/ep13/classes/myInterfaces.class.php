<?php

// Interfaces
interface PaymentInterface {
    public function payNow();
    public function paymentProcess();
}

interface LoginInterface {
    public function payNow();
    public function paymentProcess();
}

class Paypal implements PaymentInterface, LoginInterface{
    // code that runs the purchase...
    public function loginFirst() {
        echo "Log in first when using paypal...<br>";
    }
    public function payNow() {
        echo "This is paypal....";
    }
    public function paymentProcess() {
        $this->loginFirst();
        $this->payNow();
    }

}

class BankTransfer implements PaymentInterface, LoginInterface{
    // code that runs the purchase...
    public function loginFirst() {
        echo "Log in first when using paypal...<br>";
    }
    public function payNow() {
        echo "This is paypal....";
    }
    public function paymentProcess() {
        $this->loginFirst();
        $this->payNow();
    }

}

class Visa implements PaymentInterface{
    public function payNow() {
        echo "This is visa....";
    }
    public function paymentProcess() {
        $this->payNow();
    }
}

class Cash implements PaymentInterface{
    public function payNow() {
        echo "This is cash....";
    }
    public function paymentProcess() {
        $this->payNow();
    }
}

class BuyProduct {
    public function pay(PaymentInterface $paymentType) {
        $paymentType->paymentProcess();
    }
}


// Running of code...
$paymentTypeCash = new Cash();
$paymentTypePaypal = new Paypal();
$paymentTypeVisa = new Visa();

$buyProducts = new BuyProduct();
$buyProducts->pay($paymentTypePaypal);