<?php
$n=256;
$n1=$n;
$s=0;
while((int)$n>0)
{  $d=$n%10;
    $s=$s+$d*$d*$d;
    $n=(int)$n/10;
}
if($s==$n1)
echo("number is armstrong");
else
echo("number is  not armstrong");
 
?>