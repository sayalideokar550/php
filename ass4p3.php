<?php
  //calculate factorial
//declare function
function fact($n)
{
//initilized f=1
     $f=1;
   for($i=1;$i<=$n;$i++)
     {
       $f=$f*$i;    
     }
  echo("factorial=$f");
}
fact(5);
?>