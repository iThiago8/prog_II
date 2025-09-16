<?php

// Adds animals classes
spl_autoload_register(function ($class){
    $file = 'Models/Animals/' . $class . '.php';

    if (file_exists($file))
        require_once($file);
});

require_once('Models/Calculator.php');

//Animals

$snoopy = new Dog('Snoopy');

$snoopy->makeSound();
echo '<br>';

$smokey = new Cat('Smokey');
$smokey->makeSound();

//Calculator

$calc = new Calculator();

echo '<br><br>';
echo "Two integers sum: 2 + 5: " . $calc->sum(2, 5) . '<br>';

echo "Three integers sum: 2 + 5 + 6: " . $calc->sum(2, 5, 6) . '<br>';