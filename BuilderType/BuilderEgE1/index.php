<?php
namespace BuilderEgE1;

include_once 'autoload.php';

echo "1. Строитель (англ. Builder) — порождающий шаблон проектирования предоставляет способ создания составного
объекта. Отделяет конструирование сложного объекта от его представления так, что в результате одного и того же
процесса конструирования могут получаться разные представления.
<i>[Электронный ресурс]: Википедия. Свободная энциклопедия.</i>
<br><br><br>";




$t = new testclass();
echo $t->test();

function clientCode(Director $director)
{
  $builder = new ConcreteBuilder1();
  $director->setBuilder($builder);

  echo "Standard basic product:<br>";
  $director->buildMinimalVariableProduct();
  $builder->getProduct()->listParts();

  echo "Standard basic product:<br>";
  $director->buildFullFeaturedProduct();
  $builder->getProduct()->listParts();

  // Помните, что паттерн Строитель можно использовать без класса Директор.
  echo "Custom product:\n";
  $builder->producePartA();
  $builder->producePartB();
  $builder->getProduct()->listParts();


}

$director = new Director();
clientCode($director);


?>
