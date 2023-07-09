<?php
namespace BridgeEgE1;
include_once 'autoload.php';

echo "Шаблон мост (англ. Bridge) — структурный шаблон проектирования, используемый в проектировании программного обеспечения 
чтобы «разделять абстракцию и реализацию так, чтобы они могли изменяться независимо». 
Шаблон мост использует инкапсуляцию, агрегирование и может использовать наследование для того,
 чтобы разделить ответственность между классами. 
 
 При частом изменении класса преимущества объектно-ориентированного подхода становятся очень полезными, 
 позволяя делать изменения в программе, обладая минимальными сведениями о реализации программы. 
 Шаблон bridge является полезным там, где часто меняется не только сам класс, 
 но и то, что он делает.
 <i>[Электронный ресурс]: Википедия. Свободная энциклопедия.</i>
<br><br><br>";

$t = new testclass();
echo $t->test();

//Проверка не работает что то пример кривоватый 

function clientCode(Service $ServiceClass)
{
  
    return $ServiceClass->get();
}

function testPlainText()
{
    $service = new HelloWorldService(new PlainTextFormatter());
    $service->setImplementation(new PlainTextFormatter());
    //$service->setImplementation(new HtmlFormatter());

    //print_r($service);
    return $service->get();
}

echo testPlainText();

?>
