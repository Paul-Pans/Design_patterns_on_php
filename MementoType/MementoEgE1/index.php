<?php
namespace MementoEgE1;
include_once 'autoload.php';

echo "1. Хранитель, снимок (Memento) поведенческий шаблон проектирования позволяющий не нарушая
инкапсуляцию,зафиксировать и сохранить внутренее состояние объекта так, чтобы позднее восстановить
его в это состояние. 

<i>[Электронный ресурс]: Википедия. Свободная энциклопедия.</i>
<br><br><br>";

$t = new testclass();
echo $t->test();

$originator = new Originator("Super-duper-super-puper-super.");
$caretaker = new Caretaker($originator);

$caretaker->backup();
$originator->doSomething();

$caretaker->backup();
$originator->doSomething();

$caretaker->backup();
$originator->doSomething();

echo "<br>";
$caretaker->showHistory();

echo "<br> Client Now let 's rollback </br>";
$caretaker->undo();

echo "<br> Client: Once more</br>";
$caretaker->undo();

?>
