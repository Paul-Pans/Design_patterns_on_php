<?php
namespace DecoratorEgE1;

/**Базовый интерфейс Компонента определяет поведение,
 * которое изменяется декораторами.
 */
interface Component
{
    public function operation();
}