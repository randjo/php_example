<?php

class Student extends Person{
    
    private $fNumber;
    
    function __construct($name, $age, $fNumber) {
        parent::__construct($name, $age);
        $this->fNumber = $fNumber;
    }
            
    function getFNumber() {
        return $this->fNumber;
    }

    function setFNumber($fNumber) {
        $this->fNumber = $fNumber;
    }
    
    public function introduceYourSelf() {
        echo 'I am student. ';
        parent::introduceYourSelf();
        echo ' My fNumber is ' . $this->getFNumber();
    }
    
    public function __toString() {
        echo 'I am student. ';
        echo parent::__toString();
        return ' My fNumber is ' . $this->getFNumber();
    }
}