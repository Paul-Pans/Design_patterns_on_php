<?php
namespace PrototypeEgE1;

/**
 * Прототип.
 */
class Unit
{
   private $seriesUnit;

   private $safetyMargin;

   private $commander;

   private $equipment = [];

   private $speed;

   // +100 приватных полей

  public function __construct(string $seriesUnit, string $safetyMargin, Commander $commander)
  {
    $this->seriesUnit = $seriesUnit;
    $this->safetyMargin = $safetyMargin;
    $this->commander = $commander;
    $this->commander->addToCapacity($this);

  }

  public function addEquipment(string $equipment)
  {
    $this->equipment[] = $equipment;
  }
  
  /**
     * Вы можете контролировать, какие данные вы хотите перенести в
     * клонированный объект.
     *
     * Например, при клонировании страницы:
     * - Она получает новый заголовок «Копия ...».
     * - Автор страницы остаётся прежним. Поэтому мы оставляем ссылку на
     * существующий объект, добавляя клонированную страницу в список страниц
     * автора.
     * - Мы не переносим комментарии со старой страницы.
     * - Мы также прикрепляем к странице новый объект даты.
     */

  public function __clone()
  {
    $this->seriesUnit = "Copy of " . $this->seriesUnit;
    $this->commander->addToCapacity($this);
    $this->equipment = [];
    
  }


}