<?php
$n=623;
echo("revers number=");
$r=0;
while((int)$n>0)
{  $d=$n%10;
    $r=($r*10)+$d;
    $n=(int)$n/10;
}
echo("$r");
?>