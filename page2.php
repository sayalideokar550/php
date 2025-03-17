<?php
session_start();
 $n=$_POST["t1"];
 $add=$_POST["t2"];
 $m=$_POST["t3"];
 $_SESSION["name"]=$n;
 $_SESSION["add"]=$add;
 $_SESSION["mob"]=$m;
?>


<html>
   <body>
       <form method="POST" action="page3.php">
            <h1>Product details</h1>
                      Enter product name:
                        <input type="text" name="t1"><br>
                    price:
                            <input type="text" name="t2"><br>
                         Quantity:
                          <input type="text" name="t3"><br>
                       <input type="submit" value="Next"><br>
    </body>
</html>