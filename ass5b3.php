<html>
  <body>
        <form method="post" acton="ass5a1.php">
          
              enter student name:
                  <input type="text" name="t1"><br>
              select language:
          <select name="t2[]" multiple="multiple">            
             <option value="java">java</option>
                <option value="python">pyhton</option>
                <option value="php">php</option>
                <option value="c">c</option>
              </select><br>
            
            <input type="submit" value="check"><hr>
   </body>
</html>
<?php
 $n=$_POST["t1"];
 $p=$_POST["t2"];
echo("<br>name=$n");
   foreach($p as $pr)
{
    echo("<br>selected language=".$pr);
}
  
?>