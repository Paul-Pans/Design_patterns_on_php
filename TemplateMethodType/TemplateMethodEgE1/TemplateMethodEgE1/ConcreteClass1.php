<?php
namespace TemplateMethodEgE1;

/**
 * Конкретные классы должны реализовывать все абсрактные операции базового класса. 
 * Они также могут переопределить некоторые операции с реализацией по умолчанию.
 */

class ConcreteClass1 extends AbstractClass
{
  
    protected function requiredOperations1(): void
    {
        echo "ConcreteClass1 says: Implemented Operation1 <br>";
    }

    protected function requiredOperations2(): void
    {
        echo "ConcreteClass1 says: Implemented Operation2 <br>";
    }


}