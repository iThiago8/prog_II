<?php

namespace library_management\models;

class Book
{
    public $id;
    public $name;
    public $author;

    public function __construct($name, $author)
    {
        $this->name = $name;
        $this->author = $author;
    }
}