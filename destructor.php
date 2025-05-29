<?php 
  /***
   * A destructor is called when the object is destructed or the script is stopped or exited.
   * If you create a __destruct() function, PHP will automatically call this function at the end of the script.
   * Notice that the destruct function starts with two underscores (__)!
   */
   
    class Fruit
    {
        public $name;
        public $color;

        function __construct($name) {
            $this->name = $name;
        }

        function __destruct() {
            echo " the object is destory.";
        }

        function get_name(){
            echo (" this is the name of object :" .  $this->name);
        } 

       


    }

    $apple = new Fruit("Apple");

    $apple->get_name();

?>