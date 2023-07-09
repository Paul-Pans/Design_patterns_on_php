<?php
namespace AbstractFactoryEgE2;

/**
* Конкретные продукты создаются соответствующими конкретным фабрикам
*/

class ConcreteProductB1 implements AbstractProductB
{
  public function usefulFunctionB()
  {
      return "Результат продукт Б1. <br>";
  }

  /**
   * Продукт Б1 может корректно работать только с продуктом А1.
   * тем не менее, он принимает любой экземпляр Абстрактного продукта А
   * в качестве аргумента.
   */

  public function anotherUsefulFunctionB(AbstractProductA $collaborator)
  {
      $result = $collaborator->usefulFunctionA();

      return "Результат взаимодействия Б1 с ({$result})";
  }


}
