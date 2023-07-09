<?php
namespace FactoryMethodEgE1;

/**
 * Паттерн фабричный метод
 * 
 * Назначение определяет общий интерфейс для создания объектов 
 * в суперклассе, позволяя подклассам изменять тип создаваемых 
 * объектов
 */

 /**
* Класс Создатель объявляет фабричный метод, который должен возвращать объект
 * класса Продукт. Подклассы Создателя обычно предоставляют реализацию этого
 * метода.R
*
*/

abstract class Creator
{
  /**
   * Создатель может также обеспечить реализацию
   * фабричного метода по умолчанию
   */
  abstract public function factoryMethod();

  public function someOperation()
  {
   //Вызываем фабричный метод, чтобы получить объект продукт
   $product = $this->factoryMethod();

   $result = 'Creator: The same creator code has just worked with ' . $product->operation();

   return $result;
  }
  
    


  
 



}