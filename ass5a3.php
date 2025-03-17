<html>
  <body>
        <form method="post" acton="ass5a1.php">
          <h1>Employee details</h1>
              enter EMP name:
                 <input type="text" name="t1"><br>
              enter EMP address:
                 <textarea  name="t2"></textarea><br>
<hr>
       <h1> Earning details</h1>
              enter basic salary:
                 <input type="text" name="t3"><br>
              enter DA:
                 <input type="text" name="t4"><br>
             enter HRA:
                 <input type="text" name="t5"><br>
            <input type="submit" value="check"><hr>
   </body>
</html>
<?php
 $n=$_POST["t1"];
 $a=$_POST["t2"];
 $bsal=$_POST["t3"];
 $d=$_POST["t4"];
 $h=$_POST["t5"];
   $t=$bsal+$d+$h;
    echo("<br>");
     echo("<table border='1'>");
      echo("<tr>");
       echo("<td>Name</td>");
       echo("<td>$n</td>");   
      echo("</tr>");
      
      echo("<tr>");
       echo("<td>address</td>");
       echo("<td>$a</td>");   
      echo("</tr>");

      echo("<tr>");
       echo("<td>Basic salary</td>");
       echo("<td>$bsal</td>");   
      echo("</tr>");

      echo("<tr>");
       echo("<td>DA</td>");
       echo("<td>$d</td>");   
      echo("</tr>");

      echo("<tr>");
       echo("<td>HRA</td>");
       echo("<td>$h</td>");   
      echo("</tr>");
      echo("<tr>");

       echo("<td>Total Salary</td>");
       echo("<td>$t</td>");   
      echo("</tr>");
?>