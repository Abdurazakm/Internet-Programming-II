<?php
abstract class Animal {
    abstract public function makeSound(); // only declaration

    public function sleep() { // regular method
        echo "Sleeping...";
    }
}

class Dog extends Animal {
    public function makeSound() {
        echo "Bark!";
    }
}
