


<?php
     class book
    {
       public $bid;
       public $bname;
       public $publication;
       public $author;
       public $price;
       function accept($bid,$bname,$publication,$author,$price)
        {
                  $this->bid=$bid;
                  $this->bname=$bname;
                  $this->publication=$publication;
                  $this->author=$author;
                  $this->price=$price;
        }
      function disp()
       {
                  echo("<br> book id =$this->bid");
                  echo("<br> book name=$this->bname");
                  echo("<br> publication=$this->publication");
                  echo("<br> author=$this->author");
                  echo("<br> price=$this->price");
       }
   }
     $ob=new book();
      $ob->accept(1,"php","nirali","mr.sham",300);
    $ob->disp();
?>

