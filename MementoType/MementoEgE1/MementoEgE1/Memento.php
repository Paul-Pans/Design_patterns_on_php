<?php
namespace MementoEgE1;

/**
 * Интерфейс снимка предоставляет способ извлечения методанных снимка, таких
 * как дата создания или название. Однако он не раскрывает состояние Создателя.
 */

interface Memento
{
    public function getName(): string;

    public function getDate(): string;
}

