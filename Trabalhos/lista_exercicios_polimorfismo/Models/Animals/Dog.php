<?php

class Dog extends Animal{
    public function __construct($name) {
        parent::__construct($name);
    }

    public function getName():string {
        return $this->name;
    }

    public function setName($name):void {
        $this->name = $name;
    }

    public function makeSound():void {
        echo "Woof!";
    }
}