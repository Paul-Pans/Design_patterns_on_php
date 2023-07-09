<?php
namespace BridgeEgE2;

//абстракция или интерфейс - это образный слой
//управления чем либо. Он не делает работу самостоятельно
//а делегирует работу слою реализации, иногда называемому 
//платформой

class Abstraction
{
/**
 *  implementation - реализация
 *  @var Implementation
 */

    protected $implementation;

    public function __construct(Implementation $implementation)
    {
        $this->implementation = $implementation;
    }

    public function operation()
    {
        return "Abstraction: Base operation with: \n" . 
          $this->implementation->operationImplementation();
    }


}