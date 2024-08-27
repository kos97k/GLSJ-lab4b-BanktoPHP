<?php
class ATMTransactions {
    private $transactionId;
    private $date;
    private $type; // "deposit" or "withdrawal"
    private $amount;
    private $postBalance;

    public function __construct($transactionId, $date, $type, $amount, $postBalance) {
        $this->transactionId = $transactionId;
        $this->date = $date;
        $this->type = $type;
        $this->amount = $amount;
        $this->postBalance = $postBalance;
    }

    
    public function modifies() {
        return false;
    }
}
?>
