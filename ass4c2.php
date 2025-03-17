<?php
    //display arithmetic opretion using default parameters
     //declaring function
     function add($a=15,$b=45)
      {
             //add two numbers
               $c=$a+$b;
              //print result
              echo("addition=$c");
     }
   //function call with parameter
      echo("<br>without default parameter=");
     add(23,45);
    //function call without parameter
           echo("<br>default parameter=");
        add(5);
?>