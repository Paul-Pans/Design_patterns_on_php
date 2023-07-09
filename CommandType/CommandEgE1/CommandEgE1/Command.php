<?php
namespace CommandEgE1;

/**Интерфейс команды объявляет метод для выполнения команд */

interface Command
{
    public function execute(): void;
}