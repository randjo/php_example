<?php

class Person implements IIntroducable{
    
    private $name;
    private $age;
    private static $nationality = 'BG';
    
    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    
    function getName() {
        return $this->name;
    }

    function getAge() {
        return $this->age;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setAge($age) {
        $this->age = $age;
    }
    
    static function getNationality() {
        return self::$nationality;
    }

    static function setNationality($nationality) {
        self::$nationality = $nationality;
    }
    
    public function introduceYourSelf() {
        echo 'My name is ' . $this->getName() . '. I am ' . $this->getAge()
                . ' years old. My nationality is ' . $this->getNationality() . '.';
    }
    
    public function __toString() {
        return 'My name is ' . $this->getName() . '. I am ' . $this->getAge()
                . ' years old. My nationality is ' . $this->getNationality() . '.';
    }
}