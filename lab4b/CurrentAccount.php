<?php
require_once 'Account.php';

class CurrentAccount extends Account {
    public function __construct($number, $balance) {
        parent::__construct($number, $balance);
    }

    // Method to withdraw money from the account
    public function withdraw($amount) {
        // Placeholder implementation
        return false;
    }
}
?>
