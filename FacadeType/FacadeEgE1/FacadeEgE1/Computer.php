<?php
namespace FacadeEgE1;

/**
 * Пример шаблона фасад
 * в качестве унифицированного объекта выступает 
 * Компьютер
 * За эти объектом будут скрыты все детали
 * работы его внутренних частей.
 */

class Computer
{
  protected $cpu;
  protected $memory;
  protected $hardDrive;

  /**
   * Компьютер конструктов инициализируем части
   */
 
  public function __construct()
  {
    $this->cpu = new CPU();
    $this->memory = new Memory();
    $this->hardDrive = new HardDrive();
  }

  /**Упрошенная обработка поведения запусе компьютера */

  public function startComputer()
  {
    $cpu = $this->cpu;
    $memory = $this->memory;
    $hardDrive = $this->hardDrive;

    $cpu->freeze();
    $memory->load(
       $memory::BOOT_ADDRESS,
       $hardDrive->read($hardDrive::BOOT_SECTOR, $hardDrive::SECTOR_SIZE)
    );
   $cpu->jump($memory::BOOT_ADDRESS);
   $cpu->execute();

  } 

}