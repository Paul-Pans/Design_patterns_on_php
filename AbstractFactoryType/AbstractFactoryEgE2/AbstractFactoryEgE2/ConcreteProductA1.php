<?php
namespace AbstractFactoryEgE2;

/**
 * Конкретные продукты создаются соответствующими конкретным фабрикам
 */

class ConcreteProductA1 implements AbstractProductA
{

    public function usefulFunctionA(){

        return "Это результат продукт А1";
    }
}