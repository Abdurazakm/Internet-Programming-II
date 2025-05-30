<?php
class Animal
{
    public function sound()
    {
        echo "Animal sound";
    }
}
class Dog extends Animal
{
    public function bark()
    {
        echo "Woof!";
    }
}
$mydog = new Dog();
echo $mydog->sound();
echo $mydog->bark();