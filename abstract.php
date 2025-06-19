<?php 
/**
 *  What is an Abstract Class?
 * An abstract  class in php is a special type of class that cannot be instantiated on its own 
 * its designed to be extended by other classes , and it serves as blueprint for its subclasses
 *  An abstract can define methods (both abstract and non-abstract).
*/

/**
 * Key Characteristics of Abstract Classes:
 * Abstract classes cannot be instantiated directly.
 * They can have have both abstract methods and concrete methods  (which have implementation)
 * the child class must be implemented all  abstract methods  
 * the concrete methods not nessaray to be  implemented.
*/


/**
 * Why Use Abstract Classes? 
 * Inforce the consistency .
 * flexibility 
*/

/**
 * How to Define and Use Abstract Classes in PHP
 *  Basic Syntax 
 * In php we can define the abstract class  by using the abstract method
*/

abstract class Animal
{
 
   // Abstract method - must be implemented in child classes 
   abstract public function makeSound() :string;

   // Concrete method - can be inherited as-is or overridden
   public function move () :string 
   {
     return "The animal moves.";
   }
    
}

class Dog extends  Animal 
{
    // Implement the abstract method
    public function makeSound() :string 
    {
        return "Bark!";
    }
}

class Cat extends Animal
{
    // Implement the abstract method
    public function makeSound(): string
    {
        return "Meow!";
    }
}

/**
 * Abstract Class Animal: Defines an abstract method makeSound() and a concrete method move().
 *  Concrete Classes Dog and Cat: Both extend Animal and must implement the abstract method makeSound(). 
 *  They automatically inherit the move() method from Animal, though they could override it if needed.
*/
$dog = new Dog();
echo $dog->makeSound(); // Output: Bark!
echo "</br>";
echo $dog->move();      // Output: The animal moves.

// Advanced Usage of Abstract Classes

abstract class Vehicle 
{
    protected  string $brand;

    public function __construct(string $brand)
    {
       $this->brand = $brand;
    }

    public function getBrand() :string
    {
        return $this->brand;
    }

    abstract public function startEngine() :string;
}

Class Car  extends Vehicle 
{
  public function startEngine() :string
  {
    return "The engine of the {$this->getBrand()} car is starting.";
  }
}

 
echo "</br></br></br>";
 $car =  new Car('Toyota');
  
 echo $car->getBrand();
 echo "</br></br></br>";
 echo $car->startEngine();

?>