<?php
echo("perfect number=");
for($i=1;$i<=100;$i++)
{ 
     $n1=$i;
      $s=0;
     for($j=1;$j<$i;$j++)
    if($i%$j == 0)
      {  
          $s=$s+$i;
       }
if($s==$n1)
 echo("$i<br>");

}
?>