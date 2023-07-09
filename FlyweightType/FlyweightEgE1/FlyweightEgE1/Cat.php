<?php
namespace FlyweightEgE1;

/**
 * Контекст хранит данные уникальные для каждого элемента в данном случае 
 * кошки 
 * 
 * Создавать отдельный класс для хранения контектса не всегда целесообразно. 
 * Контекст может храниться внутри громоздкой структуры данных в коде клиента и 
 * при необходимости передоваться в методы легковеса.
 */

class Cat
{
    /**Так называемое внешнее состояние */
  
    public $name;
    public $age;
    public $owner;

    /**
     * @var CatVariation
     */

    private $variation; //сюда положим объект легковес с общими свойствами

    public function __construct(string $name, string $age, string $owner, CatVariation $variation)
    {
        $this->name = $name;
        $this->age = $age;
        $this->owner = $owner;
        $this->variation = $variation;
    }

/**
 * Поскольку объекты Контекста не владеют всем своим состоянием, 
 * иногда для удобства можно реализовать несколько вспомогательных
 * методов. Например, для сравнения нескольких объектов контекста
 * между собой.
 */

  public function matches(array $query): bool
  {
    foreach ($query as $key => $value){
        if(property_exists($this, $key)){
          if($this->$key != $value){
             return false;
          }
        } elseif(property_exists($this->variation->$key, $key)){
          if($this->variation->$key != $value){
            return false;
          }

        }else{
          return false;  
        } 
     
    }

    return true;
  }

  /**
   * Кроме того Контекст может определять несколько методов быстрого доступа
   * которые делегируют исполнение объекту Легковесу. Эти методы могут быть остатками реальных
   * методов, извлеченных в класс Легковеса во время массивного рефакторинга к паттерну Легковес.
   */

  public function render()
  {
    $this->variation->renderProfile($this->name, $this->age, $this->owner);
  }


}//end class