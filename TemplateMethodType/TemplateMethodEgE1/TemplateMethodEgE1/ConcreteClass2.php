<?php
namespace TemplateMethodEgE1;

/**
 * Обычно конкретные классы переопределяют только часть операций базового класса.
 */

class ConcreteClass2 extends AbstractClass
{
  protected function requiredOperations1(): void
  {
      echo "ConcreteClass2 says: Implements Operation1 <br>";
  }

  protected function requiredOperations2(): void
  {
      echo "ConcreteClass2 says: Implemented Operation2 <br>";
  }

  protected function hook1(): void
  {
    echo "ConcreteClass2 says: Overridden Hook1 <br>";
  }


}