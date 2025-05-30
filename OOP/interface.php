<?php
interface Shape {
    public function area(); // only declaration
}

class Circle implements Shape {
    public function area() {
        return "Calculating area of Circle";
    }
}

class Square implements Shape {
    public function area() {
        return "Calculating area of Square";
    }
}
