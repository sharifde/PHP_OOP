<?php
/**
 * All methods declared in an interface must be public , this is the nature of interface
 *  To implement  an interface  implements  are used 
 * 
*/

// PHP - What are Interfaces?/

/**
 * In php , an interface is a contract that defines a set of methods a  class will be
 * be implemented 
 * Interfaces only declare methods, not their bodies
 * All methods in an interface must be public.
 * A class can implement multiple interfaces.
 * Interfaces cannot have properties or constructors.
 * Used to achieve polymorphism and multiple inheritance behavior.
 * 
*/

echo "
    <pre>
    <h3>
        /**
         * In php , an interface is a contract that defines a set of methods a  class will be
         * be implemented 
         * Interfaces only declare methods, not their bodies
         * All methods in an interface must be public.
         * A class can implement multiple interfaces.
         * Interfaces cannot have properties or constructors.
         * Used to achieve polymorphism and multiple inheritance behavior.
         * 
        */
    </h3>    
   </pre>
";


echo " 
<h3>    
   <pre> 
        /** 🧠 Why Use Interfaces?
            *    Standardize method names across unrelated classes.
        
            *    Helps with dependency injection and decoupling.

            *    Useful in design patterns (e.g., Repository, Strategy).

            *   Promotes extensibility and testability.
        */
   </pre>  
</h3>            
";


interface Logger {
  public function log (string  $message) :string;
}
// Any class that implements Logger interface  must be define the log method

class FileLogger implements Logger {
     public function log(string  $message) :string
     {
        echo "Logging to a file: ";
     }
}


// 🔄 Example with Multiple Interfaces:

interface Printable  {
     public function  print();
}

interface Scannable {

    public function scan();
}

class PrinterScanner implements  Printable ,Scannable {

    public function  print(){
        echo " this is the result of the print method  of the printAble interface";
    }

    public function scan(){
        echo "This is result of hte Scanable interface  function";
    }

}


//   Create the object of the PrinterScanner class


$PrinterScannerObj  = new PrinterScanner();


echo $PrinterScannerObj->print();
echo "</br>";
echo $PrinterScannerObj->scan();

?>