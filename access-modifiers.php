<?php 
    // public - the property or method can be accessed from everywhere. This is default
    // protected - the property or method can be accessed within the class and by classes derived from that class
    // private - the property or method can ONLY be accessed within the class

    // In PHP, you cannot directly access 
    // private or protected methods and properties from outside the
    // class using the object, due to visibility constraints.
   
    class Test {
         
       public $publicProperty = " this is the public propery witch is is Access  outside the class";

         private  $secret = "Hidden";

         protected function SayHi(){
            return("Hi");
         }
    }

    // Create oject of the test  class
    $obj = new Test;

    //  Call the $publicProperty verible  using the the class object and it will be Accessible.
    echo $obj->publicProperty;

    // // Call  private  $secret verible it will through the Fetel error.
    echo $obj->secret;

    // Call  protected  SayHi() function it will through the Fetel error.
    echo $obj->SayHi();

?>