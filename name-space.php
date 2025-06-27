<?php 

echo "
   <pre>
     <h1>
      Note: A namespace declaration must be the first thing in the PHP file. The following code would be invalid:
     </h1>
     <h4>
        In PHP, a namespace is a way to group related classes, functions, and constants under a unique name — kind of like putting files into folders.
        📦 Purpose:
        Avoid name conflicts between classes/functions with the same name in different libraries or parts of your code.

        Help organize code better, especially in large applications.
     </h4>
   </pre>
";

include('name-space1.php');
echo "</br>";
include('name-space2.php');
echo "</br>";
 echo "name space main file ";

 $obj1 = new  namespace1\User;
  echo "</br>"; 
 echo $obj1->getName();
?>