<?php
  $c1=0;
$c2=0;
 for($i=1;$i<=1000;$i++)
{
     if($i%2==0)
        $c1=$c1+1;
   else
      $c2=$c2+1;
}
  echo("<br> even count=".$c1);
  echo("<br> odd count=".$c2);

?>