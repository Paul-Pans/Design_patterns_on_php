<?php
namespace IteratorEgE1;

use Iterator;

/**Конкретные Коллекции предоставляют один или несколько методов для 
 * получения новых экземпляров итератора, совместимых с классом коллекции.
 */

class WordsCollection implements \IteratorAggregate
{
  private $items = [];

  public function getItems()
  {
      return $this->items;
  }

  public function addItem($item)
  {
      $this->items[] = $item;
  }

  public function getIterator(): Iterator
  {
      return new AlfabeticalOrderIterator($this);
  }

  public function getReverseIterator(): Iterator
  {
      return new AlfabeticalOrderIterator($this, true);
  }

}
