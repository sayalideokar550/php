<?php
session_start();
 $cn=$_SESSION["name"];
 $a=$_SESSION["add"];
 $mo=$_SESSION["mob"];
$pn=$_POST["t1"];
$pr=$_POST["t2"];
$q=$_POST["t3"];
  echo("<h1>BILL</h1>");
 echo("<br>Customer name=$cn");
 echo("<br>Customer address=$a");
 echo("<br>Customer mobail=$mo");
 echo("<br>product name=$pn");
 echo("<br>product price=$pr");
 echo("<br>product Quantity=$q");
  $t=$pr*$q;
 echo("<br>total bill=$t");
?>


