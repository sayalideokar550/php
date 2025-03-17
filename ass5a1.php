<html>
  <body>
        <form method="post" acton="#">
              enter font name:
                 <input type="text" name="t1"><br>
              enter background color name:
                 <input type="text" name="t2"><br>
              enter name:
                 <input type="text" name="t3"><br>
                 <input type="submit" value="ok">
   </body>
</html>
<?php
if(!(isset($_POST["t1"]))&&(isset($_POST["t2"]))&&(isset($_POST["t3"])))
  {
      die("fields are not set");
  }
else
    $f=$_POST["t1"];
     $c=$_POST["t2"];
     $n=$_POST["t3"];
    
     echo("<body bgcolor='$c' ></body>");
      echo("<font face='$f'>welcome $n</font>");
        ?>
     