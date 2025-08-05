<?php

class Person {
    private $name;
    private $age;

    public function getName(){
        return $this->name;
    }

    public function setName($newName) {
        $this->name = $newName;
        return $this->getName();
    }

    public function getAge(){
        return $this->age;
    }

    public function setAge($newAge) {
        $this->name = $newAge;
        return $this->getAge();
    }

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function toString() {
        return "Person name: $this->name <br> Person age: $this->age";
    }
}

$p1 = new Person("Thiago", 20);
$p2 = new Person("Marcos", 20);
$p3 = new Person("Gabriel", 21);

echo 'Nome antigo: ' . $p1->getName() . '<br>';
echo 'Novo nome: ' . $p1->setName("Thiago Pedro Padilha") . '<br>';

/*

$people[] = $p1;
$people[] = $p2;
$people[] = $p3;


foreach ($people as $p) {
    echo $p->toString() . '<br><br>';
}

*/