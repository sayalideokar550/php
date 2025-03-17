<html>
   <form method="POST" action="#">
          Enter string:
          <input type="text" name="t1"><br>
       <input type="submit" value="check">
     </form>
</html>
<?php
   $s=$_POST["t1"];
      $c1=0;
$c2=0;
$c3=0;
$c4=0;
$c5=0;
    for($i=0;$i!=NULL;$i++)
    {
            if($s[$i]=='A'||$s[$i]=='E'||$s[$i]=='I'||$s[$i]=='O'||$s[$i]=='U'||$s[$i]=='a'||$s[$i]=='e'||$s[$i]=='i'||
                          $s[$i]=='u'||$s[$i]=='o')
                  {
                       if($s[$i]=='A'||$s[$i]=='a')
                               $c1++;
                  else if($s[$i]=='E'||$s[$i]=='e')
                                $c2++;
                 else if($s[$i]=='I'||$s[$i]=='i')
                                $c3++;
                else if($s[$i]=='O'||$s[$i]=='o')
                                $c4++; 
                 else if($s[$i]=='U'||$s[$i]=='u')
                                $c5++;
                   }
    }
        echo("<br>number of count A=".$c1);       
        echo("<br>number of count E=".$c2);
        echo("<br>number of count I=".$c3);
        echo("<br>number of count O=".$c4);
        echo("<br>number of count U=".$c5);




?>