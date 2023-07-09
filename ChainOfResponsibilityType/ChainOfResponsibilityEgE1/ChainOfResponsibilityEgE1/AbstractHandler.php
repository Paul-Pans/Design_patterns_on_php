<?php
namespace ChainOfResponsibilityEgE1;

/**
 * Поведение цепочки по умолчанию может быть реализовано 
 * внутри базового класса 
 */

abstract class AbstractHandler implements Handler
{
  /**
   * @var Handler
   */

    private $nextHandler;
    
    public function setNext(Handler $handler): Handler
    {
        $this->nextHandler = $handler;

        /** Возврат обработчиков отсюда позволит связать
         * обработчики простым способом вот так
        * $monkey->setNext($squirrel)->setNext($dog);
        *
        */

        return $handler;
    }
   
    public function handle(string $request): ?string
    {
        if($this->nextHandler){
            return $this->nextHandler->handle($request);
        }

        return null;
    }

}