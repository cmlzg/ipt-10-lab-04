<?php
class ATM {
    private $location;

    public function __construct($location) {
        $this->location = $location;
    }

    public function getLocation() {
        return $this->location;
    }
}
?>
