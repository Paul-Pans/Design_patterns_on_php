<?php
namespace ChainOfResponsibilityEgE1;
include_once 'autoload.php';


echo "Цепочка обязанностей - Chain of responsible.<br>
Поведенческий шаблон проектирования, предназначенный для организации в
системе уровней ответственности. 
</br></br>
в разрабатываемой системе имеется группа объектов, которые могут обрабатывать
сообщения определенного типа.
Все обращения должны быть обработаны хотя бы одним объектом системы. 
Сообщения в системе обрабатываются по схеме обработай сам или передай другому, 
то есть одни сообщения обрабатываются на том уровне, где они получены, а другие
пересылаются объектам иного уровня.
</br></br> Передоваться по цепочке
<i>[Электронный ресурс]: Википедия. Свободная энциклопедия.</i>
<br><br><br>";

$t = new testclass();
echo $t->test();

/**
 * Обычно клиентский код приспособлен для работы единственным обработчиком. 
 * В большинстве случаев клиенту даже неизвестно, что этот обработчик является
 * частью цепочки.
 */

function clientCode(Handler $handler)
{
   foreach(["Nut", "Banana", "Cup of coffe"] as $food){
     echo "client: who wants a ". $food. "? <br><br>";

     $result = $handler->handle($food);

     if($result){
         echo " " . $result;
     }else{
         echo " ".$food. "was left untouched <br><br>";
     }

   }

} 

/** Другая часть клиентского кода создает саму цепочку*/

$monkey = new MonkeyHandler();
$squirrel = new SquirrelHandler();
$dog = new DogHandler();

$monkey->setNext($squirrel)->SetNext($dog);

/**Клиент должен иметь возможность отправить запрос любому обработчику, а
 * не только первому в цепочке
 */

echo "Chain: Monkey - Squirrel - Dog <br><br>";
clientCode($monkey); 

echo "<br><br>";

echo "Subchain: Squirrel - Dog <br><br>";
clientCode($squirrel);


?>
