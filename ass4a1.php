<?php
function raise($x,$y)
{   
        $s=1;
      for($i=1;$i<=$y;$i++)
         {
                $s=$s*$x;
        }
         echo("x raise to y=".$s);
}
       raise(4,5);
?>































