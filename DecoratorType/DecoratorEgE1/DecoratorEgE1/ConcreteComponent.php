<?php
namespace DecoratorEgE1;
/**
 * Конкретные Компоненты предоставляют реализацию поведения по 
 * умолчанию. Может быть несколько вариаций этих классов.
 * 
*/
class ConcreteComponent implements Component
{
  public function operation()
  {
      return "ConcreteComponent";
  }



}