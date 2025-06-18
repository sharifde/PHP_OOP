<?php
/**
 *  Inheritance in OOP = When a class drivers from another
 *  The child class will inherit all the public and protected properties and methods from the parent class .
 *  In addition, it can have its own properties and methods.
 */
 
 /** 
 *  An inherited class can be define by extends keywords
 */
class SupperClass 
{

   public  $allAboutTheSupperClass= " this is the public verible that are exsist in the  Supper  class i want to aceess it on the  child  class";

}

class SubClass extends  SupperClass 
{
    public  $allAboutTheSubClass = " this is the public verible that are exsist in the  sub   class";
}
 
$objectOfsubClass =  new SubClass;

echo ($objectOfsubClass->allAboutTheSupperClass);

echo "<br/> <br/>";

echo ($objectOfsubClass->allAboutTheSubClass);


class Fruit {
    public $name;
    public $color;
    public function __construct($name, $color) {
      $this->name = $name;
      $this->color = $color;
    }
    public function intro() {
      echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
}

// Strawberry is inherited from Fruit
class Strawberry extends Fruit {
    public function message() {
      echo "Am I a fruit or a berry? ";
    }
}
$strawberry = new Strawberry("Strawberry", "red");
echo "<br/> <br/>";
$strawberry->message();
echo "<br/> <br/>";
$strawberry->intro();

// IF  the  both class consist constructors 

class Book {

   protected $title;

   public function __construct($title){
     $this->title = $title;
     echo "Book titled '{$this->title}' is created.<br/>";
   }

}

class Novel  extends Book 
{
  public function __construct($title , $author){
    parent::__construct($title);
    echo "Author: $author<br/>";
  }
}

echo "<br/> <br/>";

echo  "Output of the Novel class  <br/>";

$novel = new Novel("1984", "George Orwell");

// PHP - Overriding Inherited Methods
// Inherited methods can be overridden by redefining the methods (use the same name) in the child class.

?>