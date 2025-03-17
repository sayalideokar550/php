
<?php
     class fruit
    {
       
       public $fname;
      public $color;
       public $price;
       function accept($fname,$price,$color)
        {
                  $this->fname=$fname;
                  $this->price=$price;
                   $this->color=$color;
        }
      function disp()
       {
                 
                  echo("<br> name=$this->fname");
                  echo("<br> price=$this->price");
 echo("<br> color=$this->color");
       }
   }
     $ob=new fruit();
      $ob->accept("apple",200,"red");
    $ob->disp();
?>




