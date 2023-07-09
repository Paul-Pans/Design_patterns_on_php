<?php
namespace MediatorEgE1;

/**
 * Конкретные посредники реализуют совместное поведение,  
 * координируя отдельные компоненты
 */

class ConcreteMediator implements Mediator
{
  private $component1;

  private $component2;

  public function __construct(Component1 $c1, Component2 $c2)
  {
      $this->component1 = $c1;
      $this->component1->setMediator($this);
      $this->component2 = $c2;
      $this->component2->setMediator($this);
  }

  public function notify(object $sender, string $event): void
  {
    if($event == "A") {
        echo "Посредник реагирует на А и запускает следующие операции<br><br>";
        $this->component2->doC();
    }

    if($event == "D") {
      echo "Посредник реагирует на Д и запускает следующие операции <br><br>";
      $this->component1->doB();
      $this->component2->doC();
    }


  }



}