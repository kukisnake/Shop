<?php

class ItemClass {
    
    private $id;
    private $price;
    private $description;
    private $availability;
        
    public function __construct() {
        $this->id = -1;
        $this->price = 0;
        $this->description = "";
        $this->availability = false;
    }

    public function getId() {
        return $this->id;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getAvailability() {
        return $this->availability;
    }

    public function setPrice($price) {
        $this->price = $price;
        return $this;
    }

    public function setDescription($description) {
        $this->description = $description;
        return $this;

    }

    public function setAvailability($availability) {
        $this->availability = $availability;
        return $this;

    }
    
}