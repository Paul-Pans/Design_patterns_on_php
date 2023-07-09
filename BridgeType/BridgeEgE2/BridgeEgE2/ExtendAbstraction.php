<?php
namespace BridgeEgE2;

/**
 * Можно расширить абстракцию без изменения классов реализации
 */
class ExtendAbstraction extends Abstraction
{
  public function operation()
  {
    return "ExtendAbstraction: Extend operation with:" .
      $this->implementation->operationImplementation();
  }

}