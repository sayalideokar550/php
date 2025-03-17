<html>
  <body>
        <form method="post" acton="ass5a1.php">
              enter  name:
                 <input type="text" name="t1"><br>
              enter address:
                 <textarea  name="t2"></textarea><br>
              enter pincode:
                 <input type="text" name="t3"><br>
             Gender:
                 <input type="radio" name="r1" value="male">male<br>
                 <input type="radio" name="r1" value="female">female<br>
            <input type="submit" value="check">
   </body>
</html>
<?php
   if((empty($_POST["t1"]))&&(empty($_POST["t2"]))&&(empty($_POST["t3"]))&&(empty($_POST["r1"])))
   {
       die("<br>all fields are required");
   }
else 
 $n=$_POST["t1"];
 $a=$_POST["t2"];
 $p=$_POST["t3"];
 $g=$_POST["r1"];
     echo("name=$n");
     echo("address=$a");
     echo("pincode=$p");
     echo("gender=$g");
?>