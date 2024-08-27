<?php
class Customer {
    private $name;
    private $customerId;

    public function __construct($name, $customerId) {
        $this->name = $name;
        $this->customerId = $customerId;
    }

    public function getName() {
        return $this->name;
    }

    public function getCustomerId() {
        return $this->customerId;
    }
}
?>
