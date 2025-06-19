<?php 
  class Fruit {
    public $name;
    public $color;
    // public function __construct($name, $color) {
    //   $this->name = $name;
    //   $this->color = $color;
    // }
    public function intro() {
      echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
  }
  
  class Strawberry extends Fruit {
    public $weight;
    public function __construct($name, $color, $weight) {
      $this->name = $name;
      $this->color = $color;
      $this->weight = $weight;
    }
    // public function intro() {
    //   echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram.";
    // }
  }
  
  $strawberry = new Strawberry("Strawberry", "red", 50);
  $strawberry->intro();


  echo "</br>    the given is the examples of the  overriding the inherited methods";
  
  // the given is the examples of the  overriding the inherited methods
  class Test {

    public function overRidMethod(){

      echo " this is the  content of the orver ride meethod and it will be change in the child classs and
       i hope its work properly  , is espected of the
      ";
    }

  }


  class TestChild  extends Test 
  { 
    public function overRidMethod()
    {
       echo " the content of the overRide method are change in the  TestChild class ";
    }
  }


  // Create the object of the TestChild class ...
  $objectOfTestChildClass =  new  TestChild;
  echo "</br>";

  // the final keyword 
  // The final keyword can be used to prevent class inheritance or to prevent method overriding.

  echo "The final keyword can be used to prevent class inheritance or to prevent method overriding.";
   
  
  // the Fruit class are now not be extends
  // final class Fruit {
  //   // some code
  // }

  //when Fruit  are extends  intro method will be not  override ....
  // class Fruit {
  //   final public function intro() {
  //     // some code
  //   }
  // }

?>