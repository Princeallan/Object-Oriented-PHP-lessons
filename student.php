
<?php


// __get() is utilized for reading data from inaccessible properties
// It accepts one argument, which is the name of the property


   class Student {
       public $age;
       public $reg_no;
       // public $name;


       public function __get($var) {

           echo "Not able to retrieve $var ..\n";
       }

   }

   $person = new Student;

   return $person->name;

?>