<?php
namespace BuilderEgE1;

/**
 * Классы Конкретного Строителя следуют интерфейсу Строителя и предоставляют
 * конкретные реализации шагов построения. Ваша программа может иметь несколько
 * вариантов Строителей, реализованных по-разному.
 */

class ConcreteBuilder1 implements Builder
{

   private $product;

   /**
     * Новый экземпляр строителя должен содержать пустой объект продукта,
     * который используется в дальнейшей сборке.
     */

   public function __construct()
   {
       $this->reset();
   }

   public function reset()
   {
       $this->product = new Product1();
   }

   /**
     * Все этапы производства работают с одним и тем же 
     * экземпляром продукта.
     */

    public function producePartA()
    {
        $this->product->parts[] = "PartA1";
    }

    public function producePartB()
    {
        $this->product->parts[] = "PartB1"; 
    }

    public function producePartC()
    {
        $this->product->parts[] = "PartC1"; 
    }

    /** Как правило, после возвращения конечного результата клиенту, экземпляр
     * строителя должен быть готов к началу производства следующего продукта.
     * Поэтому обычной практикой является вызов метода сброса в конце тела
     * метода getProduct. Однако такое поведение не является обязательным, вы
     * можете заставить своих строителей ждать явного запроса на сброс из кода
     * клиента, прежде чем избавиться от предыдущего результата.
     */

     public function getProduct()
     {
       $result = $this->product;
       $this->reset();

       return $result;
     }

}