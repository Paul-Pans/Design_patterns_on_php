<?php
namespace IteratorEgE1;


use Iterator;
/**
 * PHP имеет встроенный интерфейс Итератора, который предоставляет очень удобную 
 * интеграцию с циклами foreach. Вот как выглядит интерфейс:
 * 
 * @link http://php.net/manual/ru/class.iterator.php
 * 
 *   interface Iterator extends Traversable {
 *    
 *    //Возрат текущего значения
 *    public function current();
 * 
 *    //Переход к следующему элементу. 
 *    public function next(); 
 * 
 *    //Возрат ключа текущего элемента.
 *    public function key();
 * 
 *   //Проверяет корректность текущей позиции. 
 *   public function valid(); 
 *   
 *   //Перемотка Итератора к первому элементу
 *   public function rewind();
 *   
 *   }
 * 
 * Также есть встроенный интерфейс для коллекций:
 * 
 * @link http://php.net/manual/ru/class.iteratoraggregate.php
 * 
 *   interface IteratorAggregate extends Traversable {
 *    public getIterator(): Traversable;
 *   }
 */

/**
 * Конкретные Итераторы реализуют различные алгоритмы обхода. Эти классы
 * постоянно хранят текущие положение обхода.
 */

class AlfabeticalOrderIterator implements \Iterator
{

    /** @var WordsCollection */
    private $collection;

    /**
     * var int Хранит текущее положение обхода. У итератора может быть
     * множество других полей для хранения состояния итерации, особенно когда он 
     * должен работать с определенным типом коллекции.
     */

    private $position = 0;

    /**var  bool Эта переменная указывает направление обхода. */

    private $reverse = false;

    public function __construct($collection, $reverse = false)
    {
        $this->collection = $collection;
        $this->reverse = $reverse;
    }

    //Перемотка итератора к первому элементу
    public function rewind()
    {
        $this->position = $this->reverse ?
             count($this->collection->getItems()) - 1 : 0;
    }

    //Возврат текущего значения
    public function current()
    {
        return $this->collection->getItems()[$this->position];
    }

    //Возврат ключа текущего элемента
    public function key()
    {
      return $this->position;
    }

    //Переход к следующему элементу
    public function next()
    {
     $this->position = $this->position + ($this->reverse ? -1 : 1);
    }

    //Проверяет коррекность текущей позиции
    public function valid()
    {
        return isset($this->collection->getItems()[$this->position]);
    }


} 
