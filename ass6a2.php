Write a PHP script to check mobile number entered by the user is valid or not and
display an appropriate message
<html>
     <body>
          <form method="post" action="#">
               enter username:
                 <input type="text" name="t1"><br>
                    enter possword:
                 <input type="password" name="t2"><br>
                <input type="submit">
   </body>
</html>
<?php
  $n=$_POST["t1"];
 $p=$_POST["t2"];
    if($n=="sayali"&&$p==123)
      echo("valid ");
  else
     echo("invlid");
?>