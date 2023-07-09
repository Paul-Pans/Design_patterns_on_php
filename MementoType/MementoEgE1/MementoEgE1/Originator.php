<?php
namespace MementoEgE1;

/**
 * Originator - создатель. 
 * Создатель содержит некоторое важное состояние, которое может
 * со временем меняться. Он также объявляет метод сохранения состояния внутри
 * снимка и метод восстановления их него.
 */

class Originator
{
  /**
   * @var string Для удобства состояние создателя хранится внутри одной
   * переменной.
   */

  private $state;

  public function __construct(string $state)
  {
      $this->state = $state;
      echo "Originator: My inital state is: {$this->state} \n";
  }

  /**
   * Логика создателя может повлиять на его внутренее состояние. 
   * Поэтому клиент должен выполнить резервное копирование состояния с помощью
   * метода save перед запуском бизнес логики.
   */

  public function doSomething(): void
  {
      echo "Originator: Im doing something important. \n";
      $this->state = $this->generateRandomString(30);
      echo "Originator: and my state has changed to this: {$this->state} <br>";

  } 

  private function generateRandomString(int $length = 10): string
  {
    return substr(
        str_shuffle(
         str_repeat(
           $x = 'qwertyasdfgzxcvb',
           ceil($length / strlen($x))  
         )
        ),
        1,
        $length,
    );

  }

  /**Сохраняет текущие состояние внутри снимка */
  public function save(): Memento
  {
      return new ConcreteMemento($this->state);
  }

  /** Восстанавливает состояние создателя из объекта снимка. */
  public function restore(Memento $memento): void
  {
    $this->state = $memento->getState();
    echo "Originator: My state has chnged to: {$this->state} </br>";  
  }

}


