<?php
class ATM {
    private $location;
    private $managedBy; 

    public function __construct($location, $managedBy) {
        $this->location = $location;
        $this->managedBy = $managedBy;
    }

    
    public function identifies() {
        return false;
    }

    
    public function transactions() {
        return false;
    }
}
?>
