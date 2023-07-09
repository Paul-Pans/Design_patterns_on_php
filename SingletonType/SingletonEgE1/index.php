<?php
namespace SingletonEgE1;
include_once 'autoload.php';

echo "1. Одиночка (англ. Singleton) — порождающий шаблон проектирования, гарантирующий, что в
однопоточном приложении будет единственный экземпляр некоторого класса,
и предоставляющий глобальную точку доступа к этому экземпляру.

<i>[Электронный ресурс]: Википедия. Свободная энциклопедия.</i>
<br><br><br>";


$t = new testclass();
echo $t->test();


/**
 * Клиентский код.
 */
function clientCode()
{
    $firstCall = Singleton::getInstance();
    $secondCall  = Singleton::getInstance();

    if ($firstCall === $secondCall) {
        echo "Объекты одинаковы, синглетон работает";
    } else {
        echo "Объекты разные, что-то не так";
    }
}

clientCode();
?>
