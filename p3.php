<?php
 session_start();
    $sn=$_SESSION["sno"];
    $n=$_SESSION["name"];
     $c=$_SESSION["class"];

$p=$_POST["t4"];
$d=$_POST["t5"];
$c=$_POST["t6"];
$R=$_POST["t7"];
  echo("<br>student seat no=".$sn);
  echo("<br>student name =".$n);
  echo("<br>student class=".$c);
  echo("<br>php mark=".$p);
  echo("<br>DS mark=".$d);
  echo("<br>CPP mark=".$c);
  echo("<br>RDBMS mark=".$R);
?>