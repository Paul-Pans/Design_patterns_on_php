<?php
namespace AdapterV1;

/**
 * это адаптированный класс. В производственном коде это может быть класс из другого 
 * пакета, код какого-либо поставщика. * Обратите внимание, что он использует другую схему именования, 
 * и реализация делает что-то похожее, но по-другому
 * 
 */

class Kindle implements EBook
{
  private int $page = 1;
  private int $totalPages = 100;

  public function pressNext()
  {
      $this->page++;
  }

  public function unlock()
  {
      
  }

  public function getPage():array
  {
      return [$this->page, $this->totalPages];
  }


}

