<?php 
 echo "<pre>
        <h2> php  static  methods</h2> 
         <p> 
            php  static methods can be called directly - without createing the instance of the class
            Static methods are declared with the static keyword. Eg:
            class ClassName { 
               public static function staticMethod(){
                  echo 'this is the statice method result'
               }
            }
            // We can call staticMethod  using  the scope resolosion opertors
            ClassName::staticMethod();  
         </p>
      </pre>";

   //   Greeting class 
   class Greeting 
   {
        public  static  function wellcome()
        {
            return "Hello world !";
        }   
   }

   // Call static method 
   $result = Greeting::wellcome();
   echo $result;


   echo "
            <pre>
               <h2>
                   A Class can have both static and non-static methods . 
                   A static method can be accessed from a method method in the same class using the <span>self</span> 
                   keyword and double clon..
               </h2>
               <p>
                    the given examples we call the the static method  inside the the class using the 
                    self key word
                    if we call the static method  inside there class then we will 
                    use the  self key 

                    if we call the  static method outside the class  then we will 
                    first call the class name and the scope resulsion opertor.

               </p>
            </pre>
    
    ";


    class Test {
        public static function displayMessage() : string 
        {
            return "This is the result of the static method and its working properly ";
        }


        public function __construct(){
             self::displayMessage();
        }

        public function __toString(): string
        {
            return self::displayMessage(); // Define how object is converted to string
        }
    }

    // Create the object of the  test class

    $testObj = new  Test();

    echo $testObj;

    // Call static method from child class , use the parent keyword  inside the child class .
    
    echo "
     <pre>
        <h2>
           To call a static method from a child class, use the parent keyword inside the child class.
            Here, the static method can be public or protected.
        </h2>
     </pre>
    ";

   class domain 
   {
      protected static function  getWebsiteName()
      {
         return "W3Schools.com";
      }
   } 

   class domainW3 extends domain 
   {
     
        public $websiteName;

        public function __construct(){
            $this->websiteName = parent::getWebsiteName();
        }

   }

   // create object of  domainW3 ...
   $domainW3 = new domainW3;
   echo $domainW3 -> websiteName;

   // satatic  properties
   echo 
   "
      <pre>
           <h2>PHP OOP - Static Properties</h2>
            <p>
               static properties can be called directly without creating  an instance of a class 
               static properties are declared with the static keyword ..
               class ClassName
               {
                   public static  StaticPro  = ' this is the value of the static verible ';
               }
               To access a static property use the class name, double colon (::), and the property name:
               ClassName::staticProp;
            </p>
      </pre>  
   "; 
?>