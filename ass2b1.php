<?php
$n=6;
for($i=2;$i<$n;$i++)
{  
    if($n%$i==0)
      {  
           break;
       }
}
if($i==$n)
  echo("number is prime");
else
  echo("number is not prime");
?>