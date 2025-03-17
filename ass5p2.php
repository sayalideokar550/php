<html>
  <body>
        <form method="post" acton="#">
              enter PAN number:
                 <input type="text" name="t1"><br>
                 <input type="submit" value="ok">
   </body>
</html>
<?php
if(!(isset($_POST["t1"])))
  {
      die("fields are not set");
  }
else
    $p=$_POST["t1"];
  if(!filter_var($p,FILTER_VALIDATE_INT))
    die("pan number have number only");
else
     echo("<br>PAN number =".$p);
       


?>