<?php
namespace AbstractFactoryEgE2;

/**
 * Конкретная фабрика производит семейство продуктов одной вариации.
 * Фабрика гарантирует совместимость полученных продуктов. Обратите
 * внимание, что сигнатуры методов конкретной фабрики возвращают
 * абстракный продукт, в то время как внутри метода создается экземпляр
 * конкретного продукта.
 */

class ConcreteFactory1 implements AbstractFactory
{
    public function createProductA()
    {
        return new ConcreteProductA1();
    }

    public function createProductB()
    {
       return new ConcreteProductB1();
    }
}