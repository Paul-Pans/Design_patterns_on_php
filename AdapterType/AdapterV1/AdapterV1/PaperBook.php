<?php
namespace AdapterV1;

class PaperBook implements Book
{
  
   private int $page;

   public function open(){
       
    $this->page = 1;
   }

   public function turnPage()
   {
     $this->page++;

   }

   public function getPage()
   {

     return $this->page;
   }

}
