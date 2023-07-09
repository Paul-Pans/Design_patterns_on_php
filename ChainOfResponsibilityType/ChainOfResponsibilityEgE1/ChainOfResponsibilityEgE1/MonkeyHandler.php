<?php
namespace ChainOfResponsibilityEgE1;

/**
 * Все конкретные обработчики либо обрабатывают запрос, либо
 * передают его следующему обработчику в цепочке.
 */

class MonkeyHandler extends AbstractHandler
{
    public function handle(string $request): ? string
    {
        if($request === "Banana") {
          return "Monkey: eat the". $request . "</br>";
        }else{
            return parent::handle($request);
        }
    }
}