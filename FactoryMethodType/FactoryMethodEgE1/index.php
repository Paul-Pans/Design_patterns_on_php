<?php
namespace FactoryMethodEgE1;
include_once 'autoload.php';

echo "1. Фабричный метод (англ. Factory Method), или виртуальный конструктор (англ. Virtual Constructor)
— порождающий шаблон проектирования, предоставляющий подклассам (дочерним классам) интерфейс
для создания экземпляров некоторого класса.
В момент создания наследники могут определить, какой класс создавать.
Иными словами, данный шаблон делегирует создание объектов наследникам родительского класса.
 Это позволяет использовать в коде программы не специфические классы,
 а манипулировать абстрактными объектами на более высоком уровне.

<i>[Электронный ресурс]: Википедия. Свободная энциклопедия.</i>
<br><br><br>";



$t = new testclass();
echo $t->test();

function clientFactory(Creator $creator)
{

    echo "<br><br> Client " .$creator->someOperation();
}

/**
 * Приложение выбирает тип создателя в зависимости от конфигурации или среды.
 */
//echo "App: Launched with the ConcreteCreator1.\n";
clientFactory(new CreatorA());
echo "\n\n";

//echo "App: Launched with the ConcreteCreator2.\n";
clientFactory(new CreatorB());

?>
