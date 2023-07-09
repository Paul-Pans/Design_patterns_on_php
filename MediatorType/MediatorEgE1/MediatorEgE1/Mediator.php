<?php
namespace MediatorEgE1;

/**Интерфейс Посредника предоставляет метод, используемый  компонентами для 
 * уведомления посредника о различных событиях. Посредник может реагировать на эти 
 * события и передовать исполнение другим компонентам.
 */

interface Mediator
{
    public function notify(object $sender, string $event): void;
}