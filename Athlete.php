<?php

class Athlete extends Person{
    
    private $sport;
    
    function __construct($name, $age, $sport) {
        parent::__construct($name, $age);
        $this->sport = $sport;
    }
    
    function getSport() {
        return $this->sport;
    }

    function setSport($sport) {
        $this->sport = $sport;
    }
    
    public function introduceYourSelf() {
        echo 'I am athlete. ';
        parent::introduceYourSelf();
        echo ' My sport is ' . $this->getSport();
    }
    
    public function __toString() {
        echo 'I am athlete. ';
        echo parent::__toString();
        return ' My sport is ' . $this->getSport();
    }
}