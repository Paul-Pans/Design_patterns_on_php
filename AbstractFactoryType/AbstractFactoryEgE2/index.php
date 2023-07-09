<?php
namespace AbstractFactoryEgE2;
include_once 'autoload.php';

echo "1. Предоставляет интерфейс для создания семейств взаимосвязанных или взаимозависимых объектов,
не специфицируя их конкретных классов. <i>[Электронный ресурс]: Википедия. Свободная энциклопедия.</i>
<br><br><br>";


/**
 * Клиентский код работает с фабриками и продуктами только через абстрактные
 * типы: Абстрактная фабрика и Абстрактный продукт. Это позволяет передовать
 * любой подкласс фабрики или продукта клиентскому коду, не нарушая его.
 */

function clientCode(AbstractFactory $factory)
{
  $productA = $factory->createProductA();
  $productB = $factory->createProductB();

  echo $productA->usefulFunctionA() . "<br>";
  echo $productB->usefulFunctionB() . "<br>";
  echo $productB->anotherUsefulFunctionB($productA) . "\n";

}

/**
 * Клиентский код может работать с любым конкретным классом фабрики
 */

 echo "Клиент: Тестирование клиентского кода с первой фабрикой <br>";
 clientCode(new ConcreteFactory1());

 echo "<br>";

 echo "Клиент: Тестирование клиентского кода с второй фабрикой <br>";
 clientCode(new ConcreteFactory2());

?>
