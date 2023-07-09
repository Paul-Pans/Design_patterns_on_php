<?php
namespace VisitorEgE1;
include_once 'autoload.php';


echo "Посетитель (visitor) повденческий шаблон проектирования, описывающий операцию,
которая выполняется над объектами других классов. При изменении visitor нет необходимости
изменять обслуживаемые классы. 

Шаблон демонстрирует классический прием восстановления информации о потерянных типах,
не прибегая к понижающему приведению типов при помощи двойной диспетчеризации.

<i>[Электронный ресурс]: Википедия. Свободная энциклопедия.</i>
<br><br><br>";

$t = new testclass();
echo $t->test();

/**Клиентский код может выполнять операции посетителя над любым набором 
 * элементов, не выясняя их конкретных классов. Операция принятия направляет
 * вызов к соответствующей операции в объекте посетителя.
 */

function clientCode(array $component, Visitor $visitor)
{
   
   foreach ($component as $component) {
      
     $component->accept($visitor);

   }

}

$component = [
    new ConcreteComponentA(),
    new ConcreteComponentB(),
];

echo "Клиентский код работает со всеми посетителями через базовый интерфейс посетителей<br>";
$visitor1 = new ConcreteVisitor1();
clientCode($component, $visitor1);
echo "<br><br>";

echo "Это позволляет одному клиентскому коду работать с разными типами посетителей<br>";
$visitor2 = new ConcreteVisitor2();
clientCode($component, $visitor2);


?>
