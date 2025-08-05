<?php
// Importa a classe Book do namespace library_management\models

$b = new \library_management\models\Book("Percy Jackson", "Rick Riordan");

echo $b->name;