<?php
namespace StateEgE1;

/**
 * Базовый класс Состояние объявляет методы, которые должны реализовывать все
 * конкретные состояния, а также предоставляет обратную ссылку на объект Контекст,
 * связанный с Состоянием. Это обратная ссылка может использоваться Состоянием для
 * передачи Контекста другому Состоянию.
 */

 abstract class State
 {
   
    /**@var Context */
    protected $context;

    public function setContext(Context $context)
    {
      $this->context = $context; 
    }

    abstract public function handle1(): void;

    abstract public function handle2(): void;


 }