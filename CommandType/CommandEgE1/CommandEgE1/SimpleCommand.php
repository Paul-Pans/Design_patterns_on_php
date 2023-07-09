<?php
namespace CommandEgE1;

/**Некоторые команды способны выполнять простые операции самостоятельно */

class SimpleCommand implements Command
{
    private $payload;

    public function __construct(string $payload)
    {
        $this->payload = $payload;
    }

    public function execute(): void
    {
      echo "SimpleCommand : Я умею делать простые вещи, например печатать ( $this->payload ) <br><br>";

    }
}