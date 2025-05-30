<?php
class Math
{
    public static $pi = 3.14;
    public static function add($a, $b)
    {
        return $a + $b;
    }
}
echo Math::$pi; // Output: 3.14
echo Math::add(5, 10); // Output: 15
// Example of static property and method usage
// Static properties and methods can be accessed without creating an instance of the class
// Static properties are shared across all instances of the class
// Static methods can be called directly using the class name
// Static properties and methods are useful for utility functions or constants
// Static properties can be modified, but changes will affect all instances
// Static methods cannot access non-static properties or methods directly
// Static properties and methods are often used for constants or utility functions
