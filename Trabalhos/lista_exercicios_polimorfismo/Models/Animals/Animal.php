<?php

abstract class Animal {
    protected string $name;

    public function __construct($name) {
        $this->name = $name;
    }

    abstract protected function makeSound(): void;
}