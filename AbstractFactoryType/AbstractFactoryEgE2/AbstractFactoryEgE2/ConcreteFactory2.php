<?php
namespace AbstractFactoryEgE2;

/**
 * Каждая конкретная фабрика имеет соответствующую вариацию продукта
 */
class ConcreteFactory2 implements AbstractFactory
{

    public function createProductA()
    {
        return new ConcreteProductA2();
    }

    public function createProductB()
    {
        return new ConcreteProductB2();
    }

}