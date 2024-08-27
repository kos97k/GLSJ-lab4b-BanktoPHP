<?php
abstract class Account {
    protected $number;
    protected $balance;

    public function __construct($number, $balance) {
        $this->number = $number;
        $this->balance = $balance;
    }

    
    public function deposit($amount) {
        return false;
    }

    
    public function withdraw($amount) {
        return false;
    }

    // Method to create a transaction record
    public function createTransaction($type, $amount) {
        return false;
    }
}
?>
