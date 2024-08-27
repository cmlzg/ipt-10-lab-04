<?php
abstract class Account {
    protected $accountNumber;
    protected $balance;

    public function __construct($accountNumber, $balance) {
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }

    abstract public function withdraw($amount);
    abstract public function deposit($amount);

    public function getAccountNumber() {
        return $this->accountNumber;
    }

    public function getBalance() {
        return $this->balance;
    }
}
?>
