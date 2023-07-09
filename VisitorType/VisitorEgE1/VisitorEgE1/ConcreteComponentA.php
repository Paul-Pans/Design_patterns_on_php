<?php
namespace VisitorEgE1;

/**Каждый компонент должен реализовать метод accept таким образом,
 * чтобы он вызывал метод поситителя, соответствующий классу компонента
 */

class ConcreteComponentA implements Component
{
    /**
     * Мы вызываем visitConcreteComponentA, что соответствует названию
     * текущего класса. Таким образом мы позволяем посетителю узнать, с
     * каким классом компонента он работает. 
     */

    public function accept(Visitor $visitor): void
    {
      $visitor->visitConcreteComponentA($this);

    }

    /**Конкретные компоненты  могут имееть особые методы, не объявленные в их
     * базовом классе или интерфейсе. Посетитель все же может использовать эти
     * методы, поскольку он знает о конкретном классе компонента.
     */

    public function exclusiveMethodOfConcreteComponentA(): string
    {
        return "A";
    }
}