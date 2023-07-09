<?php
namespace DecoratorEgE1;

/**Декораторы могут выполнять свое поведение до или после 
 * вызова обернутого объекта
 */

 class ConcreteDecoratorB extends Decorator
 {
   public function operation()
   {
     return "ConcreteDecoratorB(" . parent::operation() . ")";
   }

 }