<?php
class Book {
 public $title;
 public function __construct($title) {
 $this->title = $title;
 }
}
$book = new Book("PHP Programming");
echo $book->title; // Output: PHP Programming
