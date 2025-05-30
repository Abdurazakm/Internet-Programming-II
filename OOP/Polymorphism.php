<?php
class Animal {
 public function makeSound() {
 echo "Some sound";
 }
}
class Cat extends Animal {
 public function makeSound() {
 echo "Meow";
 }
}
$pet = new Cat();
$pet->makeSound(); // Output: Meow