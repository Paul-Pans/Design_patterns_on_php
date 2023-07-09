<?php
namespace CommandEgE1;

/**Но есть и команды, которые делегируют более сложные операции другим
 * объектам называемым получателями
 */

class ComplexCommand implements Command
{

  private $receiver;

  /**Данные о контектсе, необходимые для запуска методов получателя */

  private $a;

  private $b;

  /**Сложные команды могут принимать один или несколько объектов получателей вместе с 
   * другими данными о контексте через контсруктор
   */

  public function __construct(Receiver $receiver, string $a, string $b)
  {
      $this->receiver = $receiver;
      $this->a = $a;
      $this->b = $b;

  } 

  /** Команды могут делигировать выполнение любым методом получателя*/

  public function execute(): void
  {
      echo "ComplexCommand: Сложные вещи должны выполняться объектом приемником <br>";
      $this->receiver->doSomething($this->a);
      $this->receiver->doSomethingElse($this->b);
  }

}