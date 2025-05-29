<?php 
 //A constructor allows you to initialize an object's properties upon creation of the object.
/**
 * if you create construct i will be call automatically   , when object 
 * is created .
 *  __construct()
 * Note construct function start with double underscores(__)!
 */


class Fruit
{
    
    // create a private  properties and assigin value it throught
    // function 
    private $name;
    private $color;

    // define a construct function 

    function __construct($name , $color){
        $this->name = $name;
        $this->color = $color;
    }
    
    // get the set properties of a object.
    public function get_properties()
    { 
        echo "<br/><br/>" ;
      echo("Name :" . $this->name);
      echo "<br/><br/><br/>" ;
      echo("Color : " .  $this->color);
    }
}

$apple  = new Fruit("Apple"  ,"color");

echo $apple->get_properties();

?>