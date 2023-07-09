<?php
namespace AbstractFactoryV1;
include_once 'autoload.php';

echo "1. Предоставляет интерфейс для создания семейств взаимосвязанных или взаимозависимых объектов, 
не специфицируя их конкретных классов. <i>[Электронный ресурс]: Википедия. Свободная энциклопедия.</i>
<br><br><br>";


function clientCode(FactoryInterface $factory)
{
    $productA = $factory->createReportExel();

    $productB = $factory->createReportXML();

    echo $productA->ExelWrite();
    echo $productB->XMLWrite();
}

/**
 * Клиентский код может работать с любым конкретным классом фабрики.
 */
echo "Client: Testing client code with the first factory type: <br>";
clientCode(new UnixWriterFactory());

echo "<br>";

echo "Client: Testing the same client code with the second factory type: <br>";
clientCode(new WinWriterFactory());

?>
