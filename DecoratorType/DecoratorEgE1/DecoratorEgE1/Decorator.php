<?php
namespace DecoratorEgE1;

/**
 * Базовый класс декоратора следует тому же интерфейсу, что
 * и другие компоненты. Основная цель этого класса - определить
 * интерфейс обертки для всех конкретных декораторов. 
 * Реализация кода обертки может включать в себя поле
 * для хранения завернутого компонента и средства его
 * инициализации.
 */

class Decorator implements Component
{
  
  protected $component;

  public function __construct(Component $component)
  {
     $this->component = $component;  
  }

  /**
   * Декоратор делегирует всю работу обернутому компоненту.
   */

  public function operation()
  {
      return $this->component->operation();
  }

}