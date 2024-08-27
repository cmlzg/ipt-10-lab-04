<?php
require_once 'Account.php';

class CurrentAccount extends Account {
    public function withdraw($amount) {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
            return true;
        }
        return false;
    }

    public function deposit($amount) {
        $this->balance += $amount;
        return true;
    }
}
?>
