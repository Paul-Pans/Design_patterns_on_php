<?php
namespace FlyweightEgE1;

/**Фабрика Легковесов хранит объекты Контекст и 
 * легковес, эффективно скрывая любое упоминание
 * о паттерне легковес от клиента.
 */

class CatDataBase
{
  /**Список объектов кошек Контексты */
  private $cats = [];

  /**Список вариаций кошки (Лугковесы) */
  private $variation = [];

  /**При добавлении кошки в базу данных мы сначала ищем 
   * существующую вариацию
   */
  
  public function addCat(
    string $name,
    string $age,
    string $owner,
    string $breed,
    string $image,
    string $color,
    string $texture,
    string $fur,
    string $size
  ){
      $variation = $this->getVariation($breed, $image, $color, $texture, $fur, $size);
      $this->cats[] = new Cat($name, $age, $owner, $variation);
      echo "CatDataBase: Added a cat ($name, $breed).\n";
  }

  /**Возращаем существующий вариант легковеса по указанным данным
   * или создаем новый если он не существует.
   */
  public function getVariation(
    string $breed,
    string $image, 
    string $color,
    string $texture,
    string $fur,
    string $size 
  ): CatVariation{
     $key = $this->getKey(get_defined_vars());

     if(!isset($this->variation[$key])){
      $this->variation[$key] = new CatVariation($breed, $image, $color, $texture, $fur, $size);
     }

     return $this->variation[$key];
  }

  /**Эта функция помогает генерировать уникальные ключи массива */
  private function getKey(array $data):string
  {
    return md5(implode("__", $data));  
  }

  /**
   * Ищем кошку в базу данных, используя заданные параметры запроса
   */
  public function findCat(array $query)
  {
      foreach($this->cats as $cat){
          if($cat->matches($query)){
              return $cat;
          }
      }
      echo "CatDataBase: Sorry, your query does not yield any results.";
  }

} 