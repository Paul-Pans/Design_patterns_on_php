<?php
namespace ObserverEgE1;

/**Конкретные наблюдатели реагируют на обновления, 
 * выпущенные Издателем, к которому они прикреплены.
 */

class ConcreteObserverA implements \SplObserver
{
  public function update(\SplSubject $subject): void
  {
    if ($subject->state < 3){
        echo "ConcreteObserverA: Реакция на событие  <br>";
    }
  }

}