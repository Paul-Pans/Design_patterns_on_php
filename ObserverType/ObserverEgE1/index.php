<?php
namespace ObserverEgE1;
include_once 'autoload.php';


echo "Наблюдатель (Observer) поведенческий шаблон проектирования 
также известный как подчененные (Dependents).<br>
Реализует у класса механизм, который позволяет объекту класса получать
оповещения об изменении состояния других объектов и тем самым наблюдать
за ними.<br>
Классы, на события которых другие классы подписываются, называются субъектами 
(Subject), а подписывающиеся классы называются наблюдателями (Observers). 
<br>
Определяет зависимость типа один ко многим между объектами таким образом,
что при изменении состояния одного объекта все зависящие от него оповещаются об этом
событии.

<i>[Электронный ресурс]: Википедия. Свободная энциклопедия.</i>
<br><br><br>";

$subject = new Subject();

$o1 = new ConcreteObserverA();
$subject->attach($o1);

$o2 = new ConcreteObserverB();
$subject->attach($o2);

$subject->someBusinessLogic();
$subject->someBusinessLogic();

$subject->detach($o2);

$subject->someBusinessLogic();


?>
