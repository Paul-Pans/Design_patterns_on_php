<?php
namespace MementoEgE1;

/**Конкретный снимок содержит инфраструктуру для хранения
 * состояния создателя.
 */

class ConcreteMemento implements Memento
{
  private $state;

  private $date;

  public function __construct(string $state)
  {
      $this->state = $state;
      $this->date = date('Y-m-d H:i:s');
  }

  /**Создатель использует этот метод, когда восстанавливает свое состояние */

  public function getState(): string
  {
      return $this->state;
  }

  /**Остальные методы используются опекуном для отображения метаданных */

  public function getName(): string
  {
      return $this->date . "/ (" . substr($this->state, 0, 9) . "...)";

  }

  public function getDate(): string
  {
      return $this->date;
  }

}