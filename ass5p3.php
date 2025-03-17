<html>
  <body>
        <form method="post" acton="#">
              enter phone number:
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
    die("phone number having number only");
if(!(strlen($p)==10))
   die("phone number length is 10");
 
     echo("<br>ok...phone number =".$p);
       


?>