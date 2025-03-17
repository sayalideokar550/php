
<?php
     class student
    {
       public $rno;
       public $sname;
       public $per;
       function accept($rno,$sname,$per)
        {
                  $this->rno=$rno;
                  $this->sname=$sname;
                  $this->per=$per;
        }
      function disp()
       {
                  echo("<br> Roll no=$this->rno");
                  echo("<br> name=$this->sname");
                  echo("<br> per=$this->per");
       }
   }
     $ob=new student();
      $ob->accept(1,"sayali",84);
    $ob->disp();
?>




