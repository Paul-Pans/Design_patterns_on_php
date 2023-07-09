<?php
namespace CommandEgE1;

/** 
 * receiver - получатель
 * Класс получателей содержит некую важную бизнес логику. 
 * Они умеею выполнять все виды операций связанных с выполнением запроса. 
 * Фактически любой класс может выступать получателем
 */

class Receiver
{
    public function doSomething(string $a): void
    {
        echo "Receiver: working on ( $a )<br><br>";
    }

    public function doSomethingElse(string $b): void
    {
        echo "Receiver: Также работают над $b";
    }
}

