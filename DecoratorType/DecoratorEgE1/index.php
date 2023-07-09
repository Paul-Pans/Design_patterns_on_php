<?php
namespace DecoratorEgE1;
include_once 'autoload.php';

echo "Декоратор (англ. Decorator) — структурный шаблон проектирования, 
предназначенный для динамического подключения дополнительного поведения к объекту.
 Шаблон Декоратор предоставляет гибкую альтернативу практике создания 
 подклассов с целью расширения функциональности. 
 <i>[Электронный ресурс]: Википедия. Свободная энциклопедия.</i>
<br><br><br>";

$t = new testclass();
//echo $t->test();

/**
 * Клиентский код работает со всеми объектами, используя интерфейс Компонента. 
 * Таким образом, он остается независимым от конкретных классов компонентов, с
 * которым работает. 
 */

function clientCode(Component $component)
{
  
    echo "RESULT: " . $component->operation();

}
/**
 * Таким образом, клиентский код может поддерживать как простые компоненты...
 */

$simple = new ConcreteComponent();
echo "Client: simple component <br>";
clientCode($simple);
echo "<br>";

/**так и декорированные */
$decorator1 = new ConcreteDecoratorA($simple);
$decorator2 = new ConcreteDecoratorB($decorator1);
echo "Client: decoration component <br>";
clientCode($decorator2);

?>
