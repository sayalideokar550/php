<html>
    <body>
        <form method="post" action="#">
           enter roll no:
          <input type="text" name="t1"><br>
         <input type="submit" value="secrch">
 </body>
</html>
<?php
 $dsn="mysql://localhost/cdj";
$con=DB::connect($dsn);
if(DB::iserror($con))
{
die("error ");
}
$no=$_POST["t1"];
$res=$con->query("select * from student where rno=$no");
if($row=$res->fetchrow())
{
  echo("name=".$row[1]);
  echo("class=".$row[2]);
}
 else
   {
        echo("record not found");
}
$rea->free();
$con->disconect();
?>