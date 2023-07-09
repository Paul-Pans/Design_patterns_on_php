<?php
namespace DecoratorEgE1;

class ConcreteDecoratorA extends Decorator
{
  /**
   * Декораторы могут вызывать родительскую реализацию операции,
   * вместо того, чтобы вызвать обернутый объект напрямую. 
   * Такой подход упрощает расширение классов декораторов.
   */
   public function operation()
   {
       return "ConcreteDecoratorA(" . parent::operation() . ")";
   }

}