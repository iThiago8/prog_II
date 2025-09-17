<?php

abstract class Animal
{
    protected string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract protected function makeSound(): void;
}


class Cat extends Animal
{
    public function __construct($name)
    {
        parent::__construct($name);
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function makeSound(): void
    {
        echo "Meow!";
    }
}


class Dog extends Animal
{
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function makeSound(): void
    {
        echo "Woof!";
    }
}


$snoopy = new Dog('Snoopy');

$snoopy->makeSound();
echo '<br>';

$smokey = new Cat('Smokey');
$smokey->makeSound();