<?php
class Person
{
    public $age; // Public: Accessible from anywhere
    private $name; // Private: Accessible only inside this class
    protected $email; // Protected: Accessible in this class and child classes
    // Public method to set private and protected properties
    public function setDetails($name, $email, $age)
    {
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
    }
    // Public method to get private and protected properties
    public function getDetails()
    {
        return "Name: {$this->name}, Email: {$this->email}, Age: {$this->age}";
    }
}
// Child class
class Employee extends Person
{
    public function getEmail()
    {
        // Accessing protected property inside child class
        return $this->email;
    }
}
$person = new Person();
$person->age = 30; // Allowed (public)
$person->setDetails("Alice", "alice@example.com", 30);
echo $person->getDetails(); // Works
// Direct access
echo $person->age; // Allowed (public)
// echo $person->name; // Error (private)
// echo $person->email; // Error (protected)
$employee = new Employee();
$employee->setDetails("Bob", "bob@example.com", 28);
echo $employee->getEmail(); // Access protected property from child class