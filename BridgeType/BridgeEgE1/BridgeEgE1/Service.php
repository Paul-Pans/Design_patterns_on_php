<?php
namespace BridgeEgE1;

abstract class Service
{
  protected $implementation;

  public function __construct(Formatter $implementation)
  {
      
  }

  public function setImplementation(Formatter $printer)
  {
      $this->implementation = $printer;
  }

  abstract public function get(): string;
}