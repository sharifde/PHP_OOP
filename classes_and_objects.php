<?php

// create a Fruit  class .
class Fruit  {
  
    // a class contain properties and method.create some 
    // methods and properties.

    //The $this keyword refers to the current object, and is only available inside methods.
    //Classes are nothing without objects! We can create multiple objects from a class.
    //  Each object has all the properties and methods defined in the class, but they will have different property values.

    //Objects of a class are created using the new keyword.

    public $name;
    public $color;

    // set the name and color pass both set_name_and_color
    // is a parameters
    public function set_name_and_color(string $name , string  $color){
        $this->name =$name;
        $this->color =$color;
    }

    // get the name and color
    public function get_name_and_color(){
        echo $this->name;
        echo "<br/>";
        echo $this->color;
    }
}

// Create object of the Fruit class..
$apple = new Fruit;
$apple->set_name_and_color('Apple' ,"red");
$apple->get_name_and_color();

?>