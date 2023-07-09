<?php
namespace ChainOfResponsibilityEgE1;

/** Интерфейс  обработчика объявляет метод построения
 * цепочки обработчиков. Он также объявляет метод для выполнения
 * запроса.
*/

interface Handler
{
  public function SetNext(Handler $handler):Handler;

  public function handle(string $request): ? string;

}