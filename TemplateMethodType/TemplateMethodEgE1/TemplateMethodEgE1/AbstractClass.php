<?php
namespace TemplateMethodEgE1;

/**
 * Абстрактный класс определяет шаблонный метод, содержащий скелет некоторого
 * алгоритма, состоящего из вызовов (обычно) абстрактных примитивных операаций. 
 * 
 * Конкретные подклассы должны реализовывать эти операции, но оставить сам шаблонный метод
 * без изменений.
 */

abstract class AbstractClass
{

  /**Шаблонный метод определяет скелет алгоритма. */

 final public function templateMethod(): void
 {
    $this->baseOperation1();
    $this->requiredOperations1();
    $this->baseOperation2();
    $this->hook1();
    $this->requiredOperations2();
    $this->baseOperation3();
    $this->hook2(); 
 }

 /**
  * Эти операции уже имеют реализации
  */

  protected function baseOperation1(): void
  {
      echo "Абстрактный класс говорит я делаю большую часть работы";
  }

  protected function baseOperation2(): void
  {
      echo "Но я позволяю подклассам переопределять некоторые операции";
  }

  protected function baseOperation3()
  {
      echo "Но я все равно делаю основную работу";
  }

  /**А эти операции должны быть реализованы в подклассах */

  abstract protected function requiredOperations1(): void;

  abstract protected function requiredOperations2(): void;

  /**
   * Это хуки. Подклассы могут переопределять их, но это не обязательно,
   * поскольку у хуков уже есть стандартная но пустая реализация. 
   * Хуки предоставляют дополнительные точки расширения в некоторых критических
   * местах алгоритма.
   */

  protected function hook1(): void {}
  
  protected function hook2(): void {}

}