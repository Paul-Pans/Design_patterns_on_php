<?php
namespace PrototypeEgE1;

class Commander
{
  private $name;

  private $capacity = [];

  public function __construct(string $name)
  {
    $this->name = $name;  
  }

  public function addToCapacity(Unit $capacity)
  {
    $this->capacity[] = $capacity; 
  }


}