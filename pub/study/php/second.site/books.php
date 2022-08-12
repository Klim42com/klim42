<?php
spl_autoload_register(function ($className){
    include 'classes/' . $className . '.php';
});
//require_once 'classes/Book.php';
$books = [];
$books [] = new Book(1, 'PHP 8', 'Tarasov A.V.', 1250, 'the fast start', 'World of books');
$books [] = new Book(2, 'PHP 8.1', 'Tarasov A.V.', 2500, 'the fast start', 'World of books');

//$books1->getHTML();
//$books2->getHTML();
$books[0]->getHTML();
$books[1]->getHTML();