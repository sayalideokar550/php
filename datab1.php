<html>
<form method="POST" action="#">
   enter roll no:
<input type="text" name="t1"><br>
 enter name:
<input type="text" name="t2"><br>
 enter address:
<input type="text" name="t3"><br>
 enter persentage:
<input type="text" name="t4"><br>
<input type="submit">
</form>
</html>
<?php
$r=$_POST["t1"];
$n=$_POST["t2"];
$a=$_POST["t3"];
$p=$_POST["t4"];
$con=mysqli_connect("localhost","root","");
 if($con==false)
     die("error in connection");
     mysqli_select_db($con,"cdj");
$k=mysqli_query($con,"Insert into student values(rno=$r,name='$n',address='$a',pre=$p)");
  if($k==true)
      echo("recored inserted....");


?>