<?php

class DeliveryCalculator {
    private $rules;

    public function __construct($rules) {
        $this->rules = $rules;
    }

    public function getDeliveryCost($total) {
        foreach ($this->rules as $threshold => $cost) {
            if ($total < $threshold) {
                return $cost;
            }
        }
        return 0; // Free delivery
    }
}


?>