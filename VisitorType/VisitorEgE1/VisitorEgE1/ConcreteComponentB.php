<?php
namespace VisitorEgE1;

/**То же что в компоненте А */
class ConcreteComponentB implements Component
{

  public function accept(Visitor $visitor): void
  {
      $visitor->visitConcreteComponentB($this);
  }

  public function specialMethodOfConcreteComponentB(): string
  {
      return "B";
  }
  

}