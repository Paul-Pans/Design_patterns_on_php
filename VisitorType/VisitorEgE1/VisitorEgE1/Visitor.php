<?php
namespace VisitorEgE1;

/**
 * Интерфейс посетителя объявляет набор методов посещения, соответствущих
 * классам компонентов. Сигнатура метода посещения позволяет посетителю 
 * определить конкретный класс компонента, с котором он имеет дело.
 */

interface Visitor
{
    public function visitConcreteComponentA(ConcreteComponentA $element): void;

    public function visitConcreteComponentB(ConcreteComponentB $element): void;

}