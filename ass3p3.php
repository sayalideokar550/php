<?php
     $a=array(87,95,73,92,61);
    $f=0;
      for($i=0;$i<5;$i++)
       {
                 if($a[$i]<0)
                        $f++;
        }
     if($f==0)
        echo("<br>array element are positive");
    else
          echo("<br>array element are negative");
         
        echo("<br>sum of array element=".array_sum($a));

?>