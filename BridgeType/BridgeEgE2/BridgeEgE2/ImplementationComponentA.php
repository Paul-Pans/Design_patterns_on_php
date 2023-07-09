<?php
namespace BridgeEgE2;

/**
 * Каждая конкретная Реализация соответсвует определенной платформе и реализует
 * интерфейс реализации с использованием API этой платформы.
 */

class ImplementationComponentA implements Implementation
{

    public function operationImplementation()
    {
        return " Компонет А: результат реализации А <br>";
    }
}