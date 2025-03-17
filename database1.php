<?php
$con=mysqli_connect("localhost","root","");
  if($con==false)
   die("error in connection");
    mysqli_select_db($con,"sayali");
   $k=mysqli_query($con,"insert into student values(1,'om','shrirampur',88)");
$k=mysqli_query($con,"insert into student values(2,'sai','shirdi',48)");
$k=mysqli_query($con,"insert into student values(3,'ram','pune',67)");
$k=mysqli_query($con,"insert into student values(4,'sham','nashik',56)");
   if($k==true)
       echo("record inserted");
?>