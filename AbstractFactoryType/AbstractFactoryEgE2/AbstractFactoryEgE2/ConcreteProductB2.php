<?php
namespace AbstractFactoryEgE2;

/**
* Конкретные продукты создаются соответствующими конкретным фабрикам
*/

class ConcreteProductB2 implements AbstractProductB
{

    public function usefulFunctionB()
    {
        return "Результат продукта Б2 <br>";
    }

    /**
     * Продукт Б2 может корректно работать только с продуктом А2.
     * Тем не менее, он принимает любой экземпляр Абстрактного продукта
     * А в качестве аргумента.
     */

     public function anotherUsefulFunctionB(AbstractProductA $collaborator)
     {
         $result = $collaborator->usefulFunctionA();

         return "Результат взаимодействия Б1 с ({$result})";
     }

}