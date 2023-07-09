<?php
namespace StateEgE1;

/**
 * Конкретные состояния реализуют различные модели поведения, связанные с
 * состоянием контекста.
 */


class ConcreteStateB extends State
{
  
  public function handle1(): void
  {
      echo "ConcreteStateB handles request1 <br>";
  }

  public function handle2(): void
  {
    echo "ConcreteStateB handles request2 <br>";
    echo "ConcreteStateB wants to change the state of the context <br>";
    $this->context->transitionTo(new ConcreteStateA());
  }


}