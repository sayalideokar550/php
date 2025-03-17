<html>
   <form method="POST" action="#">
         enter project name:
   <input type="text" name="t1">
  <input type="submit">
</html>
<?php
$con=mysqli_connect("localhost","root","");
      var_dump($con);
             if($con==false)
                      die("error");
            mysqli_select_db($con,"cdj");
     $p=$_POST["t1"];
      $k=mysqli_query($con,"select pname,ename,duration from emp,project,ep where emp.eno=ep.eno and project.pno=ep.pno and pname='$p'");
      while($row=mysqli_fetch_array($k))
        {
            echo("<br>project name=".$row[0]);
              echo("<br>emp name=".$row[1]);
              echo("<br>duration=".$row[2]);
              
}
  mysqli_close($con);
 ?>