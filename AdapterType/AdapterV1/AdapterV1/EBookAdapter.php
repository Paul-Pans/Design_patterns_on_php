<?php
namespace AdapterV1;

class EBookAdapter implements Book
{

   public function __construct(protected EBook $eBook)
   {
     
   }

   /** Этот класс выполняет правильный перевод из одного интерфейса в другой. */

   public function open()
   {
       $this->eBook->unlock();
   }

   public function turnPage()
   {
       $this->eBook->pressNext();
   }

 /** обратите внимание на адаптированное поведение: EBook :: getPage () вернет два целых числа, но Book * поддерживает 
  * только получатель текущей страницы, поэтому мы адаптируем поведение здесь
*/
  public function getPage()
  {

    return $this->eBook->getPage()[0];
  }



}