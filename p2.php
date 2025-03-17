<?php
session_start();
$sn=$_POST["t1"];
$n=$_POST["t2"];
$c=$_POST["t3"];
$_SESSION["sno"]=$sn;
$_SESSION["name"]=$n;
$_SESSION["class"]=$c;
?>
<html>
    <body>
         <form method="post" action="p3.php">
          <h1>mark</h1>
             <hr>
             php:
              <input type="number" value="t4"><br>
             ds:
              <input type="number" value="t5"><br>
            cpp:
              <input type="number" value="t6"><br>
            RDBMS:
              <input type="number" value="t7"><br>
              <input type="submit" value="result"><br>
    </body>
</html>