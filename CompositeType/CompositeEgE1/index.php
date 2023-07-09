<?php
namespace CompositeEgE1;
include_once 'autoload.php';

echo "Компоновщик (англ. Composite pattern) — структурный шаблон проектирования, объединяющий объекты 
в древовидную структуру для представления иерархии от частного к целому. 
Компоновщик позволяет клиентам обращаться к отдельным объектам и к группам объектов одинаково. 

<br> Паттерн определяет иерархию классов, которые одновременно могут состоять из примитивных и сложных объектов, 
упрощает архитектуру клиента, делает процесс добавления новых видов объекта более простым.

<i>[Электронный ресурс]: Википедия. Свободная энциклопедия.</i>
<br><br><br>";

$t = new testclass();
echo $t->test();

function clientCode(Component $component)
{

    echo "RESULT: ". $component->operation();
}

/**
 * Таким образом, клиентский код может поддерживать простые компоненты листья
 */
$simple = new Leaf();
echo "Client simple component <br>";
clientCode($simple);
echo "<br><br>";
/**
 * а также сложные контейнеры
 */

$tree = new Composite();
$branch1 = new Composite();
$branch1->add(new Leaf());
$branch1->add(new Leaf());

$branch2 = new Composite();
$branch2->add(new Leaf());

$tree->add($branch1);
$tree->add($branch2);

clientCode($tree);
?>
